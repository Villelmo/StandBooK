function validar()
{
	var nombre, direccion, telefono, contra, recontra;
	nombre = document.getElementById("nombre").value;
	direccion = document.getElementById("direccion").value;
	telefono = document.getElementById("telefono").value;
	contra = document.getElementById("contraseña").value;
	recontra = document.getElementById("re_contraseña").value;

	if(nombre == "" || direccion == "" || telefono == "" || contra == "" || recontra == "")
	{
		alert("Todos los campos son obligatorios");
		return false;
	}
      contra=md5(contra);
    	if(contra != recontra)
	{
		alert("lo sentimos pero las contraseñas deben ser identicas");
		return nuevoregistro1.php;
	}


}

