function validate()
{
	var d = document.forms["form"]["dd"].value;
	var m = document.forms["form"]["mm"].value;
	var y = document.forms["form"]["yyyy"].value;
	if (d == "" || m=="" || y=="") 
	{
		//alert("Date cannot be empty");
		document.getElementById("error").innerHTML="Date cannot be empty";
		return false;
	}
	else if(d<1 || d>31)
	{
		//alert("Please day between 1-31");
		document.getElementById("error").innerHTML="Please day between 1-31";
		return false;
	}
	else if(m<1 || m>12)
	{
		//alert("Please day between 1-12");
		document.getElementById("error").innerHTML="Please day between 1-12";
		return false;
	}
	else if(y<1900 || y>2016)
	{
		//alert("Please day between 1900-2016");
		document.getElementById("error").innerHTML="Please day between 1900-2016";
		return false;
	}
	else
	{ 
		return true;
	}
}