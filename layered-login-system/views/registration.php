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
	<title>REGISTRATION</title>
</head>
	<body style="background-color:rgb(226,233,246);">
	<font style="font-family:'Segoe UI'">
	<br><br><br><br><br><br><br>
		<table>
			<tr><td>
					<ul>
						<li><a href="dashboard.php"> Dashboard </a></li>
						<li><a href="registration.php"> Create Admin </a></li>
						<li><a href="approvedoctors.php"> Approve Doctors </a></li>
						<li><a href="viewdoctors.php"> View Doctors </a> </li>
						<li><a href="viewpatients.php"> View Patients </a></li>
						<li><a href="populardoctors.php"> Popular Doctors </a></li>
						<li><a href="populardepartments.php"> Popular Departments </a></li>
						<li><a href="commission.php"> commission </a></li>
						<li><a href="complainbox.php"> Complain Box </a></li>
						
					</ul>
				</td>
			</tr>
		</table>
		<table align="center">
				<tr>
					<td> <p>Please Enter Information To Register.</p></td>
				</tr>
				<tr>
					<td>
						<form action="../php/regcheck.php" method="post">
							<fieldset>
									<table>
										<tr><td>Name</td>
											<td><input name="name" type="text"></td>
										</tr>
										<tr><td colspan="2"><hr></td></tr>
										<tr>
											<td>Email</td>
											<td><input name="email" type="email"><abbr title="hint:sample@example.com"> ?</abbr></td>
										</tr>
										<tr><td colspan="2"><hr></td></tr>										
										<tr>
											<td>Password</td>
											<td><input name="password" type="password"></td>	
										</tr>
										<tr><td colspan="2"><hr></td></tr>
										<tr>
											<td>Confirm Password</td>
											<td><input name="confirmPassword" type="password"></td>
										</tr>		
										<tr><td colspan="2"><hr></td></tr>
										<tr>
											<td>Gender</td>
											<td>
									
												<input name="gender" type="radio" value="1">Male
												<input name="gender" type="radio" value="2">Female
												<input name="gender" type="radio" value="3">Other
											</td>
											
										</tr>
										<tr><td colspan="2"><hr/></td></tr>
										<tr>
											<td>Date of Birth</td>
											<td>
												<input name="dob" type="date">
											</td>
										</tr>		
										<tr><td colspan="2"><hr></td></tr>
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
	</font>
	</body>
</html>