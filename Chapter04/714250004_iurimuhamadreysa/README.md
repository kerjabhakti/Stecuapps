1. Fitur Pertama

a. Desain Kontras: Menggunakan `body` dengan latar belakang gelap (`#0e0d0d`) dan blok konten utama yang terang (`#fff`).
b. Navigasi Dasar: Bilah navigasi hitam yang diposisikan di atas konten.
c. Galeri Menu: Menggunakan elemen `<ul>` dengan `id="img-posisi"` dan Flexbox untuk menampilkan empat menu andalan.
d. Effeck: Terdapat efek *zoom* (*scale*) saat *hover* pada elemen menu (foto makanan).
e.Penggunaan tag `<nav>`, `<section>`, dan `<div class="footer">` untuk organisasi konten yang jelas.

2. Cara Menjalankan

1.  Simpan File: Pastikan Anda menyimpan kode HTML di atas sebagai `index.html` dan semua kode CSS di bawahnya sebagai `styles.css`.
2.  Siapkan Gambar:** Pastikan semua file gambar (`cireng.jpg`, `pisangcaramel.jpg`, `seblak.jpg`, `krepes.jpg`) berada dalam direktori yang sama dengan `index.html` dan `styles.css`.
3.  Buka di Browser: Buka file `index.html` menggunakan browser web (klik dua kali pada file atau klik kanan > Open with > [Browser pilihan Anda]).

3. Detail CSS (styles.css)

Disini terdapat File `styles.css` untuk mengatur *layout* dan tampilan visual atau dalam logika adalah bajunya dari html.

A.Teknik Kunci CSS:

 Flexbox:Digunakan pada `#img-posisi` untuk menata gambar secara horizontal.
    menurut saya: Agar gambar terlihat rapi dan seragam seperti yang disarankan pada diskusi sebelumnya, Anda perlu menambahkan properti `width`, `height`, dan `object-fit: cover;` pada gambar di dalam `li`.
Efek Transformasi (*Hover*):
    css
    #img-posisi li:hover img {
        transform: scale(1.1);
        transition: transform 0.7s ease;
    }

    Perbaikan: Dalam kode CSS Anda, selektor ditulis sebagai `#img-posisi hover`. Ini perlu diperbaiki menjadi `#img-posisi li:hover img` atau `#img-posisi li:hover` agar efek zoom diterapkan pada gambar (atau item daftar) saat mouse diarahkan ke *list item* tersebut. Saya asumsikan Anda ingin men-zoom gambar itu sendiri.
* **Styling Umum:** Properti `font-family`, `font-size`, dan `text-align` digunakan untuk mengatur tipografi konten.

### Perbaikan CSS yang Disarankan

Untuk membuat galeri menu rapi dan interaktif seperti yang Anda inginkan, Anda perlu **memperbaiki selektor *hover*** dan **menambahkan Flexbox** pada `li`.

**Tambahkan/Modifikasi CSS di `styles.css`:**

```css
/* Perbaikan untuk selektor hover */
#img-posisi li:hover img { 
    transform: scale(1.1);
    transition: transform 0.7s ease;
}

/* Flexbox untuk mengatur layout vertikal (gambar di atas teks) */
#img-posisi li {
    display: flex;
    flex-direction: column; /* Menumpuk gambar dan teks */
    align-items: center; /* Memusatkan secara horizontal */
    
    /* Properti lain dari li tetap dipertahankan atau disesuaikan */
    margin: 20px; 
    font-weight: bold;
    font-size: 18px;
    text-align: center;
}

/* Menetapkan ukuran gambar yang seragam dan rapi */
#img-posisi li img {
    width: 225px; 
    height: 225px; /* Menyamakan tinggi dengan lebar */
    object-fit: cover; /* Menjaga proporsi tanpa menjadi gepeng */
    border-radius: 10px;
}