<?php session_start(); 

if(!isset($_SESSION['UID']))
{
  $pwdfail = 0;
  if(isset($_POST['user_name']))
  {
    include_once "database_credentials.php";
    $con = mysql_connect("localhost", $db_username, $db_password);
    if (!$con)
    {
     die('Could not connect: ' . mysql_error());
   }
		// Create table
   mysql_select_db($database, $con);
   $username=htmlspecialchars($_POST['user_name']);
   $password=htmlspecialchars($_POST['password']);
   $sql = "SELECT * FROM Users WHERE User_Name='$username'";
		// Execute query
   $result=mysql_query($sql,$con);
   if($row = mysql_fetch_array($result))
   {
     if (!strcmp($password, $row["Password"])) 
     {
      $_SESSION["UID"] = $row["UID"];
      $_SESSION["Admin"] = $row["Admin"];
      $pwdfail = 0;
      if($row["Admin"]==1)
      {	
        $_SESSION['fname']='Admin';
					//header("location:administrator/home.php");
        header("location:administrator/users.php");
      }else{
        include_once "databaseconnection.php";
        $sql = 'SELECT * FROM student where UID="' . $_SESSION["UID"] . '"';
        $res = mysql_query($sql, $con);
        $row = mysql_fetch_array($res);
        $_SESSION['fname']=$row["First_Name"];
        
      }					
    }
    else 
    {
				//echo "Incorrect User Name or Password";
      $pwdfail = 1;
    }
  }else{ $pwdfail = 1; }
}		
}
else{
	include_once "databaseconnection.php";
	$sql = 'SELECT * FROM student where UID="' . $_SESSION["UID"] . '"';
	$res = mysql_query($sql, $con);
	$row = mysql_fetch_array($res);
  $_SESSION['fname']=$row["First_Name"];
}
?>
<?php 
$route='login';
require_once( 'header.php' ); 
?>

<!-- <div class="navbar navbar-default">
  <div class="container-fluid">
  <p class="navbar-text">Signed in as Mark Otto</p>
  <p class="navbar-text"><button type="button" class="btn btn-default">Default</button></p>
  </div>
</div> -->

<?php if(!isset($_SESSION['UID'])){ ?>
<div id="login" class="col-md-offset-4 col-md-4">
  <h3>Sign In</h3>
  <?php if($pwdfail == 1) { ?>
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Incorrect Username or Password!
  </div>
  <?php } ?>
  <form action="" method="post">
    <div class="form-group">
      <label >User Name: </label>
      <input name="user_name" class="form-control" type="text">
    </div>
    <div class="form-group">
      <label>Password:</label> 
      <input name="password" class="form-control" type="password">
    </div>
    <button type="submit" class="btn btn-default">Sign In</button>

  </form>
</div>

<?php }else{
  if($_SESSION["Admin"]==1)
  { 
          //header("location:administrator/home.php");
    header("location:administrator/users.php");
  }
  ?>
  <div id="studentdetails" class="col-md-offset-1 col-md-10 text-justify">

    <h3>Student Details <a role="button" class="btn btn-primary pull-right" href="editdetails.php">Edit Details</a></h3>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Personal Details:</h3>
      </div>
      <div class="panel-body">
        <table class="table  "> <!-- table-striped -->
          <tbody>                  
            <tr>
              <th >Name: </th>
              <td ><?php echo $row["First_Name"].' '.$row["Last_Name"];?></td>
            </tr>
            <tr>
              <th  >SrNo: </th>
              <td  ><?php echo $row["SrNo"];?></td>
            </tr>
            <tr>
              <th  >Batch: </th>
              <td  ><?php echo $row["Batch"];?></td>
            </tr>
            <tr>
              <th  >Branch: </th>
              <td  ><?php echo $row["Branch"];?></td>
            </tr>
            <tr>
              <th  >Address: </th>
              <td  ><?php echo $row["Address"];?></td>
            </tr>
            <tr>
              <th  >Email: </th>
              <td  ><?php echo $row["Email"];?></td>
            </tr>				
            <tr>
              <th  >Phone Number: </th>
              <td  ><?php echo $row["Phone_Number"];?></td>
            </tr>
            <tr>
              <th  >Mobile Number: </th>
              <td  ><?php echo $row["Mobile_Number"];?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Academic Details: </h3>
      </div>
      <div class="panel-body">

        <table class="table table-bordered ">
          <tbody>                  
            <tr>
              <th  >10th Mark: </th>
              <td  ><?php echo $row["Mark_10"];?></td>
              <th  >+2 Mark: </th>
              <td  ><?php echo $row["Mark_12"];?></td>
            </tr>
            <tbody>
            </table>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">SGPA: </h3>
              </div>
              <div class="panel-body">
                <table class="table table-bordered ">
                  <tbody>
                    <tr>
                      <th  >1&2 Semester: </th>
                      <td  ><?php echo $row["SGPA_1"];?></td>
                      <th  >3rd Semester: </th>
                      <td  ><?php echo $row["SGPA_3"];?></td>
                    </tr>
                    <tr>
                      <th  >4th Semester: </th>
                      <td  ><?php echo $row["SGPA_4"];?></td>
                      <th  >5th Semester: </th>
                      <td  ><?php echo $row["SGPA_5"];?></td>
                    </tr>
                    <tr>
                      <th  >6th Semester: </th>
                      <td  ><?php echo $row["SGPA_6"];?></td>
                      <th  >7th Semester: </th>
                      <td  ><?php echo $row["SGPA_7"];?></td>
                    </tr>
                    <tr>
                      <th  >8th Semester: </th>
                      <td  ><?php echo $row["SGPA_8"];?></td>
                      <th  >CGPA:</th>
                      <td  ><?php echo $row["CGPA"];?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <table class="table">
              <tbody>
                <tr>
                  <th  >No. of Standing Backpapers:</th>
                  <td  ><?php echo $row["Supply"];?></td>
                </tr>
                <tr>
                  <th  >Placed: </th>
                  <td  ><?php echo $row["Placed"]==1 ? "Yes":"No";?></td>
                </tr>
                <tr>
                  <th  >Planning Higher Studies: </th>
                  <td  ><?php echo $row["Higher_Studies"]==1 ? "Yes":"No";?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


      <?php 
    }
    require_once( 'footer.php' ); 
    ?>