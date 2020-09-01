<?php

	if (isset($_GET['error']))
	{
		if($_GET['error'] == 'db_error')
		{
			echo "Something went wrong...please try again";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" id="name" name="username"></td>
					<td></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email "name="email" onkeyup="emailCheck()"></td>
					<td id="emailError"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="register()"></td>
					<td><a href="login.php" style="display: none">Login</a>
				</tr>
			</table>
		<script type="text/javascript">
			function emailCheck()
			{
				var e = document.getElementById('email').value;
				if (e == "") 
				{
					document.getElementById("emailError").innerHTML="Please enter email first";
				}
				if (e.indexOf("@")<0) 
				{
					document.getElementById("emailError").innerHTML="Please enter valid email first";
				}
				else
				{ 
					var xhttp = new XMLHttpRequest();
					xhttp.open('POST', '../php/regcheck.php', true);
					xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
					xhttp.send('email='+e);

					xhttp.onreadystatechange = function ()
					{
						if(this.readyState == 4 && this.status == 200)
						{

							if(this.responseText != "")
							{
								document.getElementById('emailError').innerHTML = this.responseText;
							}
							else
							{
								document.getElementById('emailError').innerHTML = "";
							}
							
						}	
					}
				}	
			}
		</script>
</body>
</html>