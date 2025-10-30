/**********************************************************
 * Validaciones para el formulario del ejercicio 13
 * Autor: Binta
 * Fecha: 10/10/2025
 * Enlace con: /13rubrica_notas_v2/formulario.html
 */
document.getElementById('form1').addEventListener("submit", function validarFormularioNotas(event) {

        // evita que el botón submit envíe el formulario como haría normalmente
        event.preventDefault();

        // no debe estar vacío
        var nombre = document.getElementById('nombre').value;
        // debe tener el formato de un email
        var email = document.getElementById('email').value;
        // deben ser enteros, numéricos, entre 1 y 10
        var nota1 = parseFloat(document.getElementById('nota1').value);
        var nota2 = parseFloat(document.getElementById('nota2').value);
        // igual que las notas, pero puede ser 0
        var faltas = parseInt(document.getElementById('faltas').value);
        // debe tener un numero de caracteres y formato especificos
        var identificacion = document.getElementById('identificacion').value;
        // debe ser un tipo de los proporcionados
        var tipoId = document.getElementById('tipoId').value;

        // hipotéticamente todos los valores de los campos son válidos
        var correcto = true;

        // expresiones
        // requisitos mínimos de coincidencia que debe cumplir el valor del campo email
        const expresionEmail = /^[-._a-zA-Z0-9]+@[-._a-zA-Z0-9]+\.[a-zA-Z]+$/;
        // patrones para cada tipo de documento
        const expresionDNI = /^[0-9]{8}[a-zA-Z]$/;
        const expresionNIE = /^[xyzXYZ][0-9]{7}[a-zA-Z]$/;
        // combina el NIE y el "numero de soporte", formando el TIE
        const expresionTIE = /^[xyzXYZ][0-9]{7}[a-zA-Z][Ee][0-9]{8}$/;

        // se cumple la condición si eliminando los
        // espacios del nombre la cadena queda vacía
        if (nombre.trim() == "") {
            marcarError('nombre');
            correcto = false;
        }

        // comprobación de un email con requisitos mínimos
        if (!email.match(expresionEmail)) {
            marcarError('email');
            correcto = false;
        }

        // comprobación de tipo numérico y rango permitido [1, 10] de nota1, nota2
        if (Number.isNaN(nota1) || (nota1 < 1) || (nota1 > 10)) {
            marcarError('nota1');
            correcto = false;
        }

        if (Number.isNaN(nota2) || (nota2 < 1) || (nota2 > 10)) {
            marcarError('nota2');
            correcto = false;
        }

        // comprobación de tipo numérico y rango permitido [0, ) de faltas
        if (Number.isNaN(faltas) || (faltas < 0)) {
            marcarError('faltas');
            correcto = false;
        }

        // comprobación de que el campo identificación no está vacío
        if (identificacion.trim() == "") {
            document.getElementById('identificacionHelp').innerText = "Esta campo es obligatorio";
            marcarError('identificacion');
            correcto = false;
        }

        // comprbación de despliegue del elemento select
        if (tipoId == "") {
            marcarError('tipoId');
            correcto = false;
        }
        
        // comprobacion para seleccion de identificacion tipo DNI
        if (tipoId == "dni" && !identificacion.match(expresionDNI)) {
            document.getElementById('identificacionHelp').innerText = mensajeIdentificacion();
            marcarError('identificacion');
            correcto = false;
        }

        // comprobacion para seleccion de identificacion tipo NIE
        if (tipoId == "nie" && !identificacion.match(expresionNIE)) {
            document.getElementById('identificacionHelp').innerText = mensajeIdentificacion();
            marcarError('identificacion');
            correcto = false;
        }

        // comprobacion para seleccion de identificacion tipo TIE
        if (tipoId == "tie" && !identificacion.match(expresionTIE)) {
            document.getElementById('identificacionHelp').innerText = mensajeIdentificacion();
            marcarError('identificacion');
            correcto = false;
        }

        // si han ido bien todas las comprobaciones se activa
        // de nuveo el evento submit y se envía todo
        if (correcto) document.getElementById("form1").submit();

    }

);

document.getElementById("nombre").addEventListener("change", function () {

    limpiarError('nombre');

});

document.getElementById("nota1").addEventListener("change", function () {

    limpiarError('nota1');

});

document.getElementById("nota2").addEventListener("change", function () {

    limpiarError('nota2');

});

document.getElementById("faltas").addEventListener("change", function () {

    limpiarError('faltas');

});

document.getElementById("identificacion").addEventListener("change", function () {

    limpiarError('identificacion');

});

document.getElementById("tipoId").addEventListener("change", function () {

    limpiarError('tipoId');

});

function marcarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";

}

function limpiarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#dee2e6";

}

// mensaje de error personalizado para cada tipo de identificacion
function mensajeIdentificacion() {

    var tipoId = document.getElementById('tipoId').value;
    let mensaje;

    switch (tipoId) {

        case "dni":
            mensaje = "El DNI debe tener 8 dígitos y un caracter identificativo";
            break;

        case "nie":
            mensaje = "El NIE debe comenzar y terminar por x,y o z y tener en medio 7 dígitos";
            break;

        case "tie":
            mensaje = "El TIE debe ser el NIE seguido de una 'E' y 8 dígitos";
            break;
    
    }

    return mensaje;

}
