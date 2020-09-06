function searchAuthor()
{
	var name = document.getElementById('search').value;
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', 'search.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('name='+name);
	
	xhttp.onreadystatechange = function ()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			if(this.responseText != "")
			{
				document.getElementById('table').innerHTML = this.responseText;
			}
			else
			{
				document.getElementById('table').innerHTML = "";
			}	
		}	
	}
}