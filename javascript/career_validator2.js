/*Career Validator*/
var customerNode = document.getElementById("CustName");
customerNode.addEventListener("change", checkName, false);

var emailNode = document.getElementById("CustEmail");
emailNode.addEventListener("change", checkEmail, false);

var experienceNode = document.getElementById("experience");
experienceNode.addEventListener("blur", checkExperience, false);

var dateNode = document.getElementById("startDate");
dateNode.addEventListener("blur", checkDate, false);

/*Contact Validator*/
var contactNode = document.getElementById("ContactName");
contactNode.addEventListener("change", contactName, false);
