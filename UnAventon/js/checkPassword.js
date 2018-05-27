function checkPassword(){
	var pass = document.getElementById('contrasenia');
	var confpass = document.getElementById('confirmarcontrasenia');
	var message = document.getElementById('resultado');
	var button = document.getElementById('registerBtn');
	if (pass.value){
		if (confpass.value){
			if (pass.value == confpass.value) {
				message.style.color = 'green';
				message.innerHTML = 'Las contraseñas coinciden.'
				confpass.style.background = 'green';
				button.disabled = false;
				} else {
				message.style.color = 'red';
				message.innerHTML = 'Las contraseñas no coinciden.'
				confpass.style.background = 'red';
				button.disabled = true;
			}
		}
	}	
}

function resetPassword(){
	var message = document.getElementById('resultado');
	if (message.innerHTML){
		var confpass = document.getElementById('confirmarcontrasenia');
		var pass = document.getElementById('contrasenia');
		confpass.background = pass.background;
		message.innerHTML='';
	}
}
