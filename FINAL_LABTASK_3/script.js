function validate()
{
	var n = document.forms["form"]["name"].value;
	if (n == "") 
	{
		//alert("Please enter name first");
		document.getElementById("error").innerHTML="Please enter name first";
		return false;
	}
	else if((n.charAt(0) <= 'a' || n.charAt(0) >= 'z') && (n.charAt(0) <= 'A' || n.charAt(0) >= 'Z'))
	{
		//alert("Name must start with a letter");
		document.getElementById("error").innerHTML="Name must start with a letter";
		return false;
	}
	else if(n.split(" ").length<2)
	{
		//alert("Name must be at least two words");
		document.getElementById("error").innerHTML="Name must be at least two words";
		return false;
	}
	else
	{ 
		return true;
	}
}