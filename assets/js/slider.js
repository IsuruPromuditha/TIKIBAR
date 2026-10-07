const slides = document.querySelectorAll('.hero-slide');
let cur = 0;
setInterval(() => {
  slides[cur].classList.add('opacity-0');
  cur = (cur + 1) % slides.length;
  slides[cur].classList.remove('opacity-0');
}, 5000);