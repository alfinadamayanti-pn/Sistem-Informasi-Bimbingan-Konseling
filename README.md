# 🧠 SIBK - Sistem Informasi Bimbingan Konseling

SIBK adalah sistem informasi sederhana berbasis web untuk mendata dan memantau siswa, guru, pelanggaran, dan sanksi di lingkungan sekolah, khususnya SMA.

---

## 🚀 Fitur Utama

- 📋 Data Master:
  - Data Siswa
  - Data Guru
  - Data Pelanggaran & Sanksi
- 📈 Statistik:
  - Total Siswa
  - Total Guru
  - Jumlah Pelanggaran
- 🧾 Pencatatan Kasus
- 👨‍🏫 Pembagian Kelas

---

## 🛠️ Teknologi

- PHP (native)
- MySQL / phpMyAdmin
- Bootstrap 5 + Bootstrap Icons
- Template dashboard custom (AdminLTE/Themelock)

---

## 🗄️ Struktur Folder

```bash
sibk/
├── index.php               # Dashboard utama
├── koneksi.php             # Koneksi database
├── data-siswa.php          # Halaman data siswa
├── tambah-siswa.php        # Form tambah siswa
├── data-guru.php           # Halaman data guru
├── tambah-guru.php         # Form tambah guru
├── data-pelanggaran.php    # Pelanggaran
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── database/
│   └── sibk.sql            # Backup database MySQL
└── README.md
