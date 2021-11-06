/*Career Validator*/
var customerNode = document.getElementById("place_order_Name");
customerNode.addEventListener("change", checkName, false);

var emailNode = document.getElementById("place_order_Email");
emailNode.addEventListener("change", checkEmail, false);

var addressNode = document.getElementById("place_order_Address");
addressNode.addEventListener("change", checkAddress, false);


var cardNode = document.getElementById("place_order_Card");
cardNode.addEventListener("change", checkCard, false);

var cvcNode = document.getElementById("place_order_CVC");
cvcNode.addEventListener("change", checkCVC, false);


