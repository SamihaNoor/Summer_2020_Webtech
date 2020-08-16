<?php
	session_start();
	if((isset($_SESSION['status'])) || (isset($_COOKIE['status'])))
	{
		$con = mysqli_connect('localhost','root','','projectmid');
		$sql= "select name from admins where email='".$_SESSION['user']['email']."'";
		$data= mysqli_query($con,$sql);
		$admin = mysqli_fetch_assoc($data);
		$name = $admin['name'];
		mysqli_close($con);
?>
<html>
<head>
	<title>Dashboard</title>
</head>
	<body style="background-color:rgb(226,233,246);">
	<font style="font-family:'Segoe UI'">
		<p style="text-align:right">
			<a href = "viewprofile.php"><?php echo $name ;?></a> |
			<a href="../php/logout.php"> Logout</a>
		</p>
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
		</font>
	</body>
</html>

<?php
	}
	else
	{
		header('location: login.html');
	}
?>