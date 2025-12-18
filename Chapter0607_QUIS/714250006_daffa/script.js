document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registrationForm');
    const messageDiv = document.getElementById('formMessage');

    function showMessage(text, isSuccess = true) {
        messageDiv.textContent = text;
        messageDiv.classList.remove('hidden', 'bg-red-100', 'text-red-700', 'bg-green-100', 'text-green-700');
        
        if (isSuccess) {
            messageDiv.classList.add('bg-green-100', 'text-green-700');
        } else {
            messageDiv.classList.add('bg-red-100', 'text-red-700');
        }
        
        messageDiv.classList.remove('hidden');

        setTimeout(() => {
            messageDiv.classList.add('hidden');
        }, 5000);
    }

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const nama = document.getElementById('nama').value;
            const kursus = document.getElementById('kursus-pilihan').value;

            if (kursus === "") {
                 showMessage("Kesalahan: Silakan pilih kursus terlebih dahulu.", false);
                 return;
            }

            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;

            submitButton.textContent = 'Memproses...';
            submitButton.disabled = true;
            submitButton.classList.add('opacity-75')

            setTimeout(() => {
                showMessage(`Pendaftaran berhasil untuk ${nama} di kursus ${kursus}! Kami telah mengirimkan detail ke email Anda.`, true);

                form.reset();
                
                submitButton.textContent = originalText;
                submitButton.disabled = false;
                submitButton.classList.remove('opacity-75');
            }, 1500); // Simulasi 1.5 detik
        });
    }
});