function checkPassword(pass,confpass,error,button){
	var ar = Array.from(pass);
	var confar = Array.from(confpass)
	if (ar.lenght != confar.lenght){
		error.visibility="visible";
		button.setAttribute('disabled');
	} else {
		if (ar.lenght >= 8){
			for (var i = 0; i < ar.lenght; i++) {
				if (ar[i] != confar[i]) {
					error.visibility="visible";
					button.setAttribute('disabled');
				}
			}
		} else {
			error.visibility="visible";
			button.setAttribute('disabled');
		}
	}

	error.visibility="hidden";
	button.removeAttribute('disabled');
}

var pass = document.getElementById('contrasenia');
var confpass = document.getElementById('confirmarcontrasenia');
var conferror = document.createTextNode('La contraseñas no coinciden.');
var submit = document.getElementById('register');
conferror.setAttribute('visibility','hidden');
confpass.appendChild(conferror);
confpass.addEventListener("input",checkPassword(pass,confpass,conferror,submit));
