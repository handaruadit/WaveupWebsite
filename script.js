function submitForm() {
    // Ambil nilai inputan Nama dan Kelas
    const nama = document.getElementById('nama').value;
    const kelas = document.getElementById('kelas').value;

    // Cek apakah kedua inputan sudah diisi
    if (nama && kelas) {
        // Setelah form di-submit, arahkan ke halaman baru (misalnya 'home.html')
        window.location.href = 'home.html';
    } else {
        alert('Mohon lengkapi semua data!');
    }
}

// Fungsi untuk menyimpan profil
function saveProfile() {
    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;

    // Simpan data (bisa menggunakan LocalStorage untuk testing)
    if (nama && email) {
        localStorage.setItem('nama', nama);
        localStorage.setItem('email', email);

        alert('Profil berhasil disimpan!');
    } else {
        alert('Mohon lengkapi semua data!');
    }
}

// Fungsi untuk logout (pulang ke halaman utama atau login)
function logout() {
    // Menghapus data profil yang ada di LocalStorage
    localStorage.removeItem('nama');
    localStorage.removeItem('email');

    // Arahkan ke halaman login atau halaman utama
    window.location.href = 'index.html';  // Ganti dengan halaman yang sesuai
}


