/**********************************************************
 * Validaciones para el formulario del ejericico 13
 * Autor: Binta
 * Fecha: 10/10/2025
 * Enlace con: /13rubrica_notas_v2/formulario.html
 */
function validarFormularioNotas() {
    
    // no debe estar vacío
    let nombre = document.getElementById('nombre').value;
    // debe tener el formato de un email
    let email = document.getElementById('email').value;
    // deben ser enteros, numéricos, entre 1 y 10
    let nota1 = document.getElementById('nota1').value;
    let nota2 = document.getElementById('nota2').value;
    // igual que las notas, pero puede ser 0
    let faltas = parseInt(document.getElementById('faltas').value);

    // hipotéticamente todos los valores de los campos son válidos
    let correcto = true;

    // requisitos mínimos de coincidencia que debe cumplir el valor del
    // campo email
    const expresionEmail = /^[a-zA-Z]+@[a-zA-Z]{5,10}.[com,es,hotmail]$/i;

    // se cumple la condición si eliminando los
    // espacios del nombre la cadena queda vacía
    if (nombre.trim() == "") {
        alert('El nombre es obligatorio.');
        correcto = false;
    }

    // comprobación de tipo numérico y rango permitido [1, 10] de nota1, nota2
    if (!Number.isInteger(nota1) || (nota1 < 1 || nota1 > 10)) {
        alert('La nota 1 debe ser un número entre el 1 y el 10');
        correcto = false;
    }

    if (!Number.isInteger(nota2) || (nota2 < 1 || nota2 > 10)) {
        alert('La nota 2 debe ser un número entre el 1 y el 10');
        correcto = false;
    }

    // comprobación de tipo numérico y rango permitido [0, ) de faltas
    if (!Number.isInteger(faltas) || faltas < 0) {
        alert('La cantidad de faltas debe ser un número de 0 en adelante');
        correcto = false;
    }

    // comprobación de un email con requisitos mínimos
    if (!email.match(expresionEmail)) {
        alert('La dirección de correo es inválida');
        correcto = false;
    }


    // si han ido bien todas las comprobaciones se devuelve al
    // punto de la llamada TRUE y procede a realizar el envío al
    // servidor, y sino se devuelve FALSE e interrumpe el envío de datos al servidor
    return correcto;

}