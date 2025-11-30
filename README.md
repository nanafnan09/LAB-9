# Praktikum 9: PHP Modular

**Nama** : Afnan Dika Ramadhan  
**NIM** : TI24.A5  
**Kelas** : TI24.A5  
**Mata Kuliah**: Pemrograman Web  

---

## 📋 Deskripsi Proyek
Proyek ini adalah implementasi sistem CRUD (Create, Read, Update, Delete) sederhana menggunakan pola desain **PHP Modular**. Tujuan utama dari praktikum ini adalah memisahkan logika program, tampilan (*view*), dan konfigurasi agar kode lebih terstruktur, mudah dikelola (*maintainable*), dan dapat digunakan kembali (*reusable*).

Fitur utama meliputi:
- **Routing Sederhana**: Menggunakan satu titik masuk (`index.php`) untuk menangani berbagai permintaan halaman.
- **Templating**: Memisahkan Header, Footer, dan Konten utama.
- **Autentikasi**: Fitur Login dan Logout sederhana menggunakan Session.
- **CRUD Database**: Manajemen data barang/user yang terhubung ke database MySQL.

## 📂 Struktur Direktori
Berikut adalah struktur folder yang digunakan dalam proyek ini:

```text
project/
├── index.php               # Single Entry Point (Router Utama)
├── config/
│   └── database.php        # Konfigurasi koneksi ke Database
├── views/
│   ├── header.php          # Template bagian atas (HTML Head & Navigasi)
│   └── footer.php          # Template bagian bawah (Copyright & Scripts)
├── modules/                # Berisi logika fitur per modul
│   ├── user/
│   │   ├── list.php        # Menampilkan daftar data (Read)
│   │   ├── add.php         # Form tambah data (Create)
│   │   ├── edit.php        # Form ubah data (Update)
│   │   └── hapus.php       # Proses hapus data (Delete)
│   └── auth/
│       ├── login.php       # Halaman Login
│       └── logout.php      # Proses Logout
└── assets/
    └── css/
        └── style.css       # File CSS eksternal untuk styling
```
