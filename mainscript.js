
document.addEventListener('DOMContentLoaded', ()=> {
   const nav = document.getElementById ('nav');
   const menu = document.getElementById('menu');

menu && menu.addEventListener('click', () => nav.classList.toggle('active'));

});
