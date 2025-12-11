# Website Warung Aas

Website sederhana untuk "Warung Aas" yang menampilkan informasi tentang warung makanan dengan bagian hero yang mencakup teks deskripsi dan mockup aplikasi smartphone.

## Struktur Proyek

```
warung_aas/
├── index.html    # File HTML utama
└── README.md     # Dokumentasi ini
```

## Cara Membuat Website

### 1. Persiapan File HTML

Buat file `index.html` dengan struktur dasar HTML5:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Aas - Makanan Lezat dan Murah</title>
    <style>
        /* CSS akan ditambahkan di sini */
    </style>
</head>
<body>
    <!-- Konten HTML akan ditambahkan di sini -->
    <script>
        // JavaScript akan ditambahkan di sini
    </script>
</body>
</html>
```

### 2. Menambahkan CSS untuk Styling

Tambahkan CSS internal di dalam tag `<style>` untuk mengatur tampilan:

- **Body**: Mengatur font, margin, dan background.
- **Hero Section**: Menggunakan flexbox untuk layout teks dan mockup.
- **Mockup**: Membuat ilustrasi ponsel dengan CSS (border-radius, box-shadow, dll.).
- **Navigasi**: Styling untuk menu navigasi.
- **Section**: Styling untuk bagian konten.
- **Footer**: Styling untuk footer.

### 3. Membuat Struktur HTML

Tambahkan elemen HTML di dalam `<body>`:

- **Hero Section**: Div dengan class "hero" yang berisi teks dan mockup ponsel.
- **Navigasi**: Tag `<nav>` dengan link ke bagian halaman.
- **Section Menu**: Bagian untuk menampilkan menu makanan.
- **Section Tentang**: Informasi tentang warung.
- **Section Kontak**: Informasi kontak.
- **Footer**: Copyright.

### 4. Menambahkan JavaScript untuk Interaktivitas

Tambahkan script di bagian bawah sebelum `</body>`:

- **Smooth Scroll**: Untuk navigasi yang halus ke bagian tertentu.
- **Alert pada CTA**: Menampilkan alert saat tombol CTA diklik.

### 5. Menjalankan Website

Buka file `index.html` di browser web untuk melihat hasilnya. Anda dapat menggunakan perintah `start index.html` di command prompt Windows atau klik dua kali file di file explorer.

## Penjelasan Kode

### HTML
- `<!DOCTYPE html>`: Mendeklarasikan dokumen sebagai HTML5.
- `<html lang="id">`: Mengatur bahasa ke Indonesia.
- `<head>`: Berisi meta tag, title, dan CSS.
- `<body>`: Berisi konten utama website.

### CSS
- Menggunakan selector class dan ID untuk styling spesifik.
- Flexbox untuk layout responsif.
- Pseudo-element `::before` untuk notch ponsel.
- Media queries dapat ditambahkan untuk responsivitas lebih lanjut.

### JavaScript
- `addEventListener`: Untuk menangani event klik.
- `scrollIntoView`: Untuk smooth scroll.
- `alert`: Untuk menampilkan pesan popup.

## Fitur Utama

1. **Hero Section**: Menarik perhatian dengan teks dan mockup app.
2. **Navigasi**: Menu untuk navigasi ke bagian berbeda.
3. **Konten**: Informasi menu, tentang, dan kontak.
4. **Interaktivitas**: Smooth scroll dan alert untuk user engagement.

## Tips Pengembangan

- Gunakan CSS eksternal untuk proyek yang lebih besar.
- Tambahkan gambar asli untuk mockup app.
- Implementasikan responsivitas penuh dengan media queries.
- Tambahkan lebih banyak interaktivitas dengan JavaScript.

## Lisensi

Website ini dibuat untuk tujuan edukasi.
