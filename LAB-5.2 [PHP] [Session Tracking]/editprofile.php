<html>
<head>
	<title>EDIT PROFILE</title>
</head>
	<body>
		<table border="1">
			<tr>
				<td colspan="2" width="600px" align="right">Logged in as 
					<a href = "dashboard.php">
						<?php 
						session_start();
						echo $_SESSION['username'];
						?>
					</a> | <a href="logout.php"> Logout</a>
				</td>
			</tr>
			<tr><td width="200px">
					<ul>
						<li><a href="dashboard.php"> Dashboard </a></li>
						<li><a href="viewprofile.php"> View Profile </a></li>
						<li><a href="editprofile.php"> Edit Profile </a> </li>
						<li><a href="changeprofile.php"> Change Profile Picture </a></li>
						<li><a href="change_password.php"> Change Password </a></li>
						<li><a href="logout.php"> Logout </a> </li>
					</ul>
				</td>
				<td width="400px">
					<fieldset>
						<legend><b>EDIT PROFILE</b></legend><br/>
							<table width="100%">
								<tr><td>Name</td> <td>:</td> <td><input name="name" type="text"></td> <td></td> </tr>		
								<tr><td colspan="4"><hr/></td></tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td><input name="email" type="email"><abbr title="hint: sample@example.com"><b> i </b></abbr></td>
									<td></td>
								</tr>	
								<tr><td colspan="4"><hr/></td></tr>
								<tr><td>Gender</td> <td>:</td> <td>
																	<input name="gender" type="radio" value="male">Male
																	<input name="gender" type="radio" value="female">Female
																	<input name="gender" type="radio" value="other">Other
																</td> <td></td>
								</tr>
								<tr><td>Date of Birth</td> <td>:</td> <td>
																	<input name="day" type="number" size="2" min="1" max="31"/>/
																	<input name="month"	type="number" size="2" min="1" max="12"/>/
																	<input name="year" type="number" size="4" min="1900" max="2010"/><br>
																	<font size="2"><i>(dd/mm/yyyy)</i></font>
																</td> <td></td>
								</tr>
								<tr><td colspan="4"><hr/></td></tr>

							</table>
							<input type="submit" name="submit" value="Submit">
					</fieldset>
				</td>
			</tr>
			<tr><td colspan="2" width="600px" align="center">Copyright 2017</td></tr>
		</table>
	</body>
</html>