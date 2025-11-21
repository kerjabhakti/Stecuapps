const tabButtons = document.querySelectorAll(".tab-btn");
const tabContents = document.querySelectorAll(".content");

tabButtons.forEach(button => {
    button.addEventListener("click", () => {

        tabButtons.forEach(btn => btn.classList.remove("active"));

        button.classList.add("active");

        tabContents.forEach(content => content.classList.remove("active"));

        const target = button.getAttribute("data-target");
        document.getElementById(target).classList.add("active");
    });
});
