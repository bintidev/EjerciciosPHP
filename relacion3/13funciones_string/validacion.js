
document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

        // evita que el botón submit envíe el formulario como haría normalmente
        event.preventDefault();

        var cadena = document.getElementById("cadena").value;

        // hipotéticamente todos los valores de los campos son válidos
        var correcto = true;

        // asegura que haya los elementos suficientes para considerarlo
        // un array
        if (cadena.trim() == '') {
            marcarError('cadena');
            correcto = false;
        }

        // si han ido bien todas las comprobaciones se activa
        // de nuveo el evento submit y se envía todo
        if (correcto) document.getElementById("form1").submit();

    }

);

document.getElementById("cadena").addEventListener("change", function () {

    limpiarError('cadena');

});

function marcarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";

}

function limpiarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#dee2e6";

}