<?php 
	session_start();
	require_once('../service/userService.php');

		$username = $_POST['username'];
		$password = $_POST['password'];
		$email 	= $_POST['email'];

		$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql= "select email from users where email like '{$email}'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_fetch_assoc($result) > 0) 
		{
			echo "Existing email";
		}
		else
		{
			echo "Okay";
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
?>