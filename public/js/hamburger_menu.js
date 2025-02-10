const sidebar = document.getElementById('hamburger_sidebar');
const hamburger = sidebar.querySelector('.hamburger_menu > input');


hamburger.addEventListener("click", (e) => {
    sidebar.style.left = hamburger.checked ? "0" : "-15vw"; 
});