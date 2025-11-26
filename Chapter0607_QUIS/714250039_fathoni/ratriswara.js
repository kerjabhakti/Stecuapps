// JavaScript for Ratri Swara Retro Concert Website

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

// Accordion for Lineup schedule
const accordions = document.querySelectorAll('.accordion');

accordions.forEach(acc => {
    acc.addEventListener('click', () => {
        acc.classList.toggle('active');
        let panel = acc.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
});

// Popup Ticket Form
const ticketButtons = document.querySelectorAll('.ticket-btn');
const popup = document.querySelector('.ticket-popup');
const closePopup = document.querySelector('.close-popup');

if (ticketButtons) {
    ticketButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            popup.classList.add('show');
        });
    });
}

if (closePopup) {
    closePopup.addEventListener('click', () => {
        popup.classList.remove('show');
    });
}

// Fake form submit
document.querySelector('#ticketForm')?.addEventListener('submit', function(e){
    e.preventDefault();
    alert("Tiket berhasil dipesan! Cek email kamu untuk konfirmasi.");
    popup.classList.remove('show');
    this.reset();
});