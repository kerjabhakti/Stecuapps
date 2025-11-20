// Dynamic Star Rating
function createStars(rating) {
    const starContainer = document.createElement('div');
    starContainer.className = 'stars';
    for (let i = 1; i <= 5; i++) {
        const star = document.createElement('span');
        star.className = 'star';
        star.innerHTML = i <= rating ? '★' : '☆';
        starContainer.appendChild(star);
    }
    return starContainer;
}

function initializeRatings() {
    const ratingElements = document.querySelectorAll('.rating');
    ratingElements.forEach(element => {
        const rating = parseInt(element.getAttribute('data-rating'));
        element.appendChild(createStars(rating));
    });
}

// Accordion FAQ
function initializeAccordion() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const isOpen = content.style.maxHeight;

            // Close all other accordions
            document.querySelectorAll('.accordion-content').forEach(item => {
                item.style.maxHeight = null;
            });

            // Open clicked accordion
            if (!isOpen) {
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        });
    });
}

// Smooth scrolling for navigation links
function initializeSmoothScroll() {
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}

// Initialize all functions when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeRatings();
    initializeAccordion();
    initializeSmoothScroll();
});
