# [DOCS] Menambahkan Mockup Responsive ke README

## 1. Objective

Menambahkan dokumentasi visual tampilan aplikasi RuangAman ke `README.md` agar pembaca repository dapat melihat gambaran antarmuka aplikasi pada perangkat desktop, tablet, dan mobile.

## 2. Context

Mockup antarmuka RuangAman telah dibuat untuk tiga ukuran perangkat. Saat ini, pembaca repository belum memiliki satu bagian dokumentasi yang menampilkan ketiga tampilan tersebut secara terstruktur.

Dokumentasi ini diperlukan untuk memperkenalkan tampilan aplikasi tanpa harus menjalankan project terlebih dahulu.

## 3. Scope

- [ ] Siapkan tiga file gambar mockup: desktop, tablet, dan mobile.
- [ ] Simpan gambar di dalam folder dokumentasi repository, misalnya `docs/assets/mockups/`.
- [ ] Tambahkan bagian `Application Preview` pada `README.md`.
- [ ] Tampilkan ketiga gambar dengan label perangkat masing-masing.
- [ ] Gunakan relative path agar gambar tetap dapat ditampilkan ketika repository dibuka atau di-clone.

**Out of Scope (Optional):**

- Mengubah desain atau implementasi frontend.
- Membuat ulang mockup.
- Mengubah struktur halaman README di luar bagian yang diperlukan untuk menambahkan preview.

## 4. Reference

- `README.md` — File dokumentasi utama yang akan diperbarui.
- `docs/assets/mockups/` — Lokasi penyimpanan gambar mockup yang disepakati untuk task ini.
- [GitHub Issue terkait](#) — Ganti dengan tautan Issue asli jika task ini dibuat di repository.

## 5. Acceptance Criteria

- [ ] README memiliki bagian berjudul `Application Preview`.
- [ ] Bagian tersebut menampilkan tepat tiga mockup: Desktop, Tablet, dan Mobile.
- [ ] Setiap gambar memiliki label yang menunjukkan jenis perangkatnya.
- [ ] Ketiga file gambar tersimpan di repository dan dirujuk menggunakan relative path.
- [ ] Semua gambar berhasil ditampilkan ketika `README.md` dibuka pada halaman repository GitHub.
- [ ] Tidak ada perubahan pada kode aplikasi atau file di luar kebutuhan task ini.
- [ ] Pull Request menyertakan ringkasan perubahan dan screenshot hasil tampilan README jika diperlukan untuk review.

## 6. Expected Output

- Tiga file gambar mockup untuk desktop, tablet, dan mobile di folder dokumentasi.
- `README.md` yang telah memiliki bagian `Application Preview`.
- Pull Request yang berisi perubahan dokumentasi tersebut.

## 7. Dependencies

- Mockup desktop, tablet, dan mobile sudah tersedia.
- Nama file dan lokasi penyimpanan gambar telah disepakati oleh tim.
- Akses untuk membuat branch dan Pull Request pada repository tersedia.

## 8. Additional Notes (Optional)

- Gunakan nama file yang konsisten dan mudah dikenali, misalnya `desktop.png`, `tablet.png`, dan `mobile.png`.
- Pertahankan struktur dan isi README yang sudah ada. Tambahkan bagian preview tanpa menulis ulang bagian lain yang tidak terkait.
- Jika file mockup memiliki format atau nama berbeda, sesuaikan referensi gambar di README dengan file aktual.
