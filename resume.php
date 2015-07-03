<?php
session_start();
if(!isset($_SESSION['UID']))
{
  header("location:placements.php");
}
include_once "databaseconnection.php";
$sql = 'SELECT * FROM student where UID="' . $_SESSION["UID"] . '"';
$res = mysql_query($sql, $con);
$row = mysql_fetch_array($res);
}
$route='login';
require_once( 'header.php' ); 
?>
<?php if(!isset($_POST['resume'])){ ?>
<div id="resume" class="col-md-offset-4 col-md-4">
  <h3>Upload Resume</h3>
  <?php if($uploadfail == 1) { ?>
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Failed to upload resume. Please try again!
  </div>
  <?php } ?>
  <form action="" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label >Select file: </label>
      <input name="resume" class="form-control" type="file" accept=".pdf .doc .docx .odf">
    </div>
    <button type="submit" class="btn btn-default">Upload</button>
  </form>
</div>
<?php } ?>
