function setInputAttributes(input) {
	input.setAttribute("required");
	input.setAttribute("class","form-control");
	input.setAttribute("name","vehiculo");
}

function vehicleSelector(cars){
	var selector = document.getElementByID("vehicleSelector");
	if (cars){
		var body = document.getElementByID("body");
		var index = 0;
		var div = document.createElement(div).setAttribute("class","form-group");
		var label = document.createElement(label).setAttribute("for","vehiculo");
		var input = document.createElement(input).setAttribute("type","round");
		var img = document.createElement(img)
		img.setAttribute("max-width","200px");
		img.setAttribute("max-height","200px");
		var id;
		setInputAttributes(input);
		cars.forEach( car => {
			id="vehiculo"+index;
			selector.appendChild(div);
			div.appendChild(label);
			label.appendChild(input);
			input.setAttribute("id",id);
			img.setAttribute("src",car.img);
			input.appendChild(img);
			input.appendChild(document.createTextNode(car.modelo));
			index++;
		});
	}else{
		selector.appendChild(document.createTextNode("Usted no posee vehículos registrados. Para crear un viaje, primero registre un vehículo."))
	}
	
}



document.onLoad(vehicleSelector(document.getElementByID("requestResponse")));