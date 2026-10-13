# TugasWeb-P9-LaravelSetup

Tugas Rutin 9 — Pemrograman Web (3KOM40115), Universitas Negeri Medan

- **Nama:** ISI_NAMA_LENGKAP
- **NIM:** ISI_NIM
- **Kelas:** ISI_KELAS

## Prasyarat
- PHP ≥ 8.2 (`php -v`)
- Composer (`composer -V`)
- MySQL aktif (Laragon / XAMPP) + phpMyAdmin
- Node.js (opsional, untuk Vite)

## Langkah Instalasi
```bash
# 1. Buat project
composer create-project laravel/laravel TugasWeb-P9-LaravelSetup
cd TugasWeb-P9-LaravelSetup

# 2. Buat database `p9_laravel` di phpMyAdmin (collation utf8mb4_unicode_ci)

# 3. Atur .env
#    DB_CONNECTION=mysql
#    DB_HOST=127.0.0.1
#    DB_PORT=3306
#    DB_DATABASE=p9_laravel
#    DB_USERNAME=root
#    DB_PASSWORD=

# 4. Generate artisan (sudah dibuat otomatis saat create-project)
php artisan make:controller PageController
php artisan make:model Mahasiswa -m

# 5. Jalankan migration, lalu server
php artisan migrate
php artisan serve        # http://127.0.0.1:8000
```

## Route yang Tersedia
| URL | Keterangan |
|---|---|
| `/` | Home, data dinamis (array) dari route |
| `/about` | About, lewat `PageController@about` |
| `/contact` | Contact, data dinamis dari route |
| `/hello/{nama}` | **Bonus** — route parameter |

Styling memakai **Tailwind CDN** (bonus), dipasang di `layouts/app.blade.php`.

## Struktur Folder Laravel
| Folder/File | Fungsi |
|---|---|
| `app/Models/` | **Model** (M) — Eloquent, berinteraksi dengan database |
| `app/Http/Controllers/` | **Controller** (C) — menerima request, memanggil model, memilih view |
| `resources/views/` | **View** (V) — template Blade |
| `routes/web.php` | Peta URL → controller/closure |
| `database/migrations/` | Version control skema database |
| `database/seeders` & `factories` | Data dummy |
| `config/` | File konfigurasi aplikasi |
| `public/` | Document root, satu-satunya folder yang diakses browser (`index.php`) |
| `storage/` | Upload, cache, log |
| `bootstrap/app.php` | Konfigurasi aplikasi (Laravel 11+) |
| `vendor/` | Dependency hasil Composer |
| `.env` | Konfigurasi rahasia lokal (**tidak di-commit**) |

## Screenshot
![Welcome](screenshots/welcome-page.png)
![Home](screenshots/home.png)
![About](screenshots/about.png)
![Contact](screenshots/contact.png)
![Hello](screenshots/hello.png)
