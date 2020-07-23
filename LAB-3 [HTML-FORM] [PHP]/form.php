<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form action="backend.php" method="post">
	Name<br><input type="text" name="name"> <br>
	Email<br><input type="email" name="email"> 
	<label title="hint:sample@example.com">i</label><br>
			
		<fieldset>
			<legend>Gender</legend>
				<input type="radio" name="gender" value="male" placeholder="">Male
				<input type="radio" name="gender" value="female" placeholder="">Female
				<input type="radio" name="gender" value="others" placeholder="">Others<br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>		
	</form>

</body>
</html>