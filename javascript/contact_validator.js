/*Contact_Us*/
function contactName(event) {
	var contactName = event.currentTarget;
	var pos = contactName.value.search(/^(\s{0,1}[A-Z][a-z]*){0,}$/);

	if (pos != 0) {
		alert("The name you entered (" + contactName.value + ") is not in the correct form. \n" +
			"First letters are capitalised and a space has to be inserted between each word.");
		contactName.focus();
		contactName.select();
	}
}

function contactEmail(event) {
	var emailAdd = event.currentTarget;
	var pos = emailAdd.value.search(/^[\w.-]+@[a-zA-Z_]+(?:\.[a-zA-Z]{1,}){0,2}\.[a-zA-Z]{2,3}$/);

	if (pos != 0) {
		alert("Kindly fill up your email in the correct format");
		emailAdd.focus();
		emailAdd.select();
	}
}

function contactNum(event) {
	var contactnumber = event.currentTarget;
	var pos = contactnumber.value.search(/^\d{8}$/);

	if (pos != 0) {
		alert("The contact number you entered (" + contactnumber.value + ") is not in the correct form. \n" +
			"Enter your 8 digit contact number");
			contactnumber.focus();
			contactnumber.select();
	}
}

function contactFeedback(event) {
	var contactfeedback = document.getElementById('Feedback').value;
	if (contactfeedback.length == 0) {
		alert("Kindly fill up your reason for contacting us");	
		}
}



