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
function sumar() {
    let num2 = 3;
    let res = num1 + num2;
    console.log(res);
}

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

nombrar(); //
console.log(apellido); //