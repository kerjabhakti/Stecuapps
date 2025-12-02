let ratings = document.querySelectorAll('.rating');

ratings.forEach(function(rateBox) {
  let stars = rateBox.querySelectorAll('.star');

  // Set rating awal
  let initialRate = parseInt(rateBox.getAttribute('data-rate')) || 0;
  stars.forEach((s, i) => {
    if (i < initialRate) s.classList.add('active');
  });

  stars.forEach(function(star, index) {

    // Hover preview
    star.addEventListener('mouseover', function() {
      stars.forEach(function(s, i) {
        s.classList.toggle('hover', i <= index);
      });
    });

    // Hapus hover
    rateBox.addEventListener('mouseout', function() {
      stars.forEach(s => s.classList.remove('hover'));
    });

    // Klik untuk memilih rating
    star.addEventListener('click', function() {
      rateBox.setAttribute('data-rate', index + 1);

      stars.forEach(function(s, i) {
        s.classList.toggle('active', i <= index);
      });
    });
  });
});

// ==== FAQ TOGGLE ====
let faqQuestions = document.querySelectorAll(".faq-question");

faqQuestions.forEach(q => {
  q.addEventListener("click", function () {
    let answer = this.nextElementSibling;

    // toggle tampil / hilang
    if (answer.style.display === "block") {
      answer.style.display = "none";
    } else {
      answer.style.display = "block";
    }
  });
});