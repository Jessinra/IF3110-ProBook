// Validate without checking database
function validateRegister() {
	validateName();
	validateUsername();
	validateEmail();
	validatePass();
	validateCoPass();
	validatePhoneNumber();
	validateAddress();
	return validateUsername() && validatePass() && validateName()
	&& validatePhoneNumber() && validateEmail() && validateCoPass() && validateAddress();
}

function validateName() {
	var inName = "name";

	if (document.getElementById(inName).value!="") {
		if (document.getElementById(inName).value.length > 20) {
			document.getElementById(inName).value="";
			document.getElementById(inName).placeholder="Max 20 character!";
			document.getElementById(inName).style.borderColor="red";
			document.getElementById(inName).style.borderWidth="2px";
			return false;
		} else {
			document.getElementById(inName).style.borderWidth="2px";
			document.getElementById(inName).style.borderColor="#02702c";
			return true;
		}
	}
	else {
		document.getElementById(inName).style.borderColor="red";
		document.getElementById(inName).style.borderWidth="2px";
		if (document.getElementById(inName).placeholder!="Max 20 character!") {
			document.getElementById(inName).placeholder="Enter your name!";
		}
		return false;
	}
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

function validateEmail() {
	var inName = "email";
	if (document.getElementById(inName).value!="") {
		if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(document.getElementById(inName).value)) {
			document.getElementById(inName).style.borderWidth="2px";
			document.getElementById(inName).style.borderColor="#02702c";
			return true;
		} else {
			if (document.getElementById('second').src.substr(document.getElementById('second').src.length-5) == 'v.png') {
				document.getElementById(inName).placeholder="Incorrect email format!";
				document.getElementById(inName).value="";	
			}
			document.getElementById(inName).style.borderColor="red";
			document.getElementById(inName).style.borderWidth="2px";
			return false;
		}
	}
	else {
		document.getElementById(inName).style.borderColor="red";
		document.getElementById(inName).style.borderWidth="2px";
		if (document.getElementById(inName).placeholder!="Incorrect email format!") {
			document.getElementById(inName).placeholder="Enter your email!";
		}
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

function validateCoPass() {
	var inName = "copassword";
	var inName2 = "password";
	if (document.getElementById(inName).value!="") {
		if (document.getElementById(inName).value == document.getElementById(inName2).value) {
			document.getElementById(inName).style.borderWidth="2px";
			document.getElementById(inName).style.borderColor="#02702c";
			return true;
		} else {
			document.getElementById(inName).style.borderColor="red";
			document.getElementById(inName).style.borderWidth="2px";
			document.getElementById(inName).placeholder="Password not match!";
			document.getElementById(inName).value="";
			return false;
		}
	}
	else {
		document.getElementById(inName).style.borderColor="red";
		document.getElementById(inName).style.borderWidth="2px";
		if (document.getElementById(inName).placeholder!="Password not match!") {
			document.getElementById(inName).placeholder="Enter your password again!";
		}		
		return false;
	}
}

function validatePhoneNumber() {
	var inName = "phone_number";

	if (document.getElementById(inName).value!="") {
		if (/^[0-9]{9,12}$/.test(document.getElementById(inName).value)) {
			document.getElementById(inName).style.borderWidth="2px";
			document.getElementById(inName).style.borderColor="#02702c";
			return true;
		} else {
			document.getElementById(inName).placeholder="Incorrect phone number format!";
			document.getElementById(inName).value="";
			document.getElementById(inName).style.borderColor="red";
			document.getElementById(inName).style.borderWidth="2px";
			return false;
		}
	}
	else {
		document.getElementById(inName).style.borderColor="red";
		document.getElementById(inName).style.borderWidth="2px";
		if (document.getElementById(inName).placeholder!="Incorrect phone number format!") {
			document.getElementById(inName).placeholder="Enter your phone number!";
		}	
		return false;
	}
}

function validateAddress() {
	var inName = "address";
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