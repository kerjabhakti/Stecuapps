// script.js — DOM interactions: accordion, scroll-reveal, ticket actions

document.addEventListener('DOMContentLoaded', () => {
  // ACCORDION
  const accs = document.querySelectorAll('.accordion');
  accs.forEach(acc => {
    acc.addEventListener('click', () => {
      const expanded = acc.getAttribute('aria-expanded') === 'true';
      acc.setAttribute('aria-expanded', String(!expanded));
      const panel = acc.nextElementSibling;
      if (!expanded) {
        panel.style.maxHeight = panel.scrollHeight + 'px';
      } else {
        panel.style.maxHeight = null;
      }
    });
  });

  // SCROLL REVEAL (IntersectionObserver)
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Smooth scrolling for internal links
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click', e=>{
      const href = a.getAttribute('href');
      if(href.length>1){
        e.preventDefault();
        document.querySelector(href).scrollIntoView({behavior:'smooth'});
      }
    })
  })

  // BUY BUTTONS
  document.querySelectorAll('.buy-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const tier = btn.dataset.tier || 'regular';
      // Simple demo action — replace with checkout integration
      const confirmMsg = `Kamu memilih ${tier.toUpperCase()} ticket. Lanjut untuk proses pembayaran?`;
      if (confirm(confirmMsg)) {
        // In a real site, redirect to payment/checkout
        alert('silahkan cek email untuk payment — terimakasih!');
      }
    });
  });
});