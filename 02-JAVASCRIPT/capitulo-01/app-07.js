// ⚡⚡ OBJETOS ⚡⚡

/*
    lOS OBEJTOS SON ELEMENTOS QUE CONTIENEN CARACTERISTICAS Y PROPIEDADES

    key - value pair

*/
// let owner = 'Doña Mamá';

// function traerDueños() {

// }

const felino = {
    patas: 4,
    color: 'Atigrado',
    raza: 'Siames',
    sexo: 'macho',
    tipo: 'carnivo',
    edad: 1,
    owners: ['Juan', 'Karina'],
    datos: {
        nombre: 'Manchitas',
        address: 'Paseo la republica 456'
    }
}

// console.log(felino);
// console.log(felino.raza);
// console.log(felino.edad);

// ⚡⚡ Metodos

const usuario = {
    dni: '12345678',
    correo: 'mario@gmail.com',
    nombre: 'Mario',
    fechaNac: 1996,
    IniciarSesion: function() {
        console.log(`${usuario.nombre} bienvenido a la aplicacion`);
    }
}

// console.log(usuario.nombre);
// usuario.IniciarSesion();

// 🔥🔥 PALABRA RESERVADA "THIS"
// let plantilla = '';

const personaje = {
    nombre: 'Joshi',
    correo: 'joshi@nintendo.com',
    skills: [
        'saltar',
        'comer tortugas',
        'pisar enemigos'
    ],
    plantilla: '',
    saltar: function() {
        // THIS hace referencia al objeto en el cual se este ejecutando
        console.log(`${this.nombre} dió un salto`); // personaje
    },
    golpear: () => {
        // 💥 no funciona la palabra reservada this en un arrow function dentro de un objeto
        // aqui el this hace referencia al objeto global window
        console.log(`${this.nombre} dio un golpe`);
    },
    listarSkills: function() {
        // console.log(this.skills)
        for(let i = 0; i < this.skills.length; i++) {
            console.log(this.skills[i]);
        }
    },
    crearPlantillaSkill: function() {
        for(let i = 0; i < this.skills.length; i++) {
            this.plantilla += `<h2>${this.skills[i]}</h2>`;
        }
    },
    printPlantilla: function(bloque) {
        // console.log(this.plantilla);
        bloque.innerHTML = this.plantilla;
    }
}

const bloque = document.querySelector('.bloque');
personaje.crearPlantillaSkill();
personaje.printPlantilla(bloque);

// console.log(personaje.plantilla);

// personaje.golpear();


// console.log(bloque);

// console.log(this);

// bloque.addEventListener('click', function(){
//     console.log(this);
// })

// bloque.addEventListener('click', () => {
//     console.log(this);
// })

// personaje.listarSkills();

// console.log(this); // hace referencia al objeto global = window

// personaje.golpear();

// function regularThis() {
//     console.log(this); // window
// }

// regularThis();

// const arrowThis = () => {
//     console.log(this);
// }

// arrowThis();

