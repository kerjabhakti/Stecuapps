// ========== RATING / REVIEW (BINTANG DINAMIS) ==========
document.addEventListener('DOMContentLoaded', function() {
      const stars = document.querySelectorAll('.star');
      const ratingDisplay = document.getElementById('rating-display');
      let currentRating = 0;
      stars.forEach(star => {
        star.addEventListener('click', function() {
          currentRating = parseInt(this.getAttribute('data-value'));
          updateStars(currentRating);
          ratingDisplay.textContent = `Current Rating: ${currentRating}`;
        });
        star.addEventListener('mouseover', function() {
          const hoverValue = parseInt(this.getAttribute('data-value'));
          updateStars(hoverValue);
        });
        star.addEventListener('mouseout', function() {
          updateStars(currentRating);
        });
      });
      function updateStars(rating) {
        stars.forEach(star => {
          const starValue = parseInt(star.getAttribute('data-value'));
          if (starValue <= rating) {
            star.classList.add('filled');
          } else {
            star.classList.remove('filled');
          }
        });
    }
});

// ========== FAQ ACCORDION ==========
document.querySelectorAll(".faq-item").forEach((item) => {
    const question = item.querySelector(".faq-question");
    const answer = item.querySelector(".faq-answer");

    question.addEventListener("click", () => {
        const isOpen = item.classList.contains("open");

        // Tutup semua FAQ
        document.querySelectorAll(".faq-item").forEach((i) => {
            i.classList.remove("open");
            i.querySelector(".faq-answer").style.maxHeight = null;
        });

        // Buka jika belum terbuka
        if (!isOpen) {
            item.classList.add("open");
            answer.style.maxHeight = answer.scrollHeight + "px";
        }
    });
});
