function validate()
{
	var n = document.forms["form"]["name"].value;
	var valid =false;
	if (n == "") 
	{
		alert("Please enter name first");
		//document.getElementById("error").innerHTML="Please enter name first";
		valid =false;
		return false;
	}
	else if((n.charAt(0) <= 'a' || n.charAt(0) >= 'z') && (n.charAt(0) <= 'A' || n.charAt(0) >= 'Z'))
	{
		alert("Name must start with a letter");
		//document.getElementById("error").innerHTML="Name must start with a letter";
		valid =false;
		return false;
	}
	else if(n.split(" ").length<2)
	{
		alert("Name must be at least two words");
		//document.getElementById("error").innerHTML="Name must be at least two words";
		valid =false;
		return false;
	}
	else
	{ 
		valid = true;
	}
	
	var e = document.forms["form"]["email"].value;
	if (e == "") 
	{
		alert("Please enter email first");
		//document.getElementById("error").innerHTML="Please enter email first";
		valid =false;
		return false;
	}
	if (e.indexOf("@")<0 || e.indexOf(".com")<0) 
	{
		alert("Please a valid email");
		//document.getElementById("error").innerHTML="Please enter valid email first";
		valid =false;
		return false;
	}
	else
	{ 
		valid = true;
	}
	
	if(valid)
	{
		return true;
	}
	else
	{
		return false;
	}
}