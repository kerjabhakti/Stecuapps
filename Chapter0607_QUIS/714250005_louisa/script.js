// Accordion
document.querySelectorAll('.accordion-header').forEach(header => {
header.addEventListener('click', () => {
const content = header.nextElementSibling;
content.style.display = content.style.display === 'block' ? 'none' : 'block';
});
});


// Scroll Reveal
function reveal() {
const reveals = document.querySelectorAll('.reveal');
reveals.forEach(el => {
const top = el.getBoundingClientRect().top;
if (top < window.innerHeight - 50) {
el.classList.add('active');
}
});
}
window.addEventListener('scroll', reveal);
reveal();
