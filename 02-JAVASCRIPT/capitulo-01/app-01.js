/*
    JAVASCRIPT

    - Es un lenguaje de bajo nivel
    - Se ejecuta del lado del cliente o desde el mismo navegador
    - KEY SENSITIVE 
        imagenBox !== imagenbox
    - No es obligatorio el uso del punto y coma al final de cada linea de codigo PERO, se recomienda usarlos como buena práctica.
    - JavaScript es un lenguaje basado en objetos
    - Puede manipular el DOM => Document Object Model => todo el HTML
*/

/*
    TIPOS DE DATOS
    --------------

    - Strings => cadena de texto
    - Numbers
    - Booleans 
    - Objects {}
*/

// 1️⃣ STRINGS O CADENAS DE TEXTO

// ES5
// "var"
// = Asignacion
/*
var nombre = 'John Smith';
var num = 1;
var bool = true;
var array = [];
var obj = {};
*/

// ES6
// LET & CONST
// let nombre = 'Karina'; // 0x00562 = karina
// console.log(nombre);
// nombre = 'Sofia'; // 0x00562 = sofia
// console.log(nombre);
// nombre = 1;
// console.log(nombre);

// const apellido = 'Casas'; // 0x00896 = casas
// console.log(apellido);
// apellido = 1;             // 0x00896 = 1 💥💥💥💥
// console.log(apellido);

// let nom1 = 'Marco';
// let nom2 = 'María';
// /*
// asdsa
// sadsa
// sadsa
// asd
// asd
// */

// nom1 = 'Pedrito';
            //012345
let nombre = 'Karina';
let apellido = 'Rodriguez';

// CONCATENAR
// el signo + en js sirve tanto para concatenar como para sumar

// console.log(nombre + apellido);
let nombreCompleto = nombre + ' ' + apellido;
console.log(nombreCompleto);

console.log(nombre.length);
console.log(nombre[0]); // tener cuidado con arrays -> indices inician en 0
console.log(nombre[5]);

let saludo = 'hola mundo desde javascript';
console.log(saludo[26]);

let lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque in voluptatem voluptate? Excepturi voluptas vitae dicta asperiores beatae numquam optio saepe facilis. Molestias animi pariatur asperiores natus veritatis nisi, ducimus impedit, odio cumque libero doloremque, mollitia voluptatibus. Sunt, eius? Quae, quas unde temporibus illo quis pariatur enim mollitia, tempora impedit expedita nobis similique ratione at?';
console.log(lorem[lorem.length - 1]);
console.log(lorem[Math.ceil(lorem.length / 2 - 1)]);

let nombre2 = 'Mario';
let apellido2 = 'Valencia';
let dominio = '@continental.edu.pe';

// -> mvalencia@continental.edu.pe

let correo = nombre2[0] + apellido2 + dominio;
console.log(correo.toLowerCase());
console.log(correo.toUpperCase());
console.log((nombre2[0] + apellido2 + dominio).toLocaleLowerCase());
