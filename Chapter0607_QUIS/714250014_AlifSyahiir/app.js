// Data Kursus
const courses = [
    { title: "Web Development", teacher: "Budi", price: "Rp 120.000", category: "Web Development" },
    { title: "UI/UX Design", teacher: "Amanda", price: "Rp 150.000", category: "UI/UX Design" },
    { title: "Digital Marketing", teacher: "Fajar", price: "Rp 100.000", category: "Digital Marketing" },
    { title: "Data Science", teacher: "Rina", price: "Rp 200.000", category: "Data Science" },
];

const courseList = document.getElementById("course-list");
const searchInput = document.getElementById("searchInput");
const categoryFilter = document.getElementById("categoryFilter");

function renderCourses(filteredData) {
    courseList.innerHTML = "";
    filteredData.forEach(course => {
        const card = document.createElement("div");
        card.className = "course-card";
        card.innerHTML = `
            <h3>${course.title}</h3>
            <p>Kategori: ${course.category}</p>
            <p>Mentor: ${course.teacher}</p>
            <strong>${course.price}</strong>
        `;
        courseList.appendChild(card);
    });
}

renderCourses(courses);

// Filter Mechanism
function filterCourses() {
    const keyword = searchInput.value.toLowerCase();
    const category = categoryFilter.value;

    const filtered = courses.filter(course =>
        (category === "all" || course.category === category) &&
        course.title.toLowerCase().includes(keyword)
    );

    renderCourses(filtered);
}

searchInput.addEventListener("input", filterCourses);
categoryFilter.addEventListener("change", filterCourses);


// Rating System
const stars = document.getElementById("starRating");
const ratingText = document.getElementById("ratingText");
let currentRating = 0;

for (let i = 1; i <= 5; i++) {
    const star = document.createElement("span");
    star.innerHTML = "★";
    star.dataset.value = i;

    star.addEventListener("mouseover", () => highlight(i));
    star.addEventListener("click", () => setRating(i));
    star.addEventListener("mouseleave", () => highlight(currentRating));

    stars.appendChild(star);
}

function highlight(rating) {
    const starElements = document.querySelectorAll("#starRating span");
    starElements.forEach((star, index) => {
        star.style.color = index < rating ? "gold" : "#999";
    });
}

function setRating(value) {
    currentRating = value;
    ratingText.textContent = `Anda memberi rating ${value} bintang.`;
}

// FAQ Accordion
const accordions = document.querySelectorAll(".accordion-btn");

accordions.forEach(button => {
    button.addEventListener("click", () => {
        const content = button.nextElementSibling;
        content.style.maxHeight = content.style.maxHeight ? null : content.scrollHeight + "px";
    });
});
// Dark Mode Toggle
const toggle = document.getElementById("darkModeToggle");

toggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    toggle.textContent = document.body.classList.contains("dark") ? "mode gelap" : "mode terang";
});
