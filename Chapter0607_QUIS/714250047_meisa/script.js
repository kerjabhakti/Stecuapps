/* Accordion */
const accordions = document.querySelectorAll(".accordion-item");

accordions.forEach((btn) => {
    btn.addEventListener("click", () => {
        const content = btn.nextElementSibling;
        content.style.display = 
            content.style.display === "block" ? "none" : "block";
    });
});

/* Scroll Reveal */
const reveals = document.querySelectorAll(".reveal");

function revealOnScroll() {
    reveals.forEach((el) => {
        const windowHeight = window.innerHeight;
        const elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - 80) {
            el.classList.add("show");
        }
    });
}

window.addEventListener("scroll", revealOnScroll);
revealOnScroll();