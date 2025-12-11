document.querySelectorAll(".counter-btn").forEach(button => {
    button.addEventListener("click", function () {

        const card = this.closest(".card");                 
        const qtyInput = card.querySelector(".qty-input");  
        let current = parseInt(qtyInput.value);
        const type = this.getAttribute("data-type");

        if (type === "plus") {
            qtyInput.value = current + 1;
        } else if (type === "minus" && current > 1) {
            qtyInput.value = current - 1;
        }
    });
});
