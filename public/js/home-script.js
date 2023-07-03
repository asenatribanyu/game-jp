// Navigation Bar
const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('.navbar ul');

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('active');
});
// End of Navigation Bar