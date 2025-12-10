/* ACCORDION */
const acc = document.querySelectorAll(".accordion");

acc.forEach(button => {
    button.addEventListener("click", () => {
        const panel = button.nextElementSibling;
        panel.style.display = panel.style.display === "block" ? "none" : "block";
    });
});

/* SIMPLE SCROLL REVEAL */
const reveals = document.querySelectorAll(".reveal");

window.addEventListener("scroll", () => {
    reveals.forEach(el => {
        const rect = el.getBoundingClientRect().top;
        if (rect < window.innerHeight - 50) {
            el.classList.add("active");
        }
    });
});
