

// const obtenerJson = async (nombrePokemon) => {
//     try {
//         const res = await axios.get(`https://pokeapi.co/api/v2/pokemon/${nombrePokemon}`);
//         return res.data;
//     } catch (error) {
//         console.log(error);
//     }
// }

// const imprimirPokemon = async nombrePokemon => {
//     const pokemon = await obtenerJson(nombrePokemon)
//     console.log(pokemon);
// }

const form = document.querySelector('form');
const pokeNombre = document.querySelector('input[type=text]');
const pokeData = document.querySelector('.pokeData');
const nombreTitulo = document.querySelector('h2');
const pokeImagen = document.querySelector('.pokeImagen');

form.addEventListener('submit', async (e) => {
    e.preventDefault();

    // imprimirPokemon(pokeNombre.value);
    try {
        // const respuesta = await axios.get(`https://pokeapi.co/api/v2/pokemon/${pokeNombre.value}`);
        const respuesta = await axios.get(`https://dragonball-api.com/api/characters?name=goku`);
        const pokemon = respuesta.data;
        console.log(pokemon[0]);
        // console.log(pokemon.stats[0].base_stat);
        // console.log(pokemon.abilities[0].ability.name);
        // console.log(pokemon.sprites.front_default);
        const pokemonDatos = `
            <ul>
                <li><strong>HP:</strong> ${pokemon.stats[0].base_stat}</li>
                <li><strong>Attack:</strong> ${pokemon.abilities[0].ability.name}</li>
                <li><strong>Defense:</strong> 35</li>
                <li><strong>Special-Attack:</strong> 35</li>
                <li><strong>Special-Defense:</strong> 35</li>
                <li><strong>Speed:</strong> 35</li>
            </ul>
        `;

        // console.log(pokemonDatos);

        pokeData.innerHTML = pokemonDatos;
        nombreTitulo.textContent = pokemon.name;
        const img = `<img src="${pokemon.sprites.front_default}" alt="">`;
        pokeImagen.innerHTML = img;
        pokeNombre.value = '';
    } catch (error) {
        console.log(error);
    }
});

