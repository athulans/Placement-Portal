<?php
session_start();
$redirect = "location:login.php";
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
$FirstName = $_POST["firstname"];
$LastName = $_POST["lastname"];
$Phone = $_POST["phoneno"];
$Mobile = $_POST["mobileno"];
$SrNo = $_POST["srno"];
$Email = $_POST["email"];
$Address = $_POST["address"];
//$DOB=$_POST["DOB"];
$Branch = $_POST["branch"];
$marks10 = $_POST["marks10"];
$marks12 = $_POST["marks12"];
$Batch = $_POST["batch"];
$sgpa1 = isnull($_POST["sgpa1"])?0:$_POST["sgpa1"]*1;
$sgpa3 = isnull($_POST["sgpa3"])?0:$_POST["sgpa3"]*1;
$sgpa4 = isnull($_POST["sgpa4"])?0:$_POST["sgpa4"]*1;
$sgpa5 = isnull($_POST["sgpa5"])?0:$_POST["sgpa5"]*1;
$sgpa6 = isnull($_POST["sgpa6"])?0:$_POST["sgpa6"]*1;
$sgpa7 = isnull($_POST["sgpa7"])?0:$_POST["sgpa7"]*1;
$sgpa8 = isnull($_POST["sgpa8"])?0:$_POST["sgpa8"]*1;
$Supply = $_POST["supply"];
$Placed = $_POST["placed"];
$Higher = $_POST["higherstudies"];
$m1 = $sgpa1 > 0 ? 1 : 0;
$m3 = $sgpa3 > 0 ? 1 : 0;
$m4 = $sgpa4 > 0 ? 1 : 0;
$m5 = $sgpa5 > 0 ? 1 : 0;
$m6 = $sgpa6 > 0 ? 1 : 0;
$m7 = $sgpa7 > 0 ? 1 : 0;
$m8 = $sgpa8 > 0 ? 1 : 0;
$cgpa = ((38 * $sgpa1 * $m1) + (28 * $sgpa3 * $m3) + (28 * $sgpa4 * $m4) + (28 * $sgpa5 * $m5) + (28 * $sgpa6 * $m6) + (28 * $sgpa7 * $m7) + (28 * $sgpa8 * $m8)) / ((38 * $m1) + (28 * $m3) + (28 * $m4) + (28 * $m5) + (28 * $m6) + (28 * $m7) + (28 * $m8));
$sql = "UPDATE student SET First_Name='$FirstName', Last_Name='$LastName',Phone_Number='$Phone',Email='$Email',Address='$Address',Batch='$Batch',Branch='$Branch',Phone_Number='$Phone',Mobile_Number='$Mobile',Mark_10='$marks10',Mark_12='$marks12',SGPA_1='$sgpa1',SGPA_3='$sgpa3',SGPA_4='$sgpa4',SGPA_5='$sgpa5',SGPA_6='$sgpa6',SGPA_7='$sgpa7',SGPA_8='$sgpa8',CGPA='$cgpa',Supply='$Supply',Placed='$Placed',Higher_Studies='$Higher',SrNo='$SrNo' WHERE UID=$id";
mysql_query($sql, $con);
mysql_close($con);
header("location:placements.php");
?>
