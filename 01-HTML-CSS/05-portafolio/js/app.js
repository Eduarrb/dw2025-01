let btnMenu = document.querySelector('.nav__container__iconBox');
let menu = document.querySelector('.nav__container__menu');

btnMenu.addEventListener('click', function(){
    menu.classList.toggle('active');
});