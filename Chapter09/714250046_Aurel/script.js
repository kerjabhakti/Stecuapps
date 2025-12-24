document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("a[href*='hapus.php']");

    links.forEach(link => {
        link.addEventListener("click", function (e) {
            if (!confirm("Yakin pengen dihapus data ini?")) {
                e.preventDefault();
            }
        });
    });
});
