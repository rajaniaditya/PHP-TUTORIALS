<!--Write PHP script to demonstrate Array functions.-->
<?php
	echo"<h3>Array Function</h3>";
	$pepole=array("NAME1","NAME2","NAME3","NAME4","NAME5","NAME6");
	$result=count($pepole);
	echo"Count Pepole:- $result"."<br>";
	
?>
<br>
<?php
	$my_array=array("India","Indonesia","China","Brazil","Ukraine","Russia");
	list($a,$b,$c,$d,$e,$f)=$my_array;
	echo "List of countries:- $a, $b, $c, $d, $e, $f";
?>
<br><br>
<?php
	$people=array("NAME1","NAME2","NAME3","NAME4","NAME5","NAME6");
	echo current ($people)."<br>";
?>
