// Accordion sederhana
const buttons = document.querySelectorAll('.accordion-btn');

buttons.forEach((btn) => {
    btn.onclick = () => {
        const content = btn.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    };
});

// Animasi fade-in sederhana saat scroll
const sections = document.querySelectorAll('section');

function fadeInOnScroll() {
    sections.forEach((sec) => {
        const top = sec.getBoundingClientRect().top;
        if (top < window.innerHeight - 80) {
            sec.style.opacity = 1;
            sec.style.transform = 'translateY(0)';
        }
    });
}

// Set initial state
sections.forEach((sec) => {
    sec.style.opacity = 0;
    sec.style.transform = 'translateY(25px)';
    sec.style.transition = '0.6s ease';
});

window.addEventListener('scroll', fadeInOnScroll);
fadeInOnScroll();
