// Data Kursus Unggulan (Data tetap sama)
        const featuredCourses = [
            { id: 1, title: 'Mastering JavaScript Modern', mentor: 'Rizky Pratama', duration: '12 Jam', rating: 4.8, image: 'img/javascript.jpg' },
            { id: 2, title: 'Desain UI/UX dengan Figma', mentor: 'Citra Dewi', duration: '8 Jam', rating: 4.9, image: 'img/figma.jpg' },
            { id: 3, title: 'Data Science untuk Pemula', mentor: 'Aditya Wibowo', duration: '15 Jam', rating: 4.6, image: 'img/data.jpg' },
            { id: 4, title: 'Python Fundamental', mentor: 'Lia Susanti', duration: '10 Jam', rating: 4.7, image: 'img/python.jpg' },
            { id: 5, title: 'Fundamental Backend Golang', mentor: 'Bayu Sentosa', duration: '14 Jam', rating: 4.5, image: 'img/golang.jpg' },
            { id: 6, title: 'Game Development With Unity', mentor: 'Dani Hansip', duration: '6 Jam', rating: 5.0, image: 'img/unity.jpg' },
        ];

        // Data FAQ (Data tetap sama)
        const faqData = [
            {
                question: "Bagaimana cara mendaftar di EduLearn?",
                answer: "Anda dapat mendaftar dengan mengklik tombol 'Daftar' di bagian atas, kemudian isi formulir pendaftaran dengan email dan password Anda. Prosesnya cepat dan mudah!"
            },
            {
                question: "Apakah sertifikat EduLearn diakui?",
                answer: "Ya, sertifikat kami dirancang sesuai standar industri dan dapat digunakan untuk meningkatkan profil profesional Anda di platform seperti LinkedIn atau resume."
            },
            {
                question: "Berapa lama akses ke kursus yang sudah dibeli?",
                answer: "Kami menawarkan akses seumur hidup untuk semua kursus yang Anda beli. Anda juga akan mendapatkan pembaruan materi secara gratis."
            },
            {
                question: "Apakah ada garansi uang kembali?",
                answer: "Kami menawarkan garansi uang kembali 14 hari tanpa pertanyaan jika Anda tidak puas dengan kursus yang Anda beli."
            }
        ];

        // --- Fungsi Bantuan untuk UI ---

        /**
         * Menggenerate HTML untuk rating bintang dinamis.
         * @param {number} rating - Nilai rating (misalnya 4.8)
         * @returns {string} HTML dari ikon bintang
         */
        function renderStars(rating) {
            const fullStar = `<svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>`;
            const emptyStar = `<svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg>`;
            const maxRating = 5;
            let starsHtml = '';

            for (let i = 1; i <= maxRating; i++) {
                if (i <= rating) {
                    starsHtml += fullStar;
                } else if (i - 1 < rating && i > rating) {
                    // Penanganan bintang setengah sederhana
                    starsHtml += fullStar;
                } else {
                    starsHtml += emptyStar;
                }
            }
            return `<div class="flex items-center space-x-1">${starsHtml}</div>`;
        }

        // --- Logic Utama ---

        /**
         * Menggenerate dan merender Kartu Kursus.
         */
        function renderCourses() {
            const container = document.getElementById('course-list');
            container.innerHTML = featuredCourses.map(course => `
                <div class="bg-white rounded-lg shadow-md overflow-hidden card-simple-hover">
                    <img src="${course.image}" alt="Kursus ${course.title}" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-center mb-2">
                            ${renderStars(course.rating)}
                            <span class="text-xs font-semibold text-gray-700">${course.rating}</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">${course.title}</h3>
                        <p class="text-sm text-gray-500 mb-3">Mentor: ${course.mentor}</p>
                        <div class="flex justify-between items-center text-sm text-gray-600">
                            <span>${course.duration}</span>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">Detail &rarr;</a>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        /**
         * Menggenerate dan merender Akordion FAQ.
         */
        function renderFAQ() {
            const container = document.getElementById('faq-accordion');
            container.innerHTML = faqData.map(item => `
                <div class="accordion-item bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="accordion-header flex justify-between items-center bg-gray-100 hover:bg-gray-200 p-4 transition-colors rounded-lg font-semibold text-gray-800">
                        <span>${item.question}</span>
                        <svg class="w-5 h-5 transition-transform transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                    <div class="accordion-content text-gray-600">
                        <p>${item.answer}</p>
                    </div>
                </div>
            `).join('');

            // Menambahkan event listener ke header akordion
            document.querySelectorAll('.accordion-header').forEach(header => {
                header.addEventListener('click', function() {
                    const item = this.parentElement;
                    const icon = this.querySelector('svg');

                    // Tutup semua akordion yang tidak sedang diklik
                    document.querySelectorAll('.accordion-item').forEach(otherItem => {
                        if (otherItem !== item && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                            otherItem.querySelector('svg').classList.remove('rotate-180');
                        }
                    });

                    // Toggle akordion yang diklik
                    item.classList.toggle('active');
                    icon.classList.toggle('rotate-180');
                });
            });
        }

        // Jalankan fungsi rendering saat DOM dimuat
        document.addEventListener('DOMContentLoaded', () => {
            renderCourses();
            renderFAQ();
        });