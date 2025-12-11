function scrollToArtis() {
    document.getElementById("artis").scrollIntoView({ behavior: "smooth" });
}

function pesanWA(paket, harga) {
    const nomor = "6285191163819";
    const pesan = `Halo, saya ingin memesan tiket ${paket} dengan harga Rp ${harga}`;
    const url = `https://wa.me/${nomor}?text=${encodeURIComponent(pesan)}`;

    window.open(url, "_blank");
}
