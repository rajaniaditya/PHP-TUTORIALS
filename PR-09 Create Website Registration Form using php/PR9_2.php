<?php
$uname = $_REQUEST["txtUName"];
$gender = $_REQUEST["optG"];
$pwd = $_REQUEST["txtPWD"];
$hobby1 = "";
$hobby2 = "";
$hobby3 = "";
		if(isset($_POST["chkD"]))
		{
			$hobby1 = "Chess";
		}
		if(isset($_POST["chkS"]))
		{
			$hobby2 = "Writing";
		}
		if(isset($_POST["chkC"]))
		{
			$hobby3 = " Cooking";
		}
		$city = $_REQUEST["cmbCity"];
echo "<h4>User Name =$uname <br> Password =$pwd <br> Gender =$gender <br>Hobbies =$hobby1 $hobby2 $hobby3 <br>City =$city</h4>";
?>
