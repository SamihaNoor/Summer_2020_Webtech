<html>
<head>
	<title>View Profile</title>
</head>
	<body>
		<table border="1">
			<tr>
				<td colspan="2" width="500px" align="right">Logged in as 
					<a href = "dashboard.php">
						<?php 
						session_start();
						echo $_SESSION['username'];
						?>
					</a> | <a href="logout.php"> Logout</a>
				</td>
			</tr>
			<tr>
				<td width="200px">
					<ul>
						<li><a href="dashboard.php"> Dashboard </a></li>
						<li><a href="viewprofile.php"> View Profile </a></li>
						<li><a href="editprofile.php"> Edit Profile </a> </li>
						<li><a href="changeprofile.php"> Change Profile Picture </a></li>
						<li><a href="change_password.php"> Change Password </a></li>
						<li><a href="logout.php"> Logout </a> </li>
					</ul>
				</td>
				<td width="300px">
					<fieldset>
						<legend><b>PROFILE</b></legend>
							<br>
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Name</td>
									<td>:</td>
									<td>Bob</td>
									<td rowspan="7" align="center">
										<img width="128" src="../image/user.png"/>
										<br/>
										<a href="../write/picture.html">Change</a>
									</td>
								</tr>		
								<tr><td colspan="3"><hr/></td></tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>bob@aiub.edu</td>
								</tr>		
								<tr><td colspan="3"><hr/></td></tr>			
								<tr>
									<td>Gender</td>
									<td>:</td>
									<td>Male</td>
								</tr>
								<tr><td colspan="3"><hr/></td></tr>
								<tr>
									<td>Date of Birth</td>
									<td>:</td>
									<td>19/09/1998</td>
								</tr>
							</table>	
							<hr/>
							<a href="../write/edit_profile.html">Edit Profile</a>	
					</fieldset>
				</td>
			</tr>
			<tr><td colspan="2" width="500px" align="center">Copyright 2017</td></tr>
		</table>
	</body>
</html>
