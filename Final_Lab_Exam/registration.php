<?php
	session_start();
?>
<html>
<head>
	<title>REGISTRATION</title>
	<script type="text/javascript" src="registration.js"></script>
</head>
	<body>
	<p style="text-align:right">
		<a href = "viewprofile.php"><?php echo $name ;?></a> |
		<a href="logout.php"> Logout</a>
	</p>
		<table>
			<tr><td>
					<a href="dashboard.php"> Dashboard </a></li> |
					<a href="registration.php"> Create Authors </a> |
					<a href="viewauthors.php"> View Authors </a>
				</td>
			</tr>
		</table>
		<table align="center">
				<tr>
					<td> <p>Please Enter Information To Register.</p></td>
				</tr>
				<tr>
					<td>
						<form name="registration_form" action="regcheck.php" onsubmit="return register()" method="post">
							<fieldset>
									<table>
										<tr>
											<td>Name</td>
											<td><input type="text" id="name" name="name" onkeyup="keyupName()"></td>
										</tr>
										<tr><td colspan="2" id="eName" align="center"></td></tr>
										<tr>
											<td>Contact Number</td>
											<td><input id="contact_number" name="contact_number" type="text" onkeyup="keyupContact()"></td>
										</tr>
										<tr><td colspan="2" id="eContact"></td></tr>
										<tr>
											<td>User Name</td>
											<td><input type="text" id="username" name="username" onkeyup="keyupUserName()"></td>
										</tr>
										<tr><td colspan="2" id="eUserName"></td></tr>
										<tr>
											<td>Password</td>
											<td><input id="password" name="password" type="password" onkeyup="keyupPass()"></td>	
										</tr>
										<tr><td colspan="2" id="ePass"></td></tr>
										<tr>
											<td>Confirm Password</td>
											<td><input id="confirmPassword" name="confirmPassword" type="password" onkeyup="keyupConPass()"></td>
										</tr>		
										<tr><td colspan="2" id="eConPass"></td></tr>
										<tr>
											<td colspan="2" align="right">
												<input type="submit" name="submit" value="Register">
												<input name ="reset" type="reset" value="Reset">
											</td>
										</tr>
									</table>
							</fieldset>
						</form>
					</td>
				</tr>
		</table>
	</body>
</html>
<?php
?>