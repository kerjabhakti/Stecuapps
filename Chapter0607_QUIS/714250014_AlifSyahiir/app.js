// Data Kursus
const courses = [
    { title: "Full Stack Web Development (MERN)", teacher: "Budi", price: "Rp 120.000", category: "Web Development" },
    { title: "Desain UI/UX dengan Figma", teacher: "Amanda", price: "Rp 150.000", category: "UI/UX Design" },
    { title: "Strategi Digital Marketing 2024", teacher: "Fajar", price: "Rp 100.000", category: "Digital Marketing" },
    { title: "Pengantar Data Science & Python", teacher: "Rina", price: "Rp 200.000", category: "Data Science" },
    { title: "Fundamental HTML & CSS", teacher: "Siska", price: "Rp 80.000", category: "Web Development" },
    { title: "Advanced JavaScript", teacher: "Dino", price: "Rp 180.000", category: "Web Development" },
];

const courseList = document.getElementById("course-list");
const searchInput = document.getElementById("searchInput");
const categoryFilter = document.getElementById("categoryFilter");

/* --- FUNGSI RENDER DAN FILTER KURSUS --- */

function renderCourses(filteredData) {
    courseList.innerHTML = "";
    if (filteredData.length === 0) {
        courseList.innerHTML = "<p style='grid-column: 1 / -1; color: #6c757d;'>Maaf, tidak ada kursus yang ditemukan.</p>";
        return;
    }

    filteredData.forEach(course => {
        const card = document.createElement("div");
        card.className = "course-card";
        card.innerHTML = `
            <h3>${course.title}</h3>
            <p>Kategori: <strong>${course.category}</strong></p>
            <p>Mentor: ${course.teacher}</p>
            <strong>${course.price}</strong>
        `;
        courseList.appendChild(card);
    });
}

// Inisialisasi tampilan kursus
renderCourses(courses);

// Filter Mechanism
function filterCourses() {
    const keyword = searchInput.value.toLowerCase().trim();
    const category = categoryFilter.value;

    const filtered = courses.filter(course =>
        // Filter berdasarkan kategori
        (category === "all" || course.category === category) &&
        // Filter berdasarkan kata kunci di judul atau mentor
        (course.title.toLowerCase().includes(keyword) || course.teacher.toLowerCase().includes(keyword))
    );

    renderCourses(filtered);
}

searchInput.addEventListener("input", filterCourses);
categoryFilter.addEventListener("change", filterCourses);


/* --- SISTEM RATING (BINTANG) --- */
const starsContainer = document.getElementById("starRating");
const ratingText = document.getElementById("ratingText");
let currentRating = 0;

for (let i = 1; i <= 5; i++) {
    const star = document.createElement("span");
    star.innerHTML = "★";
    star.dataset.value = i;

    star.addEventListener("mouseover", () => highlight(i));
    star.addEventListener("click", () => setRating(i));
    // Mengembalikan ke rating saat ini jika mouse keluar
    star.addEventListener("mouseleave", () => highlight(currentRating));

    starsContainer.appendChild(star);
}

function highlight(rating) {
    const starElements = document.querySelectorAll("#starRating span");
    starElements.forEach((star, index) => {
        // Bintang berwarna emas jika index kurang dari rating
        star.style.color = index < rating ? "gold" : "#ced4da";
    });
}

function setRating(value) {
    currentRating = value;
    highlight(value); // Pastikan bintang tetap highlight setelah diklik
    ratingText.textContent = `Terima kasih! Anda memberi rating ${value} bintang.`;
}

/* --- FAQ ACCORDION --- */
const accordions = document.querySelectorAll(".accordion-btn");

accordions.forEach(button => {
    button.addEventListener("click", () => {
        const content = button.nextElementSibling;
        
        // Toggle class 'active' pada tombol
        button.classList.toggle("active");

        // Logika untuk membuka/menutup konten
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            content.style.padding = "0 20px"; // Menutup padding
        } else {
            content.style.maxHeight = content.scrollHeight + 30 + "px"; // +30 untuk amannya padding
            content.style.padding = "0 20px 20px 20px"; // Membuka padding
        }
    });
});

/* --- DARK MODE TOGGLE --- */
const toggle = document.getElementById("darkModeToggle");

// Cek preferensi mode gelap dari sistem pengguna
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

function setDarkMode(isDark) {
    if (isDark) {
        document.body.classList.add("dark");
        toggle.innerHTML = '<i class="fas fa-moon"></i> Gelap';
    } else {
        document.body.classList.remove("dark");
        toggle.innerHTML = '<i class="fas fa-sun"></i> Terang';
    }
}

// Inisialisasi mode berdasarkan preferensi sistem atau default (terang)
setDarkMode(prefersDarkScheme.matches);

// Event listener untuk tombol toggle
toggle.addEventListener("click", () => {
    const isDark = document.body.classList.contains("dark");
    setDarkMode(!isDark);
});