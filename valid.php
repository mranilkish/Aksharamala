<?php
$a=$_POST['email'];
$b=$_POST['pass'];

if($a=="admin@gmail.com"&& $b=="tpce1234")
	 include ("script.html");
 else echo "error";

?>