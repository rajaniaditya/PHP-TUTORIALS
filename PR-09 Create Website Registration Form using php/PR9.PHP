<html>
<style>h1{text-align:center;} hr{border-color:black;} td{font-size:24px; padding:15px;} input{padding:12px; } select{padding:12px;}</style>
<body  style="background-color: grey;">
<form method = "post" action = "PR9_2.php"><hr color='black'>
<h1> Create New Account </h1>
	<table border = "5" cellspacing = "2" align = "center" style="background-color: white;">
		<tr>
			<td>User Name</td>
			<td><input type = "text" name = "txtUName"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type = "Password" name = "txtPWD"/></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>Male<input type = "radio" name = "optG" value ="Male"/>
				Female<input type = "radio" name = "optG" value ="Female"/></td>
		</tr>
		<tr>
			<td>Hobbies</td>
		<td>chess<input type = "checkbox" name = "chkD" value ="chess"/>
			writing<input type = "checkbox" name= "chkS" value = "writing"/>
			Cooking<input type = "checkbox" name ="chkC" value = "Cooking"/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><select name = "cmbCity">
				<option value = "Gujarat">Gujrat</option>
				<option value = "Mumbai">Mumbai</option>
				<option value = "Delhi">Delhi</option>
				<option value = "Chenai">Chenai</option>
				<option value = "Punjab">Punjab</option></td>
		</tr>
		<tr align="center">
			<td colspan = "2"> <input type = "submit"> </td>
		</tr>
	</table>
<br><hr color='black'>
</body>
</html>
