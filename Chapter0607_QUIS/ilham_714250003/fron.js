const waNumber = "6285191163819";

// Fungsi untuk mengirim pesan WhatsApp
function sendToWhatsApp(paket, harga) {
    const message = `Halo, saya tertarik dengan paket ${paket} (Rp ${harga}). Bisa jelaskan lebih lanjut?`;
    const url = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
    window.open(url, "_blank");
}

// Fungsi untuk mengubah tab jadwal
function changeTab(day) {
    // Sembunyikan semua konten jadwal
    const contents = document.querySelectorAll('.schedule-content');
    contents.forEach(content => content.classList.remove('active'));

    // Hapus class active dari semua tombol tab
    const buttons = document.querySelectorAll('.tab-button');
    buttons.forEach(button => button.classList.remove('active'));

    // Tampilkan konten yang dipilih dan aktifkan tombol
    document.getElementById(day).classList.add('active');
    event.target.classList.add('active');
}

// Fungsi untuk toggle accordion
function toggleAccordion() {
    this.classList.toggle('active');
    const panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + 'px';
    }
}

// Fungsi untuk efek scroll reveal
function revealOnScroll() {
    const elements = document.querySelectorAll('.scroll-reveal');
    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        if (elementTop < windowHeight - 100) {
            element.classList.add('visible');
        }
    });
}

// Inisialisasi saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    // Tambahkan event listener untuk tombol tab
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const day = this.getAttribute('data-day');
            changeTab(day);
        });
    });

    // Tambahkan event listener untuk accordion
    const accordionTitles = document.querySelectorAll('.accordion-title');
    accordionTitles.forEach(title => {
        title.addEventListener('click', toggleAccordion);
    });

    // Tambahkan event listener untuk scroll
    window.addEventListener('scroll', revealOnScroll);

    // Jalankan revealOnScroll sekali saat load
    revealOnScroll();
});
