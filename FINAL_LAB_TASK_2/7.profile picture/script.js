function validate()
{
	var id = document.forms["form"]["id"].value;
	var photo = document.forms["form"]["photo"].value;
	
	if(id == "") 
	{
		alert("You must enter your id");
		return false;
	}
	else if(photo == "")
	{
		alert("you must upload a photo");
	}
	else
	{ 
		return true;
	}
}
