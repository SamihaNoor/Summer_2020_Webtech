function validate()
{
	var d = document.forms["form"]["degree[]"];
	var check=false;
	
	if(d[0].checked) 
	{
		check=true;
	}
	else if(d[1].checked) 
	{
		check=true;
	}
	else if(d[2].checked) 
	{
		check=true;
	}
	if(check)
	{
		return true;
	}
	else
	{ 
		alert("You must select one");
		return false;
	}
}