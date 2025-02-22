// ⚡⚡ ARROW FUNCTIONS ⚡⚡
// saludo();

function saludo() {
    console.log('hola a todos');
}

// saludar();
const saludar = () => {
    console.log('Hola mundo');
}

saludar();

const sumar = (a, b) => {
    return a + b;
}

// console.log(sumar(2, 3));

const saludar2 = nombre => {
    return `Hola ${nombre}`;
}
console.log(saludar2('Piero'));

const saludar3 = nombre => `Hola ${nombre}`;

console.log(saludar3('Sandra'));