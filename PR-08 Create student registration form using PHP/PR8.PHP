<html>
<body>
<table border="1" align="center" style="width: 250px; margin-top: 100px">
<th>Registration Form</th>
<form name="form1" method="POST" action="PR8_2.php">
	<tr align="center">
		<td>
			Enter your name:- <br>
			<input type="Text" name="Name"></td>
	</tr>
	<tr align="center">
		<td>
			Enter your city:-<br>
			<textarea type="Text" name="City"></textarea></td>
	</tr>
	<tr align="center">
		<td>Enter your Address:-<br>
			<textarea name="Address" rows="6" cols="20"></textarea></td>
	</tr>
	<tr align="center">
		<td>Select language:<br>
			<input type="checkbox" name="Lang[]" value="English">English</input><br>
			<input type="checkbox" name="Lang[]" value="Maths">Maths</input><br>
			<input type="checkbox" name="Lang[]" value="Science">Science</input></td>
	</tr>
	<tr align="center">
		<td>Select Gender:<br>
			<input type="radio" name="Gender" value="Male">Male</input><br>
			<input type="radio" name="Gender" value="Female">Female</input></td>
	</tr>
	<tr align="center">
		<td><input type="submit" name="Confrom" type="name"></td>
	</tr>
</form>
</body>
</html>
