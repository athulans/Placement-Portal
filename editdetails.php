<?php
session_start();
if(!isset($_SESSION['UID']))
{
  header("location:placements.php");
}	
else{
	include_once "databaseconnection.php";
	$sql = 'SELECT * FROM student where UID="' . $_SESSION["UID"] . '"';
	$res = mysql_query($sql, $con);
	$row = mysql_fetch_array($res);
}

if($_SESSION["Admin"]==1)
{ 
  //header("location:administrator/home.php");
  header("location:administrator/users.php");
}

$route='login';
require_once( 'header.php' ); 
?>

<div id="studentdetails" class="col-md-offset-1 col-md-10"
<?php echo 'style="padding:20px;';  if(!isset($_SESSION['UID'])){echo "visibility:hidden;height:0px;padding:0px;";} echo '"';?> >
  <h3>Student Details</h3>
  <form action="applychanges.php" method="post" class="form-horizontal">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Personal Details: </h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
         <label for="firstname" class="col-md-3 control-label">First Name:</label> 
         <div class="col-md-9">
          <input name="firstname" id="firstname" class="form-control" type="text" maxlength="45" <?php echo 'value="'.$row["First_Name"].'"'?>>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Last Name:</label> 
        <div class="col-md-9">
         <input name="lastname" class="form-control" type="text" maxlength="45" <?php echo 'value="'.$row["Last_Name"].'"'?>>
       </div>
     </div>



     <div class="form-group">
      <label class="col-md-3 control-label">Sr No:</label> 
      <div class="col-md-9">
        <input name="srno" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["SrNo"].'"'?>>
      </div>
    </div>


    <div class="form-group">      
      <label class="col-md-3 control-label">Batch: </label>
      <div class="col-md-9">
        <input name="batch" class="form-control" type="text" maxlength="4" placeholder="eg: 2011" <?php echo 'value="'.$row["Batch"].'"'?>>
      </div>
    </div>   

    <div class="form-group">
      <label class="col-md-3 control-label">Branch: </label>
      <div class="col-md-9">
       <input name="branch" class="form-control" type="text" maxlength="4" <?php echo 'value="'.$row["Branch"].'"'?>>
     </div>
   </div>

   <div class="form-group">
     <label class="col-md-3 control-label">Address: </label>
     <div class="col-md-9">
      <textarea name="address" class="form-control" rows="5" cols="17"  ><?php echo $row["Address"];?>
      </textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-3 control-label">Email:</label>
    <div class="col-md-9"> 
      <input name="email" class="form-control" type="email" maxlength="45" <?php echo 'value="'.$row["Email"].'"'?>>
    </div>
  </div>				

  <div class="form-group">
    <label class="col-md-3 control-label">Phone Number (with area code):</label> 
    <div class="col-md-9"> 
      <input name="phoneno" class="form-control" type="text" maxlength="15" <?php echo 'value="'.$row["Phone_Number"].'"'?>>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-3 control-label">Mobile Number: </label>
    <div class="col-md-9"> 
      <input name="mobileno" class="form-control" type="text" maxlength="15" <?php echo 'value="'.$row["Mobile_Number"].'"'?>>
    </div>
  </div>
</div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Academic Details:</h3>
  </div>
  <div class="panel-body">



    <div class="form-group">
      <label class="col-md-3 control-label">10th Mark: </label>
      <div class="col-md-9"> 
        <input name="marks10" class="form-control" type="text" maxlength="5" <?php echo 'value="'.$row["Mark_10"].'"'?>>
      </div>
    </div>


    <div class="form-group">
      <label class="col-md-3 control-label">+2 Mark: </label>
      <div class="col-md-9"> 
        <input name="marks12" class="form-control" type="text" maxlength="5" <?php echo 'value="'.$row["Mark_12"].'"'?>>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">SGPA:</h3> 
      </div>
      <div class="panel-body">

        <div class="form-group">
          <label class="col-md-3 control-label">1&2 Semester:</label>
          <div class="col-md-3"> 
            <input name="sgpa1" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["SGPA_1"].'"'?>>
          </div>
          <label class="col-md-3 control-label">3rd Semester: </label>
          <div class="col-md-3"> 
            <input name="sgpa3" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["SGPA_3"].'"'?>>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">4th Semester:</label> 
          <div class="col-md-3"> 
            <input name="sgpa4" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["SGPA_4"].'"'?>>
          </div>
          <label class="col-md-3 control-label">5th Semester:</label> 
          <div class="col-md-3">
            <input name="sgpa5" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["SGPA_5"].'"'?>>
          </div>
        </div>
        <div class="form-group"> 
          <label class="col-md-3 control-label">6th Semester: </label>
          <div class="col-md-3"> 
            <input name="sgpa6" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["SGPA_6"].'"'?>>
          </div>
          <label class="col-md-3 control-label">7th Semester: </label>
          <div class="col-md-3">
            <input name="sgpa7" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["SGPA_7"].'"'?>>
          </div>
        </div>
        <div class="form-group"> 

          <label class="col-md-3 control-label">8th Semester:</label> 
          <div class="col-md-3"> 
            <input name="sgpa8" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["SGPA_8"].'"'?>>
          </div>
          <label class="col-md-3 control-label">CGPA:</label>
          <div class="col-md-3"> 
            <input name="cgpa" class="form-control" type="text" maxlength="6" <?php echo 'value="'.$row["CGPA"].'"'?> readonly>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label">No. of Standing Backpapers:</label>
      <div class="col-md-9">  
        <input name="supply" class="form-control" type="text" maxlength="3" <?php echo 'value="'.$row["Supply"].'"'?>>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label">Whether Placed:</label> 
      <div class="col-md-9">
        <label class="radio-inline"> 
          <input type="radio" name="placed" value="1"<?php if ($row["Placed"] == 1) echo "checked";?>>
          Yes
        </label>
        <label class="radio-inline"> 
         <input type="radio" name="placed" value="0"<?php if ($row["Placed"] == 0) echo "checked";?>>
         No
       </label> 
     </div>
   </div>


   <div class="form-group">
    <label class="col-md-3 control-label">Planning Higher Studies:</label> 
    <div class="col-md-9"> 
      <label class="radio-inline">
        <input type="radio" name="higherstudies" value="1" <?php if ($row["Higher_Studies"] == 1) echo "checked";?>>
        Yes
      </label>
      <label class="radio-inline">
        <input type="radio"  name="higherstudies" value="0"<?php if ($row["Higher_Studies"] == 0) echo "checked";?>>
        No
      </label>
    </div>
  </div>
</div>
</div>

<div class="form-group">
  <div class="col-sm-offset-3 col-md-9">
    <button type="submit" class="btn btn-primary">Apply Changes</button>
  </div>
</div>



</form>
</div>


<?php 
require_once( 'footer.php' ); 
?>