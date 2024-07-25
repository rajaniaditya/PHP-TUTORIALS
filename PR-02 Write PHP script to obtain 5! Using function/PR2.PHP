<!--Write PHP script to obtain 5! Using function.-->

<?php
	$num=5;
	$factorial=1;
	for($i=5;$i>=1;$i--)
	{
		$factorial=$factorial*$i;
	}
	echo "Factorial number is:-$factorial"."<br>";
?>
