<?php
	session_start();
	require('../db/db.php');
	if(isset($_POST['submit']))
	{
		$userId = $_POST['id'];
		$password = $_POST['password'];

		if(empty($userId) || empty($password))
		{
			//echo "null submission";
			header("location: ../views/login.php?error=null_value");
		}
		else 
		{
			$con = dbConnection();
			//$con = mysqli_connect('localhost','root','','projectmid');
			$sql= "select * from credentials where userId=".$userId." and password='".$password."'";
			$data= mysqli_query($con,$sql);
			$admin = mysqli_fetch_assoc($data);
			
			if(isset($_SESSION['user']) || (isset($_COOKIE['id']) && isset($_COOKIE['password'])) || (count($admin)>0))
			{
				if(($userId == $_SESSION['user']['id'] && $password == $_SESSION['user']['password']) ||
					($userId == $_COOKIE['id'] && $password == $_COOKIE['password']) ||
					(count($admin)>0))
				{
					$sql= "select * from admins where id=".$userId."";
					$data= mysqli_query($con,$sql);
					$ad = mysqli_fetch_assoc($data);
			
					$user = [
						'id'=>$ad['id'],
						'name'=>$ad['name'],
						'email'=>$ad['email'],
						'password'=>$_POST['password'],
						'gender'=>$ad['gender'],
						'dob'=>$ad['dob'],
					];

					$_SESSION['user']=$user;
					
					$_SESSION['status']  = "Ok";
					//$rememberme = $_POST['rememberme'];
					if(isset($_POST['rememberme']))
					{
						setcookie('id', $userId, time()+3600, '/');
						setcookie('password', $password, time()+3600, '/');
						setcookie('status', "OK", time()+3600, '/');
					}
					header('location: ../views/dashboard.php');
				}
				else
				{
					echo "Please check your User Id or Password again";
				}
			}
			else
			{
				echo "You don't have an account";
			}
		}
	}
	else
	{
		header("location: ../views/login.php");
	}
?>
