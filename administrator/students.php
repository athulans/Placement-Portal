<?php
session_start();
if (($_SESSION["Admin"] == 0) || !isset($_SESSION["Admin"])) {
	header("location:http://sahrdaya.ac.in");
}
include_once("phpgrid/config.php"); 
mysql_connect('localhost','root','');
mysql_select_db(PHPGRID_DBNAME); 
include_once "database_credentials.php";
$con = mysql_connect("localhost", $db_username, $db_password);
mysql_select_db($database);
if (!$con) {
	die('Could not connect: ' . mysql_error());
}
// Create table
mysql_select_db("placement_sahrdaya", $con);
$sql = "select * from student";
$result = mysql_query($sql, $con);
include(PHPGRID_LIBPATH."inc/jqgrid_dist.php"); 
$g = new jqgrid(); 

// set few params 
$grid["caption"] = "Students"; 
$g->set_options($grid); 

// set database table for CRUD operations 
$g->table = "student"; 

// render grid 
$out = $g->render("list1"); 
?>

<?php 
$route='admin';
require_once( 'header.php' ); 
?>


<link rel="stylesheet" type="text/css" media="screen" href="phpgrid/lib/js/themes/redmond/jquery-ui.custom.css"></link>
<link rel="stylesheet" type="text/css" media="screen" href="phpgrid/lib/js/jqgrid/css/ui.jqgrid.css"></link>     
  
    <script src="phpgrid/lib/js/jquery.min.js" type="text/javascript"></script> 
    <script src="phpgrid/lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script> 
    <script src="phpgrid/lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>     
    <script src="phpgrid/lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script> 

				
			<div class="col-md-offset-1 col-md-10"> 
    <?php echo $out?> 
    <div><form action="exporttoxls.php"><input type="submit" class="btn btn-primary" value="Export to XLS"></form></div> 	
    </div>
    
			

<?php 
require_once( '../footer.php' ); 
?>
