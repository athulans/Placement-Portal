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
$uid=$_POST["uid"];
$uname=$_POST["username"];
$password=$_POST["password"];
$type=$_POST["flag"];
mysql_select_db("placement_sahrdaya", $con);
if($type==0)
{
	$sql = "insert into users(User_Name,Password,Admin) values('$uname','$password','0')";
	mysql_query($sql, $con);
	$result =mysql_query("select * from users order by UID desc",$con);
	$row=mysql_fetch_array($result);
	$sql = "insert into student (UID) values('$row[0]')";
}
else
$sql = "update users set User_Name='$uname',Password='$password' where UID='$uid'";
mysql_query($sql, $con);
mysql_close($con);
header("location:users.php");
?>