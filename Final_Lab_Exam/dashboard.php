<?php
	session_start();
	/*if((isset($_SESSION['status'])) || (isset($_COOKIE['status'])))
	{
		$con = mysqli_connect('localhost','root','','projectmid');
		$sql= "select name from admins where email='".$_SESSION['user']['email']."'";
		$data= mysqli_query($con,$sql);
		$admin = mysqli_fetch_assoc($data);
		$name = $admin['name'];
		mysqli_close($con);*/
?>
<html>
<head>
	<title>Dashboard</title>
</head>
	<body>
		<p style="text-align:right">
			<!--<a href = "viewprofile.php"><?php //echo $name ;?></a> |-->
			<a href="logout.php"> Logout</a>
		</p>
		<table>
			<tr><td>
					<a href="dashboard.php"> Dashboard </a></li> |
					<a href="registration.php"> Create Authors </a> |
					<a href="viewdoctors.php"> View Doctors </a> |
				</td>
			</tr>
		</table>
	</body>
</html>

<?php
	}
	else
	{
		header('location: login.php');
	}
?>