<html>
<head>
	<title>Logged in Dashboard</title>
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
				<td width="300px"><h4>Welcome <?php 
						echo $_SESSION['username'];
						?></h4></td>
			</tr>
			<tr><td colspan="2" width="500px" align="center">Copyright 2017</td></tr>
		</table>
	</body>
</html>