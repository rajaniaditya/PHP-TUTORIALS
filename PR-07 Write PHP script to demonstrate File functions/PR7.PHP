<!--Write PHP script to demonstrate File functions.-->
<?php
	$file=fopen("text.txt","a");
	echo fwrite($file, "NAME");
	$file=fopen("text.txt","N");
	fread($file,"10");
	fclose($file);
?>
