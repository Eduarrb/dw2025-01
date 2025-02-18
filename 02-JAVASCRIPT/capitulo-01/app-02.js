/* 🔥🔥 NUMBERS 🔥🔥 */

let pi = 3.1416;
let radio = 8;

// como se obtiene la circunferencia?

let cir = pi * radio ** 2;
// console.log(cir);

let num1 = 12;
let num2 = 36;

let res = num1 + num2;
// console.log(typeof('48'));
// console.log(typeof(res));

// console.log('48');
// console.log(res);

let numString = "2025";
let num3 = 125;

// console.log(numString + num3); //2025125

/*
    LEYENDA
    NMA => NUMERO MAS ALTO
*/

let numMasAlto = 787545;

/*
    OPERADORES

    = -> asignacion
    == -> igualdad simple
    === -> igualdad stricta
    != -> diferente simple
    !== -> diferente estricto
    +
    -
    *
    /
    <
    >
    <=
    >=
    %
*/

let num4 = 14;
let num5 = 2;

let res2 = num4 % num5;
// console.log(res2);

// true ----> verdadero
// condicionales
if(num4 % num5 == 0) {
    // console.log('es par');
} else {
    // console.log('es impar');
}

let num6 = 10;
// aumentar en 3

// num6 = num6 + 3;
num6 += 3; // 13
num6 += 5; // num6 = num6 + 5 => 18;
num6 -= 1 // 17
num6 *= 2; // 34
num6 /= 3; // 11.3333334
// console.log(num6.toFixed(2));

// adicion y sustracion de unidad
num6 = 2;
// console.log(num6);
num6++;
num6++;
// console.log(num6);
num6--;
// console.log(num6);
// num6**; no funciona ni la division 💥💥💥

// OBJETO DE CLASE MATH

let aleatorio = Math.random();
//console.log(aleatorio); // 0.000000001 a 0.99999999999

let num7 = 10.5;
// redondear
let res4 = Math.floor(num7);
console.log(res4);

let res5 = Math.ceil(num7);
console.log(res5);

let res6 = Math.round(num7);
console.log(res6);