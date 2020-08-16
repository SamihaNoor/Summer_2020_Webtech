<?php

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$conPass = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$id;
		if(empty($name) || empty($password) || empty($email) || empty($conPass) || empty($gender) || empty($dob))
		{
			//echo "null submission";
			header("location: ../views/registration.php?error=null_value");
		}
		else
		{
			$con = mysqli_connect('localhost','root','','projectmid');
			$sql = "INSERT INTO admins (name, email, gender, dob) VALUES ('".$name."','".$email."','".$gender."','".$dob."')";
			$res = mysqli_query($con, $sql);
			if($res)
			{
				$sql= "select * from admins where email='".$email."'";
				$data= mysqli_query($con,$sql);
				$admin = mysqli_fetch_assoc($data);
				$id = $admin['id'];
				$type = 1;
				$status = 1;
				$q = "insert into credentials (userId, password, type, status) values ('".$id."','".$password."','".$type."','".$status."')";
				$result = mysqli_query($con, $q);
				
				if($result)
				{
					mysqli_close($con);
					
					header("location: ../views/regcom.php?email=".$email."");
				}
				else
				{
					echo "cre";
				}
			}
			else
			{
				echo "ad";
			}
		}
	}
	else
	{
		header("location: ../views/login.php");
	}
?>