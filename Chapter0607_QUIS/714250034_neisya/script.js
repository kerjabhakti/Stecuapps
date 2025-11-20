// JavaScript untuk Rating Bintang Dinamis
document.querySelectorAll('.stars').forEach(function(starsContainer) {
    const rating = parseFloat(starsContainer.getAttribute('data-rating'));
    const fullStars = Math.floor(rating);
    const halfStar = rating % 1 !== 0;
    let starsHTML = '';

    for (let i = 0; i < 5; i++) {
        if (i < fullStars) {
            starsHTML += '★'; // Full star
        } else if (i === fullStars && halfStar) {
            starsHTML += '☆'; // Half star (simple, can use CSS for better half)
        } else {
            starsHTML += '☆'; // Empty star
        }
    }
    starsContainer.innerHTML = starsHTML;
});

// JavaScript untuk Accordion FAQ
function toggleAccordion(header) {
    const content = header.nextElementSibling;
    const isOpen = content.style.maxHeight;

    // Close all accordions
    document.querySelectorAll('.accordion-content').forEach(function(cont) {
        cont.style.maxHeight = null;
    });
    document.querySelectorAll('.accordion-header span').forEach(function(span) {
        span.textContent = '+';
    });

    // Open clicked one
    if (!isOpen) {
        content.style.maxHeight = content.scrollHeight + 'px';
        header.querySelector('span').textContent = '-';
    }
}

// Simple fade-in on scroll (optional enhancement)
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
});
document.querySelectorAll('.course-card').forEach(card => observer.observe(card));