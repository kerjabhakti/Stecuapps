 document.querySelectorAll('.stars').forEach(stars => {
    const rating = parseInt(stars.dataset.rating);
    const starElements = stars.querySelectorAll('.star');
    starElements.forEach((star, index) => {
        if (index < rating) {
            star.classList.add('active');
        }
    });
});

        
document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
    });
});

        
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
});

document.querySelectorAll('.course-card').forEach(card => {
    observer.observe(card);
});
