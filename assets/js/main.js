// Menu Hamburger

const menuHamburger = document.querySelector(".menu_burger");
const navLinks = document.querySelector(".navlinks");

console.log(menuHamburger);
console.log(navLinks);

menuHamburger.addEventListener('click',()=>{
  navLinks.classList.toggle('mobile-menu')
})

// Slide des cartes

const slides = document.querySelectorAll('.slide');

slides.forEach((slide, index) => {
  slide.style.animationDelay = `${index * 0.6}s`;
});

// Apparition des prix au clic

const silverPrice= document.getElementById('silver_price');

silverPrice.addEventListener('click', () => {
  silverPrice.textContent = '50.000 GNF';
});

const goldPrice= document.getElementById('gold_price');

goldPrice.addEventListener('click', () => {
  goldPrice.textContent = '120.000 GNF';
});

const premiumPrice= document.getElementById('premium_price');

premiumPrice.addEventListener('click', () => {
  premiumPrice.textContent = '250.000 GNF';
});
