<?php
	session_start();
	require('../db/db.php');
	if(isset($_GET['email']))
	{
		$email= $_GET['email'];
		
			$con = dbConnection();
			$sql= "select id from admins where email='".$email."'";
			$data= mysqli_query($con,$sql);
			$admin = mysqli_fetch_assoc($data);
			$id = $admin['id'];
			mysqli_close($con);
			?>
			<html>
				<head>
					<title>Registration Completed!</title>
				</head>
					<body style="background-color:rgb(226,233,246);">
						<font style="font-family:'Segoe UI'">
							<center>
								<br><br>
								<h3>Registration Successful!</h3>
								<br><br>
								<h5>Your User Id is <?php echo $id ; ?></h5>
								<br><br>
								<h4>Click <a href="login.php">Here</a> to Login.</h4>
							</center>
						</font>
					</body>
				</html>
		<?php
		}
		else
		{
			//echo "unsuccessful";
			header("location: registration.php");
		}
		?>
