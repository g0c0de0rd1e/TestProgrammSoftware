// script.js
document.querySelector('.info-button').addEventListener('click', function() {
    const infoMenu = document.querySelector('.info-menu');
    if (infoMenu.style.left === '0px') {
        infoMenu.style.left = '-300px';
    } else {
        infoMenu.style.left = '0px';
    }
});
