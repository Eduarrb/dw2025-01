/* 🔥🔥 TEMPLATE STRINGS 🔥🔥 */

const nombre = 'Pedrito';
const apellido = "Condor";
let edad = 34;

// una cadena de texto con estos datos;

const datosCompletos = 'Hola, soy ' + nombre + ' ' + apellido + ' y tengo ' + edad + ' años';
// console.log(datosCompletos);

const res = `Hola, soy ${nombre} ${apellido} y tengo ${edad} años`;
// console.log(res);

const bloque = document.querySelector('.bloque');
// console.log(bloque);
let plantilla = `
    <ul>
        <li>${nombre}</li>
        <li>${apellido}</li>
    </ul>
`;

bloque.innerHTML = plantilla;