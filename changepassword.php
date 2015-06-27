<?php session_start();  

$passwordchanged=0;
if(isset($_POST["oldpassword"]) && isset($_POST["newpassword"])){
//***************************************************************
$redirect = "location:placements.php";
if (!isset($_SESSION['UID'])) {
  header($redirect);
}
include_once 'database_credentials.php';
$con = mysql_connect("localhost", $db_username, $db_password);
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
// Create table
mysql_select_db($database, $con);
$id = $_SESSION["UID"];
$oldpassword = $_POST["oldpassword"];
$newpassword = $_POST["newpassword"];
$sql = "SELECT * from Users where UID='$id'";
$result=mysql_query($sql, $con);
$row = mysql_fetch_array($result);
if(!strcmp($row["Password"],$oldpassword))
{
  $sql = "UPDATE Users SET Password='$newpassword' WHERE UID=$id";
  mysql_query($sql, $con);
  $passwordchanged=1;
}
else
{
  $passwordchanged=2;
}
mysql_close($con);


//**************************************************************
}

$route='login';
require_once( 'header.php' ); 
?>

<div id="login" class="col-md-offset-4 col-md-4">
  <h3>Change Password</h3>
  <?php if($passwordchanged==1) {?>
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Password Changed Successfully
  </div>
  <?php } else if($passwordchanged==2) {?>
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Incorect Password
  </div>
  <?php } ?>

  <div id="notmatchalert" class="alert alert-warning collapse fade" role="alert">
    <button type="button" class="close" onclick="$('#notmatchalert').collapse('hide');" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Passwords Do not Match ! 
  </div>

  <form id="changeform" action="" method="post">

    <div id="oldpasswordgrp" <?php if($passwordchanged==2) echo 'class="has-error"'; ?>class="form-group">
      <label>Old Password:</label> 
        <input id="oldpassword" oninput="check3('oldpassword')" name="oldpassword" class="form-control" type="password">
     </div>
     <div id="newpasswordgrp" class="form-group">
      <label>New Password:</label> 
        <input id="newpassword" name="newpassword" class="form-control" type="password">
     </div>
     <div id="newpassword2grp" class="form-group">
      <label>Confirm Password:</label> 
        <input id="newpassword2" oninput="check2()" name="newpassword2" class="form-control" type="password">
     </div>
     <button type="button" onclick="check()" class="btn btn-default">Change Password</button>

   </form>

   <script type="text/javascript">

      function check3 (id) {
        if($("#"+id).val()!=""){
          $("#"+id+"grp").removeClass('has-error');
        }else{
          $("#"+id+"grp").addClass('has-error');
        }
      }

      function check2 () {
        if($("#newpassword").val()!=$("#newpassword2").val()){
          $("#newpasswordgrp").addClass('has-error');
          $("#newpassword2grp").addClass('has-error');
        }else{
          $("#newpasswordgrp").removeClass('has-error');
          $("#newpassword2grp").removeClass('has-error');
          $("#newpasswordgrp").addClass('has-success');
          $("#newpassword2grp").addClass('has-success');
        }
      }

      function check () {
        if($("#oldpassword").val()==""){
          $("#oldpasswordgrp").addClass('has-error');
          return;
        }
        if($("#newpassword").val()==""){
          $("#newpasswordgrp").addClass('has-error');
          return;
        }
        if($("#newpassword").val()==$("#newpassword2").val()){
          $("#changeform").submit();
        }else{
          //alert("dont match");
          $("#notmatchalert").collapse('show');
          $("#newpassword").val('');
          $("#newpasswordgrp").addClass('has-error');
          $("#newpassword2").val('');
          $("#newpassword2grp").addClass('has-error');
        }
      }
   </script>

 </div>

    <?php 
  require_once( 'footer.php' ); 
  ?>