<?php
//$session_start();
$a=$_POST['email'];
$b=$_POST['pass'];
function f($a,$b)
{
	$err=0;
$con=mysqli_connect("localhost", "root", "", "abc") or $err=1;
$str="insert into users values ('$a','$b','user')";
$r=mysqli_query($con,$str) or $err=1;
mysqli_close($con);
return $err;
}

if(f($a,$b)==0)
	include("success.php");
else
	include("errusrad.html");
?>