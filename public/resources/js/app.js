document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.querySelector('#mobile-menu-button');
    const mobileMenu = document.querySelector('#mobile-menu');

    // Sembunyikan menu pada awalnya
    if (mobileMenu) {
        mobileMenu.classList.add('hidden');
    }

    // Tambahkan event listener untuk tombol mobile menu
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function () {
            // Toggle kelas 'hidden' pada mobile menu
            mobileMenu.classList.toggle('hidden');
        });
    }
});
