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
