# Panduan Mengerjakan Tugas Rutin 9 (urut sesuai 8 requirement)

1. `composer create-project laravel/laravel TugasWeb-P9-LaravelSetup` lalu `cd` ke foldernya.
2. Buka phpMyAdmin → buat database `p9_laravel`. Edit `.env` (DB_CONNECTION=mysql, DB_DATABASE=p9_laravel, dst.). Pastikan MySQL aktif.
3. `php artisan serve` → buka http://127.0.0.1:8000 → **screenshot welcome page** (lakukan SEBELUM langkah 4).
4. Salin isi zip ini ke dalam project (timpa `routes/web.php`, tambah folder views, dst.). **Ganti semua teks `ISI_...`**.
5. `php artisan make:controller PageController` dan `php artisan make:model Mahasiswa -m`
   (jika file sudah ada dari zip, pilih tidak menimpa; yang penting perintahnya pernah dijalankan, lampirkan screenshot terminal).
6. `php artisan migrate`, lalu cek tabel `mahasiswas` di phpMyAdmin.
7. Buka /, /about, /contact, /hello/namamu → screenshot semuanya ke folder `screenshots/`.
8. Isi README (nama/NIM/kelas), lalu:
```bash
git init
git add .
git commit -m "Tugas Rutin 9: Setup Laravel"
git branch -M main
git remote add origin https://github.com/USERNAME_KAMU/TugasWeb-P9-LaravelSetup.git
git push -u origin main
```
Pastikan `.env` TIDAK ikut ter-commit (sudah ada di .gitignore) dan `composer.lock` ikut ter-commit.
