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
📝 Penjelasan Kode & Logika Modular
1. Routing (index.php)
File ini berfungsi sebagai Router. Semua permintaan halaman melewati file ini. Logikanya adalah memeriksa parameter page di URL (contoh: ?page=user/list).

Jika page ada, sistem akan memanggil file yang sesuai dari folder modules/.

File header.php dan footer.php dimuat secara otomatis di setiap halaman, sehingga kita tidak perlu menulis ulang struktur HTML dasar berulang kali.

2. Konfigurasi Database (config/database.php)
File ini menyimpan kredensial database (host, user, password, nama db). Dengan memisahkannya, jika ada perubahan konfigurasi database, kita hanya perlu mengubah satu file ini saja.

3. Modul View (views/)
header.php: Berisi deklarasi <!DOCTYPE html>, tag <head> (termasuk link CSS), dan menu navigasi.

footer.php: Berisi penutup </body> dan </html>.

4. Modul Konten (modules/)
Folder ini berisi inti dari fitur aplikasi.

user/list.php: Berisi kode PHP untuk mengambil data dari database dan menampilkannya dalam bentuk tabel HTML. File ini tidak memiliki tag <html> pembuka karena sudah disedikan oleh header.php.

auth/login.php: Menangani proses autentikasi user (Login) menggunakan Session PHP.
