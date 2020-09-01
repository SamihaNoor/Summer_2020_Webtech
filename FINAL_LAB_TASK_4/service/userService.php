<?php
	require_once('../db/db.php');
	
	function cEmail($email)
	{
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		
		$sql= "select * from users where email like '{$email}'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_fetch_assoc($result)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function getByID($id)
	{
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser()
	{
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return true;
		}else{
			return false;
		}
	}


	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into users values('', '{$user['username']}','{$user['password']}', '{$user['email']}', 'admin')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update($user){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}

		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	//delete query
	function delete($id)
	{
		$conn = dbConnection();
		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "delete from users where id={$id}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	//add Company query
	function addCompany($company,$name)
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}
		
		$sql = "select * from users where username='{$name}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		$id = $user['id'];
		
		$sql = "insert into companies values('', '{$company['companyName']}','{$company['description']}', '{$company['industry']}', '{$company['website']}', '{$company['logo']}','{$id}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	//All companies
	function getAllCompanies()
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "select * from companies";
		$result = mysqli_query($conn, $sql);
		$companies = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($companies, $row);
		}

		return $companies;
	}
	
	//get company id
	function getCId($id)
	{
		$conn = dbConnection();

		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "select * from companies where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	//update company
	function updateCompany($company)
	{
		$conn = dbConnection();
		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "update companies set company_name='{$company['companyName']}', profile_description='{$company['description']}', industry='{$company['industry']}', company_website='{$company['website']}', company_logo='{$company['logo']}' where id={$company['id']}";

		if(mysqli_query($conn, $sql))
		{
			return true;
		}else
		{
			return false;
		}
	}
	//delete company query
	function deleteCompany($id)
	{
		$conn = dbConnection();
		if(!$conn)
		{
			echo "DB connection error";
		}

		$sql = "delete from companies where id={$id}";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>