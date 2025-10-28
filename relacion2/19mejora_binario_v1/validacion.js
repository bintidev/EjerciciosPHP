document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

    // evita que el formulario sea enviado al pulsar submit
    event.preventDefault();

    var numero = parseInt(document.getElementById('numero').value);
    // recoge el campo select
    var base = document.getElementById('base');

    var correcto = true;

    if (Number.isNaN(numero) || typeof numero != 'number') {
        marcarError('numero');
        correcto = false;
    }

    // obtiene el valor de la opcion seleccionada del select
    // (lo hace por defecto)
    if (base.value == "") {
        marcarError('base');
        correcto = false;
    }

    if (correcto) { document.getElementById("form1").submit() };

});

document.getElementById('numero').addEventListener("change", function () {

    limpiarError('numero');

});

document.getElementById('base').addEventListener("change", function () {

    limpiarError('base');

});

function marcarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";

}

function limpiarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#dee2e6";

}