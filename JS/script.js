// Ambil elemen tombol dan navbar
const darkModeBtn = document.getElementById('darkModeBtn');
const lightModeBtn = document.getElementById('lightModeBtn');
const navbar = document.getElementById('navbar');

// Fungsi untuk mengubah tema dan simpan preferensi di localStorage
function applyTheme(isDark) {
    if (isDark) {
        document.body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
    } else {
        document.body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
    }
}

// Cek preferensi tema pengguna saat halaman dimuat
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    applyTheme(true);
}


    document.getElementById("profile-pic").addEventListener("click", function () {
        const profileDescription = document.getElementById("profile-description");
        profileDescription.style.display = profileDescription.style.display === "none" ? "block" : "none";
    });
