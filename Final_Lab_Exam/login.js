function keyupName()
{
	var id = document.getElementById('name').value;
	if(id=="")
	{
		document.getElementById('eName').innerHTML = "Enter Your User Name first";
	}
	else
	{
		document.getElementById('eName').innerHTML = "";
	}
}

function onblurId()
{
	var id = document.getElementById('id').value;
	if(id=="")
	{
		document.getElementById('eName').innerHTML = "Enter Your User Name first";
	}
	else
	{
		document.getElementById('eName').innerHTML = "";
	}
}

function keyupPass()
{
	var pass = document.getElementById('password').value;
	if(pass=="")
	{
		document.getElementById('ePass').innerHTML = "Enter Your Password first";
	}
	else
	{
		document.getElementById('ePass').innerHTML = "";
	}
}

function onblurPass()
{
	var pass = document.getElementById('password').value;
	if(pass=="")
	{
		document.getElementById('ePass').innerHTML = "Enter Your Password first";
	}
	else
	{
		document.getElementById('ePass').innerHTML = "";
	}
}

function getInfo()
{
	var name = document.getElementById('name').value;
	var pass = document.getElementById('password').value;
	var rememberme = document.getElementById('rememberme').value;
	
	if(name=="" && pass=="")
	{
		document.getElementById('eName').innerHTML = "Enter Your User Name first";
		document.getElementById('ePass').innerHTML = "Enter Your Password first";
		return false;
	}
	else if(name!="" && pass=="")
	{
		document.getElementById('eName').innerHTML = "";
		document.getElementById('ePass').innerHTML = "Enter Your Password first";
		return false;
	}
	else if(name=="" && pass!="")
	{
		document.getElementById('eName').innerHTML = "Enter Your User Name first";
		document.getElementById('ePass').innerHTML = "";
		return false;
	}
	else
	{
		document.getElementById('eName').innerHTML = "";
		document.getElementById('ePass').innerHTML = "";
		return true;
	}
}