// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');
//
function loginBTN() {
	document.getElementById('id02').style.display = 'none';
	document.getElementById('id01').style.display='block';
};

function registerBTN() {
	document.getElementById('id02').style.display = 'block';
};

function goToReg() {
	if (confirm("Вам нужно прочесть правила проекта, прежде чем зарегистрироваться")) {
		location.href = 'rules.php';
	}
};
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}