<!--Write PHP script to demonstrate Date functions.  -->

<?php
	echo"<h3>GETDATE:-</h3>";
	print_r(getdate());
	
	echo"<h3>SETDATE:-</h3>";
	$date=date_create();
	date_date_set($date,2001,10,20);
	echo date_format($date,'Y-m-d');
	
	echo"<h3>TIME</h3>";
	$t=time();
	echo ($t)."<br>";
	echo(date("D F d Y",$t));
?>
