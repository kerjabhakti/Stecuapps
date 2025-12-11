<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!--- Memastikan website responsif di semua perangkat --->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>EduMaster - Bimbingan Belajar Online</title>

    <!-- Import font Poppins dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Import ikon dari Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Menghubungkan file CSS eksternal -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-------------------------- HEADER ---------------------->
    <header>
        <!-- Logo halaman -->
        <div class="logo">🎓EduMaster</div>

        <!-- Navigasi menuju section tertentu -->
        <nav>
            <a href="#courses"><i class="fas fa-book-open"></i> Kursus</a>
            <a href="#features"><i class="fas fa-star"></i> Fitur</a>
            <a href="#reviews"><i class="fas fa-comment-dots"></i> Review</a>
            <a href="#faq"><i class="fas fa-question-circle"></i> FAQ</a>
        </nav>

        <!-- Tombol toggle Dark / Light Mode -->
        <button id="darkModeToggle" class="toggle-btn">
            <i class="fas fa-sun"></i> Terang
        </button>
    </header>

    <!------------------------------ HERO SECTION ---------------------------------->
    <section class="hero fade-in">
        <div class="hero-text">
            <!-- Judul besar halaman -->
            <h1>Belajar Pemrograman dari Nol, Dapatkan Karir Impian!</h1>

            <!-- Subjudul -->
            <p>Akses kelas premium, sertifikat, dan mentoring hanya dalam satu platform terpercaya.</p>

            <!-- Tombol CTA (Call to Action) -->
            <button class="cta-btn">
                <i class="fas fa-arrow-right"></i> Mulai Belajar Sekarang
            </button>
        </div>

        <!-- Gambar hero / mockup -->
        <div class="hero-image">
            <img src="otakremove.png" alt="Mockup App" />
        </div>
    </section>

    <!-------------------------- FEATURES SECTION --------------------------->
    <section id="features" class="features fade-in">
        <h2>
            <i class="fas fa-medal"></i>
            Kenapa Pilih EduMaster?
        </h2>

        <!-- Grid 4 fitur utama -->
        <div class="features-grid">

            <!-- Fitur 1 -->
            <div class="feature-card">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Mentoring Langsung</h3>
                <p>Belajar langsung dari mentor profesional industri.</p>
            </div>

            <!-- Fitur 2 -->
            <div class="feature-card">
                <i class="fas fa-certificate"></i>
                <h3>Sertifikat Resmi</h3>
                <p>Dapatkan sertifikat yang diakui setelah lulus.</p>
            </div>

            <!-- Fitur 3 -->
            <div class="feature-card">
                <i class="fas fa-infinity"></i>
                <h3>Akses Seumur Hidup</h3>
                <p>Materi dapat diakses kapan saja tanpa batas waktu.</p>
            </div>

            <!-- Fitur 4 -->
            <div class="feature-card">
                <i class="fas fa-users"></i>
                <h3>Komunitas Belajar</h3>
                <p>Bergabung dengan komunitas pembelajar aktif.</p>
            </div>

        </div>
    </section>

    <!------------------------- COURSES SECTION ---------------------------->
    <section id="courses" class="courses fade-in">
        <h2>
            <i class="fas fa-code"></i>
            Kursus Unggulan
        </h2>

        <!-- Area pencarian & filter kategori -->
        <div class="filter-area">
            <!-- Input search -->
            <input type="text" id="searchInput" placeholder="Cari kursus..." />

            <!-- Dropdown filter kategori -->
            <select id="categoryFilter">
                <option value="all">Semua Kategori</option>
                <option value="Web Development">Web Development</option>
                <option value="UI/UX Design">UI/UX Design</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="Data Science">Data Science</option>
            </select>
        </div>

        <!-- Container untuk card kursus (dari JS) -->
        <div class="course-container" id="course-list"></div>
    </section>

    <!--------------------------- REVIEW SECTION ---------------------------->
    <section id="reviews" class="rating-section fade-in">
        <h2>
            <i class="fas fa-star-half-alt"></i>
            Beri Rating Pengalaman Anda
        </h2>

        <!-- Area bintang rating (dibuat via JS) -->
        <div class="stars" id="starRating"></div>

        <!-- Text feedback setelah memilih rating -->
        <p class="rating-text" id="ratingText">Pilih bintang untuk memberikan penilaian</p>
    </section>

    <!----------------------------- FAQ SECTION ----------------------------->
    <section id="faq" class="faq fade-in">
        <h2>
            <i class="fas fa-info-circle"></i>
            FAQ
        </h2>

        <!-- Accordion FAQ -->
        <div class="accordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
                <button class="accordion-btn">Apa itu EduMaster?</button>
                <div class="accordion-content">
                    <p>Platform kursus online interaktif dengan Pembimbing profesional untuk meningkatkan skill digital Anda.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <button class="accordion-btn">Apakah dapat sertifikat?</button>
                <div class="accordion-content">
                    <p>Ya, setiap kelas yang diselesaikan akan mendapatkan sertifikat digital resmi.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <button class="accordion-btn">Apakah akses kelas selamanya?</button>
                <div class="accordion-content">
                    <p>Akses kelas berlaku untuk satu bulan per pembelian. Kami menyediakan opsi perpanjangan atau paket langganan.</p>
                </div>
            </div>

        </div>
    </section>

    <!---------------------------------- FOOTER --------------------------------->
    <footer>
        <p>&copy; 2025 EduMaster. Hak Cipta Dilindungi.</p>
    </footer>

    <!-- Menghubungkan file JavaScript -->
    <script src="app.js"></script>

</body>
</html>
