<!-- script type="text/javascript" src="./cargaTemplateTable.js" charset="utf-8"  async defer !-->
	


	<script type="text/javascript">
		//var datos = [{ "id": "1", "nombre": "pepe", "apellido": null, "email": null, "clave": null }, { "id": "2", "nombre": "pepe", "apellido": null, "email": null, "clave": null }, { "id": "3", "nombre": "", "apellido": null, "email": null, "clave": null }, { "id": "4", "nombre": "joseva", "apellido": null, "email": null, "clave": null }, { "id": "5", "nombre": "LOLA", "apellido": null, "email": null, "clave": null }, { "id": "6", "nombre": "paco", "apellido": null, "email": null, "clave": null }, { "id": "7", "nombre": "user1", "apellido": null, "email": null, "clave": null }, { "id": "8", "nombre": "pl", "apellido": null, "email": null, "clave": null }, { "id": "9", "nombre": "plll", "apellido": null, "email": null, "clave": null }]
	var datos=<?php echo ($filas)?>;

		document.addEventListener("DOMContentLoaded", function () {
			// Test to see if the browser supports the HTML template element by checking
			// for the presence of the template element's content attribute.
			if (document.querySelector('template').content) {

				// Instantiate the table with the existing HTML tbody and the row with the template
				var t = document.querySelector('#tablerow');
				var tb = document.getElementsByTagName("tbody");
				var clone;

				td = t.content.querySelectorAll("td");
				
				for (let i = 0; i < datos.length; i++) {

					td[0].textContent = datos[i].email;
					td[1].textContent = datos[i].nombre;

					clone = document.importNode(t.content, true);
					tb[0].appendChild(clone);

				}
			}
		});
	</script>


	<p><a class="button" href="SendJSON.php"> Listar usuarios <a>
				<p>
					<table id="producttable">
						<thead>
							<tr>
								<td>AMIGOS</td>
								
							</tr>
						</thead>
						<tbody>
							<!-- existing data could optionally be included here -->
						</tbody>
					</table>
					<template id="tablerow">
						<tr>
							<td class="record"></td>
							<td></td>
						</tr>
					</template>