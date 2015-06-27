<?php session_start();  

if(isset($_POST["start"]) && isset($_POST["stop"]) && isset($_POST["password"])){

//*************************************************************************
if (($_SESSION["Admin"] == 0) || !isset($_SESSION["Admin"])) {
  header("location:http://sahrdaya.ac.in");
}
include_once "database_credentials.php";
$con = mysql_connect("localhost", $db_username, $db_password);
mysql_select_db($database,$con);
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
// Create table
$start = $_POST["start"];
$stop = $_POST["stop"];
$password= $_POST["password"];
for($i= $start; $i<=$stop;$i++)
{
  $sql = "insert into users(User_Name,Password,Admin) values('$i','$password','0')";
  mysql_query($sql, $con);
  $result =mysql_query("select * from users order by UID desc",$con);
  $row=mysql_fetch_array($result);
  $sql = "insert into student (UID) values('$row[0]')";
  mysql_query($sql, $con);
}
mysql_close($con);
header("location:users.php");
//*************************************************************************

}

$route='login';
require_once( 'header.php' ); 
?>

<div id="login" class="col-md-offset-4 col-md-4">
  <h3>Batch Add Users</h3>
  <form id="batchform" action="" method="post">
    <div id="startgrp" class="form-group">
      <label >User Name start: </label>
      <input id="start" name="start"  oninput="check3('start')" class="form-control" type="text">
    </div>
    <div id="stopgrp" class="form-group">
      <label >User Name end: </label>
      <input id="stop" name="stop" oninput="check3('stop')" class="form-control" type="text">
    </div>
    
    <div id="passwordgrp" class="form-group">
      <label>Default Password:</label> 
        <input data-toggle="password" data-placement="after" id="password" name="password" oninput="check3('password')" class="form-control" type="password">
     </div>
     <button type="button" onclick="check()" class="btn btn-default">Add Users</button>

   </form>
 </div>

<script type="text/javascript">

      function check3 (id) {
        if($("#"+id).val()!=""){
          $("#"+id+"grp").removeClass('has-error');
        }else{
          $("#"+id+"grp").addClass('has-error');
        }
      }

      function check () {
        if($('#start').val()==""){
           $("#startgrp").addClass('has-error'); 
        }
        if($('#stop').val()==""){
           $("#stopgrp").addClass('has-error'); 
        }
        if($('#password').val()==""){
           $("#passwordgrp").addClass('has-error'); 
        }
        if($('#start').val()!="" && $('#stop').val()!="" && $('#password').val()!=""){
          $("#batchform").submit(); 
        }
      }
</script>

    <?php 
  require_once( '../footer.php' ); 
  ?>