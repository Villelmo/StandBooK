function validar() {
	var usuario, contraseña;

	usuario = document.getElementByName("usuario").value;
	contraseña = document.getElementById("contraseña").value;

	if (usuario == "") {
		alert("Debe llenar todos los campos");
		return false;
	}
}