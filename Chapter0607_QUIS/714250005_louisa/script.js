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

const waNumber = "6282172619903";

// Fungsi untuk mengirim pesan WhatsApp
function sendToWhatsApp(paket, harga) {
    const message = `Halo, saya tertarik dengan paket ${paket} (Rp ${harga}). Bisa jelaskan lebih lanjut?`;
    const url = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;

    window.open(url, "_blank");
}

// Add event listener for buy button
document.addEventListener('DOMContentLoaded', () => {
    const buyBtn = document.getElementById('buyTicketBtn');
    if (buyBtn) {
        buyBtn.addEventListener('click', () => {
            sendToWhatsApp('Presale', 150000);
        });
    }
});
