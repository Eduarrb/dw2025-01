// ⚡⚡ ARRAYS ⚡⚡

/*
    🔥 TIPO DE OBJETO
    - Lista de elementos
    - Conjunto de elementos separados por comas dentro de un corchete []
*/

const numeros = [12, 56, 78, 154, 458645, 0.3];
// console.log(numeros);
// console.log(numeros[4]);
// console.log(numeros.length)

const personajes = ['Mario', 'Joshi', 'Ryu', 'Ken', 'Zelda'];
// console.log(personajes);
const arrayMixto = ['Eduardo', 10.3, 'abc-123', ['Mario', 'Saltar'], {nombre: 'Pedro'}];
// console.log(arrayMixto);

/*
    🔥 SI ESTA DENTRO DE CORCHETES ES UN ARRAY
    🔥 SI ESTA DENTRO DE LLAVES ES UN OBJETO
*/

// 1️⃣ ITERAR SOBRE LOS ELEMENTOS DE UN ARRAY - LOOPS

         // 5           5 <= 5
// for(let contador = 0; contador < 5; contador++) {
//     console.log(personajes[contador]);
// }

// for(let i = 0; i < personajes.length; i++) {
//     console.log(personajes[i]);
// }

// 🔥 CALLBACK => es una funcion que se ejecuta dentro de otra funcion

let plantilla = '';

personajes.forEach(function(el){
    // console.log(el);
    // plantilla = plantilla + `<div>${el}</div>`;
    plantilla += `<div>${el}</div>`;
});
// console.log(plantilla);

const bloque = document.querySelector('.bloque');
bloque.innerHTML = plantilla;

let e = 0;

while(e < personajes.length) {
    console.log(personajes[e]);
    e++;
}