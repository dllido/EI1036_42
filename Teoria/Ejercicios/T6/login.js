function cargarDatos(datos){
	document.querySelector('#errores').innerHTML="";
 if (datos.error) {
 document.querySelector('#errores').innerHTML=datos.error;
}
	else{
		document.querySelector('#central').innerHTML="Bienvenido";
	}};


async function llamarServer(enlace) {
		try {
		  const response = await fetch(enlace);
		  if (!response.ok) {
			throw Error(response.statusText);
		  }
		  const json = await response.json();
		  if(response.status == 200) return response.json();
		  else throw new Error('Something went wrong on api server!');
			
		} catch (error) {
		  console.log(error);
		}
	  }
	
	
document.querySelector('#form_log').addEventListener("submit",function (event) {
	event.preventDefault();																									 var myInit= {method:'POST', body:new FormData(event.target)};
	 var myRequest = new Request(event.target.action, myInit);
	 llamarServer(myRequest);																						 
	 });
