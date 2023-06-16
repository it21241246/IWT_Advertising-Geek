function checkPassword()
{
	if(document.getElementById("pwd").value!=document.getElementById("confirmpwd").value)
	{
		alert("Password Mismatch!");
		return false;
	}
	else
	{
		alert("Success!");
		return true;
	}
}
