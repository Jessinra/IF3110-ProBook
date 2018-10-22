function validateLogin() {
	validatePass();
	validateUsername();
	return (validateUsername() && validatePass());
}
	
function validateUsername() {
	var inName = "username";
	if (document.getElementById(inName).value!="") {
		document.getElementById(inName).style.borderWidth="2px";
		document.getElementById(inName).style.borderColor="#02702c";
		return true;
	}
	else {
		document.getElementById(inName).style.borderColor="red";
		document.getElementById(inName).style.borderWidth="2px";
		document.getElementById(inName).placeholder="Enter your username!";
		return false;
	}
}
	
function validatePass() {
	var inName = "password";
	if (document.getElementById(inName).value!="") {
		document.getElementById(inName).style.borderWidth="2px";
		document.getElementById(inName).style.borderColor="#02702c";
		return true;
	}
	else {
		document.getElementById(inName).style.borderColor="red";
		document.getElementById(inName).style.borderWidth="2px";
		document.getElementById(inName).placeholder="Enter your password!";
		return false;
	}
}