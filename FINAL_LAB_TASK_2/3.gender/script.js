function validate()
{
	var n = document.forms["form"]["gender"].value;
	if (n == "") 
	{
		//alert("Please enter gender first");
		document.getElementById("error").innerHTML="Please enter gender first";
		return false;
	}
	else
	{ 
		return true;
	}
}