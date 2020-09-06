<html>
<head>
	<title>Login</title>
	<script type="text/javascript" src="login.js"></script>
</head>
	<table>
		<tr>
			<td colspan="2"> <p>Please Enter Your UserName and Password.</p></td>
		</tr>
		<tr>
			<td>
			<form action="logcheck.php" onsubmit="return getInfo()" method="post">
				<fieldset>
						<table>
							<tr><td colspan="2"><br></td></tr>
							<tr>
								<td>User Name</td>
								<td><input type="text" id="name" name="name" onkeyup="keyupName()" onblur="onblurName"></td>
							</tr>
							<tr><td colspan="2" id="eName"></td></tr>
							<tr>
								<td>Password</td>
								<td><input type="password" id="password" name="password" onkeyup="keyupPass()" onblur="onblurPass()"></td>
							</tr>
							<tr><td colspan="2" id="ePass" align="center"></td></tr>
							<tr><td colspan="2" align="left"><input type="checkbox" id="rememberme" name="rememberme" value='1'>Remember Me</td></tr>
							<tr><td colspan="2" id="e"></td></tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="submit" value="Login" style="width:200px"></td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
		</tr>
	</table>
	</body>
</html>