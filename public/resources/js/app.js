document.addEventListener('DOMContentLoaded', function () {
    const profileButton = document.getElementById('profileButton');
    const profileMenu = document.getElementById('profileMenu');

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
});

// Initialization for ES Users
import {
    Carousel,
    initTE,
  } from "tw-elements";

  initTE({ Carousel });
