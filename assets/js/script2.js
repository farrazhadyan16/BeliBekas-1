// Ambil elemen tombol dan menu dropdown
const profileButton = document.querySelector('.profile-button');
const dropdownMenu = document.querySelector('.dropdown-menu');

// Tambahkan event listener untuk mengubah atribut aria-expanded
profileButton.addEventListener('click', function() {
    const isExpanded = profileButton.getAttribute('aria-expanded') === 'true';
    profileButton.setAttribute('aria-expanded', !isExpanded);

    // Menampilkan atau menyembunyikan dropdown menu
    if (isExpanded) {
        dropdownMenu.style.display = 'none';
    } else {
        dropdownMenu.style.display = 'block';
    }
});

// Tutup dropdown jika klik di luar profile button
document.addEventListener('click', function(event) {
    if (!profileButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.style.display = 'none';
        profileButton.setAttribute('aria-expanded', 'false');
    }
});
