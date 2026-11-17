// Animaciones al hacer scroll (AOS)
AOS.init({ duration: 800, once: true });

// Carrusel (Swiper)
new Swiper('.mySwiper', {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  autoplay: { delay: 3500, disableOnInteraction: false },
  pagination: { el: '.swiper-pagination', clickable: true },
  breakpoints: { 768: { slidesPerView: 2 }, 1200: { slidesPerView: 3 } }
});

// Contadores animados
const contadores = document.querySelectorAll('[data-contar]');
const observador = new IntersectionObserver((entradas) => {
  entradas.forEach(e => {
    if (!e.isIntersecting) return;
    const el = e.target, meta = +el.dataset.contar;
    let actual = 0;
    const paso = Math.max(1, Math.ceil(meta / 60));
    const t = setInterval(() => {
      actual = Math.min(meta, actual + paso);
      el.textContent = actual.toLocaleString('es-CO');
      if (actual >= meta) clearInterval(t);
    }, 25);
    observador.unobserve(el);
  });
}, { threshold: .5 });
contadores.forEach(c => observador.observe(c));
