<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form action="backend.php" method="post">
	Name<br><input type="text" name="name"> <br>
	Email<br><input type="email" name="email"> 
	<label title="hint:sample@example.com"> i</label><br>
			
		<fieldset>
			<legend>Gender</legend>
				<input type="radio" name="gender" value="male" placeholder="">Male
				<input type="radio" name="gender" value="female" placeholder="">Female
				<input type="radio" name="gender" value="others" placeholder="">Others<br>
				
		</fieldset>
		
		<fieldset>
			<legend>Date of Birth</legend>
				<input type="number" name="dd" size="4" min="1" max="31"> /
				<input type="number" name="mm" size="4" min="1" max="12">/
				<input type="number" name="yyyy" size="4" min="1900" max="2016"><br>
		</fieldset>
		<fieldset>
			<legend>Degree</legend>
				<input type="checkbox" name="degree[]" value='SSC'>SSC
				<input type="checkbox" name="degree[]" value='HSC'>HSC
				<input type="checkbox" name="degree[]" value='BSc.'>BSc.<br>
				
		</fieldset>
		<fieldset>
			<legend>Blood Group</legend>
				<select name="bg">
						<option value="A+">A+</option>
						<option value="AB+">AB+</option>
						<option value="B+">B+</option>
						<option value="O+">O+</option>
						<option value="A-">A-</option>
						<option value="AB-">AB-</option>
						<option value="B-">B-</option>
						<option value="O-">O-</option>
					</select><br>
		</fieldset>
		<fieldset>
			<legend>Profile Picture</legend>
				User Id <input type="number" name="id"><br>
				Photo <input type="file" name ="photo"><br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>