// 1️⃣ AGREGAR UNA TAREA A LA LISTA
const tareaInput = document.querySelector('.tarea');
const lista = document.querySelector('ul');
const btn = document.querySelector('button');
const alerta = document.querySelector('.alerta');

btn.addEventListener('click', () => {
    // console.log('hiciste click');
    // console.log(tareaInput.value);
    // lista.innerHTML = `<li>${tareaInput.value}</li>`;
    if(tareaInput.value === '') {
        alerta.textContent = 'No debes ingresar una tarea en blanco';
    } else {
        alerta.textContent = '';
        const item = `<li>${tareaInput.value}</li>`;
        lista.insertAdjacentHTML('beforeend', item);
        tareaInput.value = '';
    }
});

// 2️⃣ ELIMINAR UNA TAREA DE LA LISTA AL HACER CLICK (FORMA INCORRECTA)
// const tareasInsertadas = document.querySelectorAll('li'); //nodelist ->muy parecido a un array
// // console.log(tareasInsertadas);
// tareasInsertadas.forEach(function(tarea){
//     // console.log(tarea);
//     tarea.addEventListener('click', function() {
//         // console.log('hiciste click');
//         tarea.remove();
//     })
// })

// 3️⃣ ELIMINAR UNA TAREA DE LA LISTA AL HACER CLICK (FORMA CORRECTA)

lista.addEventListener('click', function(evento){
    // console.log('hiciste click');
    // console.log(evento);
    // console.log(evento.target.tagName);
    // console.log(evento.target.classList);
    // if(evento.target.classList.contains('item')){
    //     evento.target.remove();
    // }
    if(evento.target.tagName === 'LI') {
        evento.target.remove();
    }
})