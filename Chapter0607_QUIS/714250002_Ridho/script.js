// script.js - final integration

document.addEventListener('DOMContentLoaded', () => {
  renderRatings();
  setupAccordion();
  setupSmoothScroll();
  setupCTA();
  initFadeIn();
});

/* ===== RENDER RATING (minimal markup) ===== */
function renderRatings(){
  document.querySelectorAll('.rating').forEach(el => {
    const score = Number(el.dataset.rating) || 0;
    el.innerHTML = ''; // reset
    for (let i = 1; i <= 5; i++) {
      const span = document.createElement('span');
      span.className = 'star';
      span.textContent = i <= score ? '★' : '☆';
      el.appendChild(span);
    }
    el.setAttribute('aria-label', `Rating ${score} dari 5`);
  });
}

/* ===== ACCORDION ===== */
function setupAccordion(){
  document.querySelectorAll('.accordion-item').forEach(item => {
    const btn = item.querySelector('.accordion-header');
    const content = item.querySelector('.accordion-content');

    btn.addEventListener('click', () => {
      const open = item.classList.contains('open');

      // close all
      document.querySelectorAll('.accordion-item.open').forEach(it => {
        it.classList.remove('open');
        it.querySelector('.accordion-content').style.maxHeight = null;
      });

      if (!open) {
        item.classList.add('open');
        content.style.maxHeight = content.scrollHeight + 'px';
      } else {
        item.classList.remove('open');
        content.style.maxHeight = null;
      }
    });
  });
}

/* ===== SMOOTH SCROLL FOR ANCHORS ===== */
function setupSmoothScroll(){
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const href = a.getAttribute('href');
      if (!href || href === '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
}

/* ===== CTA BUTTON ===== */
function setupCTA(){
  document.querySelectorAll('.cta').forEach(btn => {
    btn.addEventListener('click', () => {
      window.location.href = 'https://wa.me/6282177737844';
    });
  });
}

/* ===== FADE-IN ON SCROLL ===== */
function initFadeIn(){
  const els = document.querySelectorAll('.fade-in');
  if (!els.length) return;
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, {threshold: 0.18});
  els.forEach(el => observer.observe(el));
}
