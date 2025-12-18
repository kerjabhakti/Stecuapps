// Dynamic Stars
document.querySelectorAll('.stars').forEach(starContainer => {
    const rating = parseFloat(starContainer.dataset.rating);
    starContainer.innerHTML = '';
    for (let i = 1; i <= 5; i++) {
        const star = document.createElement('i');
        star.className = i <= rating ? 'fas fa-star' : 'far fa-star';
        starContainer.appendChild(star);
    }
});

// Accordion
document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        const isOpen = content.style.maxHeight;
        document.querySelectorAll('.accordion-content').forEach(c => c.style.maxHeight = null);
        if (!isOpen) {
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    });
});
