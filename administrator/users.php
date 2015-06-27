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
$sql = "select * from users";
$result = mysql_query($sql, $con);

$route='admin';
require_once( 'header.php' ); 
?>


<script>
function popup(x) {

	$("#UIDl").val($("#a" + x).text());
	$("#UNl").val($("#b" + x).text());
	$("#Pl").val($("#c" + x).val());
	$("#flag").val("1");
	$('#myModal').modal('show');
}
function newuser()
{
	$('#Pl').password('hide');
	$("#UIDl").val("");
	$("#UNl").val("");
	$("#Pl").val("");
	$("#flag").val("0");
	$('#myModal').modal('show');
}
</script>

<div class="col-md-offset-2 col-md-8">

	<h3>User Details:
		<div class="btn-group btn-group-sm pull-right" role="group">
			<input type="button" class="btn btn-default" value="New User" onclick="newuser()" />
			<a class="btn btn-default " href="batch.php"/>Batch Add</a>
			<a class="btn btn-default" href="advancedusers.php">...</a>
		</div>
	</h3>
	
	<table id="data" class="table table-hover" >
		
		<thead>
		<tr><th>UID</th><th>User Name</th><th>Password</th></tr>
		</thead>
		<tbody>
		<?php

		while (($row = mysql_fetch_array($result))) {
			echo '<tr onclick="popup(' . $row[0] . ')"><td id="a'.$row[0].'">' . $row[0] . '</td><td id="b'.$row[0].'">'.$row[1].'</td><td >' . 
			'<input id="c'.$row[0].'" class="form-control"  type="password"  value="'.$row[2] .'"  readonly>'
			.'</td></tr>';
		}
		?>
		<tbody>
	</table>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">User</h4>
			</div>
			<div class="clearfix modal-body">
				<form action="edituser.php" method="post">
					<input id="UIDl" name="uid" type="hidden" >
					<div class="form-group">
						<label>User Name:</label>
						<input class="form-control" id="UNl" name="username" type="text">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input data-toggle="password" data-placement="after" placeholder="password" class="form-control" id="Pl" name="password" type="password" >
					</div>
					<input id="flag" name="flag" type="hidden" value="0">

					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Save">
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="modal-footer">
</div>
</div>
</div>
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