function validar(){
	var usuario = document.getElementById("usuario").value;
	var password = document.getElementById("password").value;
	var error = document.getElementsByTagName("p")[1];

	if(usuario == 0 || password == 0){
		alert("No debes dejar campos vacios.")
	}
}
document.getElementById("usuario").focus();

