
document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

        // evita que el botón submit envíe el formulario como haría normalmente
        event.preventDefault();

        // deben ser enteros, numéricos
        var numero1 = parseInt(document.getElementById('numero1').value);
        var numero2 = parseInt(document.getElementById('numero2').value);
        var sucesion = document.getElementById("sucesion").value;
        // almacena un array de los valores de la sucesion tomando como
        // separador cadenas, comas, puntos, etc.
        var sucesionArr = sucesion.split(/[\s,.]+/);

        // hipotéticamente todos los valores de los campos son válidos
        var correcto = true;

        // comprobación de tipo numérico
        if (Number.isNaN(numero1) || numero1 == null) {
            marcarError('numero1');
            correcto = false;
        }

        if (Number.isNaN(numero2) || numero2 == null) {
            marcarError('numero2');
            correcto = false;
        }

        // 
        if (sucesionArr.length <= 3) {
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

function marcarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";

}

function limpiarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#dee2e6";

}