document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

    // evita que el formulario sea enviado al pulsar submit
    event.preventDefault();

    var numero = parseInt(document.getElementById('numero').value);
    // almacenaun booleanoo indicando si cada uno
    // de los elementos radio están maracdos
    var marcadoPrimo = document.getElementById('primo').checked;
    var marcadoDivisores = document.getElementById('divisores').checked;

    var correcto = true;

    if (Number.isNaN(numero) || typeof numero != 'number') {
        marcarError('numero');
        correcto = false;
    }

    // comprueba que al menos una de las 2 opciones haya sido marcada
    if (!marcadoPrimo && !marcadoDivisores) {
        marcarError('operacion');
        correcto = false;
    }

    if (correcto) { document.getElementById("form1").submit() };

});

document.getElementById('numero').addEventListener("change", function () {

    limpiarError('numero');

});

// obtiene los elmentos de la lista opcion y comprueba que estén marcados
// antes de limpiar el error
var opciones = document.getElementsByName('opcion');
for (var i = 0; i < opciones.length; i++) {
    opciones[i].addEventListener("change", function () {
        limpiarError('operacion');
    });
}

function marcarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";

}

function limpiarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#dee2e6";

}