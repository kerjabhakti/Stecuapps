// Tab functionality for lineup
document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons and contents
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
        
        // Add active class to clicked button and corresponding content
        button.classList.add('active');
        document.getElementById(button.dataset.tab).classList.add('active');
    });
});

// Scroll reveal for sections
ScrollReveal().reveal('.lineup', { delay: 200, distance: '50px', origin: 'bottom' });
ScrollReveal().reveal('.performers', { delay: 200, distance: '50px', origin: 'left' });
ScrollReveal().reveal('.tickets', { delay: 200, distance: '50px', origin: 'right' });
ScrollReveal().reveal('.footer', { delay: 200, distance: '50px', origin: 'bottom' });

let lastScrollTop = 0;
window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        // Scrolling down: hide header
        document.querySelector('header').classList.add('hidden');
    } else {
        // Scrolling up: show header
        document.querySelector('header').classList.remove('hidden');
    }
    lastScrollTop = scrollTop;
});