
document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

        // evita que el botón submit envíe el formulario como haría normalmente
        event.preventDefault();

        var sucesion = document.getElementById("sucesion").value;
        // almacena un array de los valores de la sucesion tomando como
        // separador cadenas, comas, puntos, etc.
        var sucesionArr = sucesion.split(/[\s,.]+/);

        // hipotéticamente todos los valores de los campos son válidos
        var correcto = true;

        // asegura que haya los elementos suficientes para considerarlo
        // un array
        if (sucesionArr.length < 3) {
            marcarError('sucesion');
            correcto = false;
        }

        // si han ido bien todas las comprobaciones se activa
        // de nuveo el evento submit y se envía todo
        if (correcto) document.getElementById("form1").submit();

    }

);

document.getElementById("numero1").addEventListener("change", function () {

    limpiarError('numero1');

});

document.getElementById("numero2").addEventListener("change", function () {

    limpiarError('numero2');

});

document.getElementById("sucesion").addEventListener("change", function () {

    limpiarError('sucesion');

});

function marcarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";

}

function limpiarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#dee2e6";

}