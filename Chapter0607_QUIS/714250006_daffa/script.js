document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registrationForm');
    const messageDiv = document.getElementById('formMessage');

    // Fungsi untuk menampilkan pesan (menggantikan alert)
    function showMessage(text, isSuccess = true) {
        messageDiv.textContent = text;
        // Hapus semua kelas warna sebelum menambahkan yang baru
        messageDiv.classList.remove('hidden', 'bg-red-100', 'text-red-700', 'bg-green-100', 'text-green-700');
        
        if (isSuccess) {
            messageDiv.classList.add('bg-green-100', 'text-green-700');
        } else {
            messageDiv.classList.add('bg-red-100', 'text-red-700');
        }
        
        // Tampilkan pesan
        messageDiv.classList.remove('hidden');

        // Sembunyikan pesan setelah 5 detik
        setTimeout(() => {
            messageDiv.classList.add('hidden');
        }, 5000);
    }

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah form submit secara default

            // Logika validasi dan pengiriman data
            const nama = document.getElementById('nama').value;
            const kursus = document.getElementById('kursus-pilihan').value;

            if (kursus === "") {
                 showMessage("Kesalahan: Silakan pilih kursus terlebih dahulu.", false);
                 return;
            }

            // Dapatkan tombol submit untuk menonaktifkannya
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            // Ganti teks tombol dan nonaktifkan selama proses
            submitButton.textContent = 'Memproses...';
            submitButton.disabled = true;
            submitButton.classList.add('opacity-75'); // Tambahkan sedikit transparansi

            // Simulasi delay (seperti pengiriman ke server)
            setTimeout(() => {
                // Tampilkan pesan sukses
                showMessage(`Pendaftaran berhasil untuk ${nama} di kursus ${kursus}! Kami telah mengirimkan detail ke email Anda.`, true);
                
                // Reset form
                form.reset();
                
                // Kembalikan tombol ke keadaan semula
                submitButton.textContent = originalText;
                submitButton.disabled = false;
                submitButton.classList.remove('opacity-75');
            }, 1500); // Simulasi 1.5 detik
        });
    }
});