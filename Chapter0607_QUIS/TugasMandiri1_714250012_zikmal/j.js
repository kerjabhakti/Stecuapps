 const acc = document.querySelectorAll('.acc-header');
        acc.forEach(h => {
            h.addEventListener('click', () => {
                const content = h.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            });
        });