// Rating bintang dinamis
const stars = document.querySelectorAll(".rating span");
let selectedRating = 0;

function clearHover() {
  stars.forEach((star) => {
    if (!star.classList.contains("selected")) {
      star.classList.remove("hover");
    }
  });
}

stars.forEach((star, idx) => {
  star.addEventListener("mouseenter", () => {
    stars.forEach((s, i) => {
      if (i <= idx) s.classList.add("hover");
      else s.classList.remove("hover");
    });
  });

  star.addEventListener("mouseleave", clearHover);

  star.addEventListener("click", () => {
    selectedRating = idx + 1;
    stars.forEach((s, i) => {
      if (i < selectedRating) {
        s.classList.add("selected");
        s.setAttribute("aria-checked", "true");
        s.setAttribute("tabindex", "0");
      } else {
        s.classList.remove("selected");
        s.setAttribute("aria-checked", "false");
        s.setAttribute("tabindex", "-1");
      }
      clearHover();
    });
    alert(`Terima kasih atas rating ${selectedRating} bintang!`);
  });

  star.addEventListener("keydown", (e) => {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      star.click();
    }
  });
});

// Accordion FAQ
const faqQuestions = document.querySelectorAll(".faq-question");
faqQuestions.forEach((q) => {
  q.addEventListener("click", () => {
    const answer = q.nextElementSibling;
    const isOpen = answer.classList.contains("open");

    // tutup awalan
    faqQuestions.forEach((item) => {
      item.classList.remove("active");
      item.nextElementSibling.classList.remove("open");
    });

    if (!isOpen) {
      answer.classList.add("open");
      q.classList.add("active");
    }
  });

  q.addEventListener("keydown", (e) => {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      q.click();
    }
  });
});
