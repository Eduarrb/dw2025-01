const id = location.search.split("=")[1];

const propiedad = document.querySelector('.propiedad');

axios.get('apiRequest/getAnuncio.php',{
    params: {
        id
    }
})
    .then(res => {
        const item = res.data;
        if(!item) {
            const error = `
                <h2 style="font-size: 10rem">404<h2>
                <div class="text-error">El elemento no exite, vualva a intentarlo con otra propiedad</div>
            `;
            propiedad.innerHTML = error;
        } else {
            const plantilla = `
                <h1>${item.titulo}</h1>
                <picture>
                    <img loading="lazy" src="build/images/${item.imagen}" alt="${item.titulo}">
                </picture>
                <div class="resumen-propiedad">
                    <p class="precio">$${item.precio}</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" class="icono" src="build/img/icono_wc.svg" alt="icono">
                            <p>${item.wc}</p>
                        </li>
                        <li>
                            <img loading="lazy" class="icono" src="build/img/icono_estacionamiento.svg" alt="icono">
                            <p>${item.estacionamiento}</p>
                        </li>
                        <li>
                            <img loading="lazy" class="icono" src="build/img/icono_dormitorio.svg" alt="icono">
                            <p>${item.habitaciones}</p>
                        </li>
                    </ul>
                    <p>${item.descripcion}</p>
                </div>
            `;
            propiedad.innerHTML = plantilla;
        }
    })
    .catch(err => {
        console.log(err);
    })