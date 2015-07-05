<?php
session_start();
if (($_SESSION["Admin"] == 0) || !isset($_SESSION["Admin"])) {
	header("location:http://sahrdaya.ac.in");
}

include_once "database_credentials.php";
$con = mysql_connect("localhost", $db_username, $db_password);
mysql_select_db($database);
if (!$con) {
	die('Could not connect: ' . mysql_error());
}
// Create table
mysql_select_db("placement_sahrdaya", $con);
$sql = "SELECT UID,SrNo,Resume FROM student WHERE Resume IS NOT NULL";
$result = mysql_query($sql, $con);
$sourcedir="../resume/";
$route='admin';
require_once( 'header.php' ); 
?>

<div class="col-md-offset-2 col-md-8">

	<h3>User Details:
		<div class="btn-group btn-group-sm pull-right" role="group">
		</div>
	</h3>	
	<table id="data" class="table table-hover" >
		
		<thead>
		<tr><th>UID</th><th>SrNo</th><th>Link</th></tr>
		</thead>
		<tbody>
		<?php
		while (($row = mysql_fetch_array($result))) {
			echo '<tr><td id="a'.$row["UID"].'">' . $row["UID"] . '</td><td id="b'.$row["UID"].'">'.$row["SrNo"].'</td><td >' . 
			'<a href="'.$sourcedir.$row["Resume"].'">Download Resume</a>'
			.'</td></tr>';
		}
		?>
		</tbody>
	</table>
</div>

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
<script>

$(document).ready(function() {
    $('#data').dataTable();
} );
</script>


<?php 
require_once( '../footer.php' ); 
?>
