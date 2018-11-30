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

	if(contra != recontra)
	{
		alert("las contraseñas deben ser identicas");
		return false;
	}
}

