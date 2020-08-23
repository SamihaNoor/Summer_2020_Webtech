function validate()
{
	var b = document.forms["form"]["bg"].value;
	
	if(b == "") 
	{
		alert("You must select one");
		return false;
	}
	else
	{ 
		return true;
	}
}