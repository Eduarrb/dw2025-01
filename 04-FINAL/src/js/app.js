import './modernizr.js';

document.addEventListener('DOMContentLoaded', function () {
	eventListeners();
    darkMode();
});

function eventListeners() {
	const mobileMenu = document.querySelector('.mobile-menu');
	mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}

function darkMode() {
    const preferDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    // console.log(preferDarkMode.matches)
    if(preferDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    preferDarkMode.addEventListener('change', function() {
        if(preferDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    })

    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    })
}