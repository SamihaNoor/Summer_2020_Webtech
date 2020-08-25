function validate()
{
	//name
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
	
	//email
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
	
	//gender
	var g = document.forms["form"]["gender"].value;
	if (g == "") 
	{
		alert("Please enter gender first");
		//document.getElementById("error").innerHTML="Please enter gender first";
		valid =false;
		return false;
	}
	else
	{ 
		valid =true;
	}
	
	//date
	var d = document.forms["form"]["dd"].value;
	var m = document.forms["form"]["mm"].value;
	var y = document.forms["form"]["yyyy"].value;
	if (d == "" || m=="" || y=="") 
	{
		alert("Date cannot be empty");
		//document.getElementById("error").innerHTML="Date cannot be empty";
		valid =false;
		return false;
	}
	else if(d<1 || d>31)
	{
		alert("Please day between 1-31");
		//document.getElementById("error").innerHTML="Please day between 1-31";
		valid =false;
		return false;
	}
	else if(m<1 || m>12)
	{
		alert("Please day between 1-12");
		//document.getElementById("error").innerHTML="Please day between 1-12";
		valid =false;
		return false;
	}
	else if(y<1900 || y>2016)
	{
		alert("Please day between 1900-2016");
		//document.getElementById("error").innerHTML="Please day between 1900-2016";
		valid =false;
		return false;
	}
	else
	{ 
		valid =true;
	}
	
	//blood group
	var b = document.forms["form"]["bg"].value;
	
	if(b == "") 
	{
		alert("You must select one");
		valid =false;
		return false;
	}
	else
	{ 
		valid =true;
	}
	
	//degree
	var d = document.forms["form"]["degree[]"];
	
	if(d[0].checked) 
	{
		valid=true;
	}
	else if(d[1].checked) 
	{
		valid=true;
	}
	else if(d[2].checked) 
	{
		valid=true;
	}
	else
	{ 
		alert("You must select one");
		valid = false;
		return false;
	}
	
	//profile pic
	
	var photo = document.forms["form"]["photo"].value;
	
	if(photo == "")
	{
		alert("you must upload a photo");
		valid = false;
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