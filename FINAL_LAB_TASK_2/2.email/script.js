function validate()
{
	var n = document.forms["form"]["email"].value;
	if (n == "") 
	{
		//alert("Please enter email first");
		document.getElementById("error").innerHTML="Please enter email first";
		return false;
	}
	if (n.indexOf("@")<0 || n.indexOf(".com")<0) 
	{
		//alert("Please a valid email");
		document.getElementById("error").innerHTML="Please enter valid email first";
		return false;
	}
	else
	{ 
		return true;
	}
}