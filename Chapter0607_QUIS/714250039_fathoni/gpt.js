// Tabs
const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {
    tabs.forEach(t => t.classList.remove("active"));
    contents.forEach(c => c.classList.remove("active"));
    tab.classList.add("active");
    document.getElementById(tab.dataset.target).classList.add("active");
  });
});

// Accordion
document.querySelectorAll(".acc-head").forEach(head => {
  head.addEventListener("click", () => {
    const body = head.nextElementSibling;
    body.style.display = body.style.display === "block" ? "none" : "block";
  });
});