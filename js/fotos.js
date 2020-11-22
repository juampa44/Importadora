function cambia(val){
	var nodos = document.getElementById(val);
	var atributo = nodos.attributes.getNamedItem("src").nodeValue;
	//alert(atributo);
	var elementoRecibe=document.getElementById("espacioImagen");
	elementoRecibe.setAttribute("src",atributo);
}