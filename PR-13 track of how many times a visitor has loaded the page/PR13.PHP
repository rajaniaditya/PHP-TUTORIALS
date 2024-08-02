<?php
	session_start();
	if(isset($_COOKIE["Welcome"]))
	{
		$c=$_COOKIE["Welcome"];
		echo $c++."New Visitors:-Welcome ";
		setcookie("Welcome",$c,time()+(8500*30));
	}
	else
	{
		$c=0;
		setcookie("Welcome",$c,time()+(8500*30));
	}
?>
