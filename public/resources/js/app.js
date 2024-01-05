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
    g
    // document.addEventListener('DOMContentLoaded', function () {
    //     var profileMenu = document.getElementById('profileMenu');
    //     profileMenu.classList.remove('hidden'); // Menghapus kelas hidden agar dropdown selalu terlihat
    // });
});
