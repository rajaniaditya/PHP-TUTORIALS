<!--Write PHP script to demonstrate Variable function.-->
<?php
	echo"<h3>Settype Function</h3>";
	$a="1234";
	$b=true;
	settype($a,"integer");
	settype($b,"string");
	echo "print a value:- $a,$b <br><br>";
	
	echo"<h3>Unset Function </h3>";
	function destroy_f()
	{
		global $f;
		unset($f);
	}
	$f = 'NAME';
	destroy_f();
	echo "print a value:-$f";
?>
