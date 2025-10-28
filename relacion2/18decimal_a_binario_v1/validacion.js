document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

    // evita que el formulario sea enviado al pulsar submit
    event.preventDefault();

    var numero = parseInt(document.getElementById('numero').value);

    var correcto = true;

    if (Number.isNaN(numero) || typeof numero != 'number') {
        marcarError('numero');
        correcto = false;
    }

    if (correcto) { document.getElementById("form1").submit() };

});

document.getElementById('numero').addEventListener("change", function () {

    limpiarError('numero');

});

function marcarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";

}

function limpiarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#dee2e6";

}