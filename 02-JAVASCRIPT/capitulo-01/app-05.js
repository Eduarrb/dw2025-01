/*
    ⚡⚡ FUNCIONES ⚡⚡ 
    funciones de expresion regular

*/

/*
    - Es un algoritmo donde se pide que se realize una 
    tarea o accion al momento de llamarla o nombrarla

    - TODAS LAS EJECUCIONES QUE ESTAMOS VIENDO SON SINCRONAS
*/


let nombre = 'Eduardo'; // -> asigna una porcion de memoria usando VAR con let o const nos devuelve un error de inicialización
// console.log(nombre);


function saludar() { // -> asigna una porcion de memoria
	console.log('Hola a todo el mundo');
}

// saludar();


// VARIABLES GLOBALES
let num1 = 10;

// AMBITO, SCOPE O EL CONTEXTO DE UNA FUNCION
// function sumar() {
//     let num2 = 3;
//     let res = num1 + num2;
//     console.log(res);
// }

// sumar(); // 13

// console.log(num1); // 10

// global
let apellido = 'Arroyo';
// console.log(apellido);

function nombrar() {
    // interna del ambito, del scope
    // let apellido = 'Rodriguez';
    apellido = 'lozano';
    console.log(apellido);
}

// nombrar(); //
// console.log(apellido); //

// ⚡⚡ PARAMETROS Y ARGUMENTOS

function sumarDosNumeros(num1, num2) {
    let res = num1 + num2;
    console.log(res);
}

sumarDosNumeros(2, 5);
// sumarDosNumeros();

const fechaNac = 1970;

function calcEdad(fechaNac) {
    const edad = 2025 - fechaNac;
    // console.log(edad);
}

// calcEdad(1996);
calcEdad(fechaNac);

function saludar2(nombre, ciudad, estadoCivil = 'No se sabe') {
    let saludo = `Hola, mi nombre es ${nombre}, soy de la ciudad de ${ciudad} y mi estado civil es: ${estadoCivil}`;
    // console.log(saludo);
}

saludar2('John', 'Arequipa', 'Casado');

saludar2('Paola', 'Piura');

// ⚡⚡ RETURN
function multi (num1, num2) {
    let res = num1 * num2;
    return res; // solo se puede retornar un solo valor como tipo de dato
}

multi(2, 8); // ha retorando el valor de la multiplicacion
// console.log(multi(3,9));
let retorno = multi(3, 8);
// console.log(retorno);

function restar (a, b) {
    return a - b;
}

// console.log(restar(10, 3));


function saludar3(nombre, ciudad, estadoCivil = 'No se sabe') {
    return `Hola, mi nombre es ${nombre}, soy de la ciudad de ${ciudad} y mi estado civil es: ${estadoCivil}`;
}

console.log(saludar3('Felipe', 'Huancayo', 'Soltero'));