const waNumber = "6281223209190";

// Fungsi untuk mengirim pesan WhatsApp
function sendToWhatsApp(paket, harga) {
    const message = `Halo, saya tertarik dengan paket ${paket} (Rp ${harga}). Bisa jelaskan lebih lanjut?`;
    const url = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;

    window.open(url, "_blank");
}
