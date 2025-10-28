document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

    // evita que el formulario sea enviado al pulsar submit
    event.preventDefault();

    var numero1 = parseInt(document.getElementById('numero1').value);
    var numero2 = parseInt(document.getElementById('numero2').value);
    // como mínimo una opcion debe estar marcada
    var division = document.getElementById('division');
    var mcd = document.getElementById('mcd');

    var correcto = true;

    if (Number.isNaN(numero1) || typeof numero1 != 'number') {
        marcarError('numero1');
        correcto = false;
    }

    if (Number.isNaN(numero2) || typeof numero2 != 'number') {
        marcarError('numero2');
        correcto = false;
    }

    // comprueba que al menos una de las 3 opciones haya sido marcada
    if (!division.checked && !mcd.checked) {
        marcarError('operacion');
        correcto = false;
    }

    if (correcto) { document.getElementById("form1").submit() };

});

document.getElementById('numero1').addEventListener("change", function () {

    limpiarError('numero1');

});

document.getElementById('numero2').addEventListener("change", function () {

    limpiarError('numero2');

});

// obtiene los elmentos de la lista opcion y comprueba que alguno esté marcado
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