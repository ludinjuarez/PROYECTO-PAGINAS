function copiardato()
{
	var dato=document.getElementsById('datos');
	var etiqueta=document.getElementsById('botonCopiar');

	etiqueta.innerHTML=dato.value;
}

function  AgregarEtiqueta()
{
	var nodo =document.createElement("p");
	var texto =document.createTextNode("Mensaje de Prueba");
	var divdatos=document.getElementsById('form2');
	nodo.appendChild(texto);<!--texto es hijo de nodo-->
	divdatos.appendChild(nodo);<!--nodo es hijo de divdatos-->
}