<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$company = getCId($_GET['id']);	
	}else{
		header('location: all_companies.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Company</title>
</head>
<body>
	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete Company</legend>
			<table>
				<tr>
					<td>Company Id</td>
					<td><input type="text" name="id" value="<?=$company['id']?>"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyName" value="<?=$company['company_name']?>"></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><input type="text" name="description" value="<?=$company['profile_description']?>"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry" value="<?=$company['industry']?>"></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><input type="text" name="website" value="<?=$company['company_website']?>"></td>
				</tr>
				<tr>
					<td>Company Logo</td>
					<td><img src="<?=$company['company_logo']?>"></td>
				</tr>
				<tr>
					<<td>Are you sure?</td>
					<td>
						<input type="hidden" name="id" value="<?=$company['id']?>">
						<input type="submit" name="deleteCompany" value="Yes"> 
						<a href="all_companies.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>