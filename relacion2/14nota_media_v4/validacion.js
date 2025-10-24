/**********************************************************
 * Validaciones para el formulario del ejericico 13
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

        // hipotéticamente todos los valores de los campos son válidos
        var correcto = true;

        // requisitos mínimos de coincidencia que debe cumplir el valor del
        // campo email
        //const expresionEmail = /(^[a-zA-Z]+@[a-zA-Z]{5,10}.[com,es,hotmail]$)/i;

        // se cumple la condición si eliminando los
        // espacios del nombre la cadena queda vacía
        if (nombre.trim() == "") {
            marcarError('nombre');
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

        // comprobación de un email con requisitos mínimos
        /*if (!email.match(expresionEmail)) {
            alert('La dirección de correo es inválida');
            correcto = false;
        }*/


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

function marcarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "visible";
    document.getElementById(identificador).style.borderColor = "red";

}

function limpiarError(identificador) {

    document.getElementById(identificador + 'Help').style.visibility = "hidden";
    document.getElementById(identificador).style.borderColor = "#dee2e6";

}
