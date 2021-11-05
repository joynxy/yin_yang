/*Career Validator*/
function checkName(event) {
	var CustName = event.currentTarget;
	var pos = CustName.value.search(/^(\s{0,1}[A-Z][a-z]*){0,}$/);

	if (pos != 0) {
		alert("The name you entered (" + CustName.value + ") is not in the correct form. \n" +
			"First letters are capitalised and a space has to be inserted between each word.");
		CustName.focus();
		CustName.select();
	}
}

function checkEmail(event) {
	var emailAdd = event.currentTarget;
	var pos = emailAdd.value.search(/^[\w.-]+@[a-zA-Z_]+(?:\.[a-zA-Z]{1,}){0,2}\.[a-zA-Z]{2,3}$/);

	if (pos != 0) {
		alert("Kindly fill up your email in the correct format");
		emailAdd.focus();
		emailAdd.select();
	}
}

function checkAddress(event) {
	var CustAddress = event.currentTarget;
	var pos = CustAddress.value.search(/^[a-zA-Z0-9]+$/);

	if (pos != 0) {
		alert("The name you entered (" + CustAddress.value + ") is not in the correct form. \n" +
			"Please enter proper address.");
			CustAddress.focus();
			CustAddress.select();
	}
}

function checkCard(event) {
	var cardnumber = event.currentTarget;
	var pos = cardnumber.value.search(/^\d{16}$/);

	if (pos != 0) {
		alert("The card you entered (" + cardnumber.value + ") is invalid. \n" +
			"Kindly enter your 16 digit card number.");
			cardnumber.focus();
			cardnumber.select();
	}
}

function checkCVC(event) {
	var cvcnumber = event.currentTarget;
	var pos = cvcnumber.value.search(/^\d{3}$/);

	if (pos != 0) {
		alert("The CVC you entered (" + cvcnumber.value + ") is invalid. \n" +
			"Kindly enter your 3 digit CVC number.");
			cvcnumber.focus();
			cvcnumber.select();
	}
}




