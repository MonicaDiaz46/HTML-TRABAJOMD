
function Validacion(){
    var campo = document.getElementById("Documento").value;
    var campo = document.getElementById("Nombre").value;
    var campo = document.getElementById("Apellido").value;
    var campo = document.getElementById("Telefono").value;
    var campo = document.getElementById("Email").value;
    var campo = document.getElementById("Direccion").value;
    if (campo ==="") {
            alert("Debe ingresar todos los campos");
    }
    else{
            alert("Campo válido");
    }
     return false;
}

