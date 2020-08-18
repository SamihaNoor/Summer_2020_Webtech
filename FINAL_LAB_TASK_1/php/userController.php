<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/userService.php');


	//add user
	if(isset($_POST['create'])){
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email
			];

			$status = insert($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/create.php?error=db_error');
			}
		}
	}

	//update user
	if(isset($_POST['edit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$id 		= $_POST['id'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/edit.php?id={$id}');
		}else{

			$user = [
				'id'=> $id,
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
			];

			$status = update($user);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				header('location: ../views/edit.php?id={$id}');
			}
		}
	}
	//delete
	if(isset($_POST['delete']))
	{
		$id = $_POST['id'];
		$status = delete($id);

			if($status){
				header('location: ../views/all_users.php?success=done');
			}else{
				//header('location: ../views/all_users.php?id={$id}');
			}
	}
	//add company
	if(isset($_POST['add']))
	{
		$companyName = $_POST['companyName'];
		$description = $_POST['description'];
		$industry = $_POST['industry'];
		$website = $_POST['website'];
		$logo = $_POST['logo'];
		$name = $_SESSION['username'];

		if(empty($companyName) || empty($description) || empty($industry) || empty($website) || empty($logo))
		{
			header('location: ../views/addCompany.php?error=null_value');
		}
		else
		{
			$company = [
				'companyName'=> $companyName,
				'description'=> $description,
				'industry'=> $industry,
				'website'=> $website,
				'logo'=> $logo,
			];

			$status = addCompany($company,$name);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/addCompany.php?error=db_error');
			}
		}
	}
	
	//edit company
	if(isset($_POST['editCompany']))
	{
		$companyName = $_POST['companyName'];
		$description = $_POST['description'];
		$industry = $_POST['industry'];
		$website = $_POST['website'];
		$logo = $_POST['logo'];
		$id= $_POST['id'];

		if(empty($companyName) || empty($description) || empty($industry) || empty($website) || empty($logo))
		{
			header('location: ../views/all_companies.php?error=null_value');
		}
		else
		{
			$company = [
				'id'=> $id,
				'companyName'=> $companyName,
				'description'=> $description,
				'industry'=> $industry,
				'website'=> $website,
				'logo'=> $logo,
			];

			$status = updateCompany($company);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/editCompany.php?error=db_error');
			}
		}
	}
	
	//delete company
	if(isset($_POST['deleteCompany']))
	{
		$id = $_POST['id'];
		$status = deleteCompany($id);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				//header('location: ../views/all_companies.php?id={$id}');
			}
	}

?>