function cargarTemplate(datos) {
	if (document.querySelector('template').content) {

		// Instantiate the table with the existing HTML tbody and the row with the template
		var t = document.querySelector('#productrow');
		var tb = document.getElementsByTagName("tbody");
		var clone;

		td = t.content.querySelectorAll("td");
		for (var i = 0; i < datos.length; i++) {

			td[0].textContent = datos[i].person_eid;
			td[1].textContent = datos[i].nombre;

			clone = document.importNode(t.content, true);
			tb[0].appendChild(clone);

		}
	}
}