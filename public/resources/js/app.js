document.addEventListener('DOMContentLoaded', function () {
    const profileButton = document.getElementById('profileButton');
    const profileMenu = document.getElementById('profileMenu');
    const mobileMenuButton = document.querySelector('#mobile-menu-button');
    const mobileMenu = document.querySelector('#mobile-menu');

    profileButton.addEventListener('click', function (event) {
        event.stopPropagation();
        profileMenu.classList.toggle('visible'); // Tambahkan atau hapus kelas "visible"
    });

    document.addEventListener('click', function (event) {
        if (!profileMenu.contains(event.target) && event.target !== profileButton) {
            profileMenu.classList.remove(
                'visible'); // Hapus kelas "visible" jika mengklik di luar menu
        }
    });

    mobileMenuButton.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });
});
