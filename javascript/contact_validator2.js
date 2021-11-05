/*Career Validator*/
var contactNode = document.getElementById("ContactName");
contactNode.addEventListener("change", contactName, false);

var contact_emailNode = document.getElementById("ContactEmail");
contact_emailNode.addEventListener("change", contactEmail, false);

var contact_numNode = document.getElementById("ContactNumber");
contact_numNode.addEventListener("change", contactNum, false);

var feedbackNode = document.getElementById("Feedback");
feedbackNode.addEventListener("blur", contactFeedback, false);


