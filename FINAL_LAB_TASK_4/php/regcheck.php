<?php 
	session_start();
	require_once('../service/userService.php');

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email 	= $_POST['email'];

		$checkEmail = cEmail($email);
		
		if(checkEmail)
		{
			
		}
		
		/* if(empty($username) || empty($password) || empty($email))
		{
			header('location: ../views/register.php?error=null_value');
		}
		else
		{
			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status)
			{
				header('location: ../views/login.php?success=registration_done');
			}
			else
			{
				header('location: ../views/register.php?error=db_error');
			}
		}*/
	}
?>