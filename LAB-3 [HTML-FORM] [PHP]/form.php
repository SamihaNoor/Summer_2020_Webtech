<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<form action="backend.php" method="post">
			<table border='1'>
				<tr><td colspan='3' align="center"><h2>PERSON PROFILE</h2></td></tr>
				<tr>
					<td width="30%">Name</td>
					<td><input type="text" name="name"></td>
					<td width="10%"></td>
				</tr>
				<tr>
					<td width="30%">Email</td>
					<td><input type="email" name="email"></td>
					<td width="10%"></td>
				</tr>
				<tr>
					<td width="30%">Gender</td>
					<td><input type="radio" name="gender" value="male" placeholder="">Male
						<input type="radio" name="gender" value="female" placeholder="">Female
						<input type="radio" name="gender" value="others" placeholder="">Others</td>
					<td width="10%"></td>
				</tr>
				<tr>
					<td width="30%">Date of Birth</td>
					<td><input type="number" name="dd" size="4" min="1" max="31"> /
						<input type="number" name="mm" size="4" min="1" max="12">/
						<input type="number" name="yyyy" size="4" min="1900" max="2016"></td>
					<td width="10%"></td>
				</tr>
				<tr>
					<td width="30%">Blood Group</td>
					<td>
						<select name="bg">
						<option value="A+">A+</option>
						<option value="AB+">AB+</option>
						<option value="B+">B+</option>
						<option value="O+">O+</option>
						<option value="A-">A-</option>
						<option value="AB-">AB-</option>
						<option value="B-">B-</option>
						<option value="O-">O-</option>
					</select>
					</td>
					<td width="10%"></td>
				</tr>
				<tr>
					<td width="30%">Degree</td>
					<td><input type="checkbox" name="degree[]" value='SSC'>SSC
						<input type="checkbox" name="degree[]" value='HSC'>HSC
						<input type="checkbox" name="degree[]" value='BSc.'>BSc.
						<input type="checkbox" name="degree[]" value='MSc.'>MSc.
					<td width="10%"></td>
				</tr>
				<tr>
					<td width="30%">Photo</td>
					<td colspan="2"><input type="file" name ="photo"></td>
				</tr>
				<tr><td colspan="3"><br></td></tr>
				<tr>
					<td colspan="3" align="right">
						<input type="submit" name="submit" value="Submit"> 
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>