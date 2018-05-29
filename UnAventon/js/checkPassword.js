function checkPassword(pass,confpass,error,button){
	var ar = Array.from(pass.innerText);
	var confar = Array.from(confpass.innerText);
	console.log(ar);
	console.log(confar);
	if (ar.lenght != confar.lenght){
		error.visibility = "visible";
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
document.onLoad(e =>{
	var pass = document.getElementById('contrasenia');
	var confpass = document.getElementById('confirmarcontrasenia');
	var para = document.createElement('p');
	var conferror = document.createTextNode('La contraseñas no coinciden.');
	para.appendChild(conferror);
	var submit = document.getElementById('registerBtn');
	para.setAttribute('visibility','hidden');
	confpass.appendChild(para);
	confpass.addEventListener("input",checkPassword(pass,confpass,para,submit));
})
