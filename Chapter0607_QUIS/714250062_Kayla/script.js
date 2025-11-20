// Fade-in animation on scroll
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
});

document.querySelectorAll('.featured-courses, .platform-features, .reviews, .faq').forEach(section => {
    observer.observe(section);
});

// Accordion functionality
document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const isOpen = content.style.maxHeight;

        // Close all others
        document.querySelectorAll('.accordion-content').forEach(item => {
            item.style.maxHeight = null;
        });

        // Toggle current
        if (!isOpen) {
            content.style.maxHeight = content.scrollHeight + 'px';
        }
    });
});

const stars = document.querySelectorAll('.star-rating .star');
    let selectedRating = 0;

    stars.forEach(star => {
      // Hover effect
      star.addEventListener('mouseover', () => {
        highlightStars(star.dataset.value);
      });

      star.addEventListener('mouseout', () => {
        highlightStars(selectedRating);
      });

      // Click to select rating
      star.addEventListener('click', () => {
        selectedRating = star.dataset.value;
        highlightStars(selectedRating);
      });
    });

    function highlightStars(rating) {
      stars.forEach(star => {
        if (star.dataset.value <= rating) {
          star.classList.add('selected');
        } else {
          star.classList.remove('selected');
        }
      });
    }

    document.getElementById('submitRating').addEventListener('click', () => {
      if (selectedRating > 0) {
        document.getElementById('result').textContent = `Thank you! You rated us ${selectedRating} star${selectedRating > 1 ? 's' : ''}.`;
      } else {
        document.getElementById('result').textContent = 'Please select a rating before submitting.';
      }
    });
