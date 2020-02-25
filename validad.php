<?php
$a=$_POST['email'];
$b=$_POST['pass'];
function f($a,$b)
{

$con=mysqli_connect("localhost", "root", "", "abc");

$r=mysqli_query($con,"select * from users;");



while ($rr=mysqli_fetch_row($r)) { 



if($a==$rr[0]&&$rr[1]==$b&&$rr[2]=="admin")
	return 1;


}
mysqli_close($con);
return 0;
}

if(f($a,$b)==1)
	include("useradd.php");
else
	include("errad.html");
?>