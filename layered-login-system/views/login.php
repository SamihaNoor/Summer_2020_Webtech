<?php
	if(isset($_GET['error']))
	{
		if(($_GET['error'])=='null_value')
		{
			echo "Try again";
		}
	}
?>

<html>
<head>
	<title>Login</title>
</head>
	<body style="background-color:rgb(226,233,246);">
	<font style="font-family:'Segoe UI'">
		<br><br><br><br><br><br><br>
	<table align="center">
		<tr>
			<td colspan="2"> <p>Please Enter Your UserId and Password.</p></td>
		</tr>
		<tr>
			<td>
				<form action="../php/logcheck.php" method="post">
					<fieldset>
						<table>
							<tr><td colspan="2"><br></td></tr>
							<tr>
								<td>User Id</td>
								<td><input type="text" name="id"></td>
							</tr>
							<tr><td colspan="2"><br></td></tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr><td colspan="2"><br></td></tr>
							<tr><td colspan="2" align="left"><input type="checkbox" name="rememberme" value='1'>Remember Me</td></tr>
							<tr><td colspan="2"><br></td></tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="submit" value="Login" style="width:200px"></td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
	</font>
	</body>
</html>