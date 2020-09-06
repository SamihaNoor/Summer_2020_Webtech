function keyupName()
{
	var name = document.getElementById('name').value;
	if(name=="")
	{
		document.getElementById('eName').innerHTML = "Enter Name first";
	}
	else
	{
		document.getElementById('eName').innerHTML = "";
	}
}

function keyupUserName()
{
	var username = document.getElementById('username').value;
	if(username=="")
	{
		document.getElementById('eUserName').innerHTML = "Enter User Name first";
	}
	else
	{
		document.getElementById('eUserName').innerHTML = "";
	}
}

function keyupContact()
{
	var contact = document.getElementById('contact_number').value;
	if(contact=="")
	{
		document.getElementById('eContact').innerHTML = "Enter Contact number first";
	}
	else if(contact!="")
	{
		document.getElementById('eContact').innerHTML = "";
	}
}



function keyupPass()
{
	var pass = document.getElementById('password').value;
	if(pass=="")
	{
		document.getElementById('ePass').innerHTML = "Enter Your Password first";
	}
	else if(pass!="")
	{
		if(pass.length<4)
		{
			document.getElementById('ePass').innerHTML = "The password is too weak";
		}
		else if(pass.length<6)
		{
			document.getElementById('ePass').innerHTML = "moderate";
		}
		else
		{
			document.getElementById('ePass').innerHTML = "strong";
		}
	}
}

function keyupConPass()
{
	var pass = document.getElementById('password').value;
	var conPass = document.getElementById('confirmPassword').value;
	if(conPass=="")
	{
		document.getElementById('eConPass').innerHTML = "Confirm your Password first";
	}
	else if(conPass!="")
	{
		if(conPass==pass)
		{
			document.getElementById('eConPass').innerHTML = "matched";
		}
		else
		{
			document.getElementById('eConPass').innerHTML = "not matched";
		}
	}
}

function register()
{
	var name = document.getElementById('name').value;
	var contact = document.getElementById('contact_number').value;
	var username = document.getElementById('username').value;
	var pass = document.getElementById('password').value;
	var conPass = document.getElementById('confirmPassword').value;
	
	if(name=="" || contact=="" || username=="" || pass=="" || conPass=="")
	{
		if(name==""){document.getElementById('eName').innerHTML = "Enter Name first";}
		if(contact==""){document.getElementById('eContact').innerHTML = "Enter Contact first";}
		if(username==""){document.getElementById('eUserName').innerHTML = "Enter  User Name first";}
		if(pass==""){document.getElementById('ePass').innerHTML = "Enter Password first";}
		if(conPass==""){document.getElementById('eConPass').innerHTML = "Confirm Password first";}
		return false;
	}
	else
	{
		document.getElementById('eName').innerHTML = "";
		document.getElementById('eContact').innerHTML = "";
		document.getElementById('eUserName').innerHTML = "";
		document.getElementById('ePass').innerHTML = "";
		document.getElementById('eConPass').innerHTML = "";
		return true;
	}
}