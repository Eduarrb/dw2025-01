/* 
    ⚡⚡ EJECUCIONES ASINCRONAS ⚡⚡
    NOTA esperan a que termine su proceso
*/
// setInterval(() => {
//     console.log('hiciste una peticion');
// }, 3000);


/* 
    ⚡⚡ EJECUCIONES SINCRONAS ⚡⚡
*/

let nombre = 'John Smith';
// console.log(nombre);

const saludar = () => {
    console.log('hola mundo');
}
// saludar();


const array = ['juan', 'pepito'];
// console.log(array);

// fetch('data/usuarios.json')
fetch('https://pokeapi.co/api/v2/pokemon/ditto')
    .then(
        async function(res){
            // console.log(res);
            let data = await res.json();
            console.log(data);
        }
    )
    .catch(
        function(error) {
            console.log(error);
        }
    )