const btn = document.querySelector('button');
const popupCaja = document.querySelector('.popup-caja');
const btnClose = document.querySelector('.popup-close');

btn.addEventListener('click', () => {
	popupCaja.classList.add('mostrarCaja');
});

btnClose.addEventListener('click', () => {
	popupCaja.classList.remove('mostrarCaja');
});
