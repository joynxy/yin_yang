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


function checkExperience(event) {
	var Experience = document.getElementById('experience').value;
	if (Experience.length == 0) {
		alert("Kindly fill up job experience");	
		}
}


function checkDate(){
	var selectedText = document.getElementById('startDate').value;
	var selectedDate = new Date(selectedText).setHours(0, 0, 0, 0);
	var now = new Date().setHours(0, 0, 0, 0);
	if (selectedDate==now){
		alert('Start date cannot be today. Kindly change the date to tomorrow onwards.');
	}
	else if (selectedDate<now){
		alert('Kindly change the date to tommorow onwards.')
	}
}

/*Contact_Us*/
function contactName(event) {
	var contactName = event.currentTarget;
	var pos = contact.value.search(/^(\s{0,1}[A-Z][a-z]*){0,}$/);

	if (pos != 0) {
		alert("The name you entered (" + contactName.value + ") is not in the correct form. \n" +
			"First letters are capitalised and a space has to be inserted between each word.");
		contactName.focus();
		contactName.select();
	}
}

/* function contactEmail(event) {
	var emailAdd = event.currentTarget;
	var pos = emailAdd.value.search(/^[\w.-]+@[a-zA-Z_]+(?:\.[a-zA-Z]{1,}){0,2}\.[a-zA-Z]{2,3}$/);

	if (pos != 0) {
		alert("Kindly fill up your email in the correct format");
		emailAdd.focus();
		emailAdd.select();
	}
}

function contactPhone(event) {
	var CustName = event.currentTarget;
	var pos = CustName.value.search(/^(\s{0,1}[A-Z][a-z]*){0,}$/);

	if (pos != 0) {
		alert("The name you entered (" + CustName.value + ") is not in the correct form. \n" +
			"First letters are capitalised and a space has to be inserted between each word.");
		CustName.focus();
		CustName.select();
	}
}

function contactFeedback(event) {
	var Experience = document.getElementById('experience').value;
	if (Experience.length == 0) {
		alert("Kindly fill up job experience");	
		}
}
*/


