// FAQ Accordion
document.querySelectorAll(".faq-item").forEach(item => {
    item.addEventListener("click", () => {
        item.querySelector(".faq-answer").classList.toggle("open");
        item.querySelector(".faq-answer").style.display =
            item.querySelector(".faq-answer").classList.contains("open")
            ? "block" : "none";
    });
});

// Dynamic Rating Stars
document.querySelectorAll(".rating").forEach(r => {
    let rating = parseFloat(r.dataset.rating);
    let stars = "";

    for (let i = 1; i <= 5; i++) {
        stars += `<span style="color:#ffd700; font-size:20px;">${
            i <= rating ? "★" : "☆"
        }</span>`;
    }

    r.innerHTML = stars;
});

// Scroll Animation
const elements = document.querySelectorAll(".fade-in, .fade-slide");

function showElements() {
    elements.forEach(el => {
        const pos = el.getBoundingClientRect().top;
        if (pos < window.innerHeight - 100) {
            el.classList.add("visible");
        }
    });
}
window.addEventListener("scroll", showElements);
showElements();

const searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keyup", function () {
    let filter = searchInput.value.toLowerCase();
    let cards = document.querySelectorAll(".course-card");

    cards.forEach(card => {
        let title = card.querySelector("h3").textContent.toLowerCase();
        
        if (title.includes(filter)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});

const slides = document.querySelector(".slides");
const images = document.querySelectorAll(".slides img");
const dotsContainer = document.querySelector(".dots");

let index = 0;
const total = images.length;

// Membuat titik indikator / dots
for (let i = 0; i < total; i++) {
    const dot = document.createElement("span");
    dot.dataset.index = i;
    dot.onclick = () => goToSlide(i);
    dotsContainer.appendChild(dot);
}

const dots = document.querySelectorAll(".dots span");

// Update slider
function updateSlider() {
    slides.style.transform = `translateX(-${index * 100}%)`;

    dots.forEach(dot => dot.classList.remove("active"));
    dots[index].classList.add("active");
}

// Tombol Next
function nextSlide() {
    index = (index + 1) % total;
    updateSlider();
}

// Tombol Prev
function prevSlide() {
    index = (index - 1 + total) % total;
    updateSlider();
}

// Fungsi ke slide tertentu
function goToSlide(i) {
    index = i;
    updateSlider();
}

// Event tombol
document.querySelector(".next").onclick = nextSlide;
document.querySelector(".prev").onclick = prevSlide;

// Slider otomatis
let autoSlide = setInterval(nextSlide, 3000);

// Pause saat mouse hover
const slider = document.querySelector(".slider");
slider.onmouseenter = () => clearInterval(autoSlide);
slider.onmouseleave = () => autoSlide = setInterval(nextSlide, 3000);

// Jalankan awal
updateSlider();

