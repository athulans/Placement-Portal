<?php
session_start();
$uploadfail=-1;
if(!isset($_SESSION['UID']))
{
  header("location:placements.php");
}
if(isset($_POST["submit"]))
{
include_once "databaseconnection.php";
    $allowedExts = array("doc", "docx", "pdf", "odf");
    $temp = explode(".", $_FILES["resume"]["name"]);
    $extension = end($temp);
    if ((($_FILES["resume"]["type"] == "application/msword")
      || ($_FILES["resume"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
      || ($_FILES["resume"]["type"] == "application/pdf")
      || ($_FILES["resume"]["type"] == "application/odf"))
      && ($_FILES["resume"]["size"] < 5000000)
      && in_array($extension, $allowedExts))
        {
        if ($_FILES["resume"]["error"] > 0)
          {
  			$uploadmsg="File Error Upload Failed";
			$uploadfail=1;
          }
        else 
          {
            $fileName=$_SESSION["UID"].".".end($temp);
			if (file_exists("resume/" . $fileName))
            {
			unlink("resume/".$fileName);
            }
			$temp = explode(".",$_FILES["resume"]["name"]);
			$newfilename = $_SESSION["UID"].".".end($temp);
			if(move_uploaded_file($_FILES["resume"]["tmp_name"], "resume/" . $newfilename))
				{
				$sql = 'UPDATE student SET Resume="' . $newfilename . '"WHERE UID="' . $_SESSION["UID"] . '"';
				mysql_query($sql, $con);
				$uploadfail=0;
				$uploadmsg="Uploaded Successfully";
				}
			else
				{
				$uploadfail=1;
				$uploadmsg="Upload Failed";
				}
            
          }
        }
      else
        {
			$uploadmsg="Upload Failed! ";
			if($_FILES["resume"]["size"] > 5000000)
			{
				$uploadmsg=$uploadmsg."Max size 5MB";
			}
			$uploadfail=1;
        }


}

$route='login';
require_once( 'header.php' ); 
?>
<?php if(!isset($_POST['resume'])){ ?>
<div id="resume" class="col-md-offset-4 col-md-4">
  <h3>Upload Resume</h3>
  <?php if($uploadfail >=0) {
	  if($uploadfail==0){
		  $alerttype="alert-success";
	  }
	  else{
		  $alerttype="alert-danger";
	  }
  ?>
  <div class="alert <?php echo $alerttype; ?> alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo $uploadmsg; ?>
  </div>
  <?php } ?>
  <form action="" method="post"  enctype="multipart/form-data">
    <div class="form-group">
      <label >Select file: </label>
      <input name="resume" class="form-control" type="file" accept=".pdf,.doc,.docx,.odf">
    </div>
    <input type="submit" name="submit" class="btn btn-default" value="Upload"/>
  </form>
</div>
  <?php 
    }
    require_once( 'footer.php' ); 
    ?>
