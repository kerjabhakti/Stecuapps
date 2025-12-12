function showPopup() {
    document.getElementById("dark-overlay").style.display = "block";
    document.getElementById("sorkem").style.display = "block";
    document.body.classList.add("modal-open");
}

function hidePopup() {
    document.getElementById("dark-overlay").style.display = "none";
    document.getElementById("sorkem").style.display = "none";
    document.body.classList.remove("modal-open");
}

document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('.fade-up');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, {
        threshold: 0.3
    });

    elements.forEach(el => observer.observe(el));
});
