# Project 6 - MVC Sederhana

Project ini adalah contoh framework MVC sederhana untuk Sistem Akademik.

## Struktur

- `app/controllers`: menerima request dan mengatur proses.
- `app/models`: berkomunikasi dengan database.
- `app/views`: menampilkan halaman.
- `app/core`: router, controller dasar, dan model dasar.
- `layouts`: layout guest, dashboard, dan aset tampilan.

## Route utama

- `/` - halaman guest.
- `/dashboard` - dashboard akademik.
- `/mahasiswa` - daftar mahasiswa.
- `/mahasiswa/input` - form input.
- `/mahasiswa/edit/{id}` - form edit.
- `/dosen` - halaman placeholder dosen.
- `/matakuliah` - halaman placeholder matakuliah.

## Menjalankan project

1. Buat database `dbakademik`.
2. Import `database.sql`.
3. Jalankan `composer install` jika folder `vendor` belum tersedia.
4. Buka `http://localhost/project6`.

Paket `filp/whoops` digunakan untuk menampilkan error PHP dan exception database
secara lebih mudah dibaca selama proses pembelajaran.
