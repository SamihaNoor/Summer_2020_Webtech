function validate()
{
	var d = document.forms["form"]["degree"].value;
	
	if(d == "") 
	{
		alert("You must select one");
		return false;
	}
	else
	{ 
		return true;
	}
}