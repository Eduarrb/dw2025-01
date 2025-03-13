const form = document.querySelector('form');
const inputText = document.querySelector('input[type=text]');
const alerta = document.querySelector('.alerta');
const contenedor = document.querySelector('.contenedor');
// const personaje = document.querySelector('.personaje');

form.addEventListener('submit', async e => {
    e.preventDefault();
    if(inputText.value === '') {
        alerta.textContent = 'Debes ingresar un nombre en la busqueda';
    } else {
        alerta.textContent = '';
        try {
            if(document.querySelector('.personaje')) {
                // console.log('exite');
                document.querySelector('.personaje').remove();
            }
            const res = await axios.get(`https://dragonball-api.com/api/characters?name=${inputText.value}`);
            // console.log(res.data);
            const personaje = res.data[0];
            // console.log(personaje);
            
            const plantilla = `
                <div class="personaje">
                    <img src="${personaje.image}" alt="">
                    <div class="datos">
                        <div>
                            <strong>Nombre: </strong> ${personaje.name}
                        </div>
                        <div>
                            <strong>Base Ki: </strong> ${personaje.ki}
                        </div>
                        <div>
                            <strong>Total Ki: </strong> ${personaje.maxKi
                            }
                        </div>
                        <div>
                            <strong>Raza: </strong> ${personaje.race}
                        </div>
                    </div>
                </div>
            `;
            // console.log(plantilla);
            contenedor.insertAdjacentHTML('beforeend', plantilla);
            setTimeout(function(){
                console.log('hola');
                document.querySelector('.personaje').classList.add('mostrar');
            }, 500)
            inputText.value = '';
        } catch (error) {
            console.log(error);
        }
    }
})