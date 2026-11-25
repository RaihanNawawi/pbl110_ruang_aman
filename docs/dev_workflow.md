# Developer Daily Workflow

Urutan standar yang harus diikuti setiap developer ketika mengerjakan task, mulai dari mengambil kode terbaru hingga mengirimkan perubahan ke GitHub.

## 1. Ambil Kode Terbaru

Pastikan branch lokal `main` sudah diperbarui sebelum memulai pekerjaan.

```
git switch main
git pull origin main
```

**Penjelasan:**

- `git switch main`: Berpindah ke branch utama.
- `git pull origin main`: Mengambil dan menggabungkan perubahan terbaru dari GitHub.

## 2. Buat Branch

Buat branch baru khusus untuk task yang akan dikerjakan.

```
git switch -c feature/nama-task
```

**Penjelasan:**

- `git switch -c`: Membuat sekaligus berpindah ke branch baru.
- `feature/`: Prefix yang menunjukkan jenis pekerjaan.
- `nama-task`: Nama singkat yang menggambarkan pekerjaan.

### Git Branch Naming Convention

Gunakan format:

```
<type>/<task-name>
```

Jenis branch yang digunakan:

| Type | Fungsi | Contoh |
| --- | --- | --- |
| `feature/` | Menambahkan fitur atau fungsionalitas baru. | `feature/login-page` |
| `fix/` | Memperbaiki bug atau kesalahan aplikasi. | `fix/login-validation` |
| `docs/` | Menambahkan atau memperbarui dokumentasi. | `docs/update-readme` |
| `refactor/` | Memperbaiki struktur kode tanpa mengubah fungsionalitas aplikasi. | `refactor/database-connection` |

**Aturan penamaan branch:**

- Gunakan huruf kecil (lowercase).
- Pisahkan setiap kata menggunakan tanda hubung ().
- Gunakan nama yang singkat dan menggambarkan task.
- Hindari spasi dan karakter khusus.
- Satu task menggunakan satu branch.
- Jangan menggunakan nama developer sebagai nama branch.

Contoh:

- Fokus pada task yang diberikan.
- Hindari mengubah file di luar kebutuhan task.
- Jangan mengubah pekerjaan anggota lain tanpa koordinasi.
- Simpan perubahan secara berkala.
- Pastikan hasil pekerjaan sudah diuji sebelum melakukan commit.

## 4. Periksa Perubahan

Periksa file yang mengalami perubahan sebelum menyimpannya ke Git.

```
git status
```

**Penjelasan:**

Perintah ini digunakan untuk melihat:

- File yang baru dibuat.
- File yang mengalami perubahan.
- File yang sudah masuk staging area.
- File yang belum dilacak oleh Git.

Pastikan hanya perubahan yang relevan dengan task yang akan di-commit.

## 5. Commit

Masukkan perubahan ke staging area dan simpan sebagai commit.

```
git add .
git commit -m "feat: add login page"
```

**Penjelasan:**

- `git add .`: Memasukkan seluruh perubahan yang tidak diabaikan Git ke staging area.
- `git commit -m`: Menyimpan perubahan dengan pesan commit.

### Git Commit Naming Convention

Gunakan format:

```
<type>: <description>
```

Jenis commit yang digunakan:

| Type | Fungsi | Contoh |
| --- | --- | --- |
| `feat` | Menambahkan fitur atau fungsionalitas baru. | `feat: add login page` |
| `fix` | Memperbaiki bug atau kesalahan aplikasi. | `fix: resolve login validation error` |
| `style` | Mengubah tampilan UI atau format kode tanpa mengubah logika aplikasi. | `style: improve login page layout` |
| `refactor` | Memperbaiki atau menyederhanakan struktur kode tanpa mengubah fungsionalitas. | `refactor: simplify database connection` |
| `docs` | Menambahkan atau memperbarui dokumentasi. | `docs: update readme` |
| `test` | Menambahkan atau memperbarui pengujian kode. | `test: add login validation tests` |
| `chore` | Melakukan pemeliharaan atau konfigurasi project yang tidak termasuk perubahan fitur. | `chore: update gitignore` |

**Aturan penulisan commit:**

- Gunakan bahasa Inggris.
- Gunakan huruf kecil (lowercase).
- Pisahkan type dan description menggunakan titik dua (`:`).
- Awali description dengan kata kerja, seperti `add`, `fix`, `update`, `remove`, atau `improve`.
- Buat pesan singkat, jelas, dan menggambarkan perubahan.
- Hindari pesan yang terlalu umum seperti `update`, `fix`, `final`, atau `done`.
- Satu commit sebaiknya mewakili satu kelompok perubahan yang logis.

**Contoh commit berdasarkan pekerjaan:**

```
# Feature
git commit -m "feat: add user registration"
git commit -m "feat: add dashboard page"

# Bug Fix
git commit -m "fix: resolve login validation error"
git commit -m "fix: correct database connection"

# Styling
git commit -m "style: improve navbar layout"
git commit -m "style: adjust button spacing"

# Refactoring
git commit -m "refactor: simplify login function"
git commit -m "refactor: organize php files"

# Documentation
git commit -m "docs: update readme"
git commit -m "docs: add installation guide"

# Testing
git commit -m "test: add login validation tests"

# Maintenance
git commit -m "chore: update gitignore"
```

**Catatan:** Branch naming dan commit naming memiliki fungsi berbeda. Branch menggambarkan ruang lingkup pekerjaan, sedangkan commit menjelaskan perubahan spesifik yang disimpan. Satu branch dapat memiliki beberapa commit dengan jenis yang berbeda.

## 6. Push ke GitHub

Kirim branch beserta commit yang sudah dibuat ke repository GitHub.

```
git push -u origin feature/nama-task
```

**Penjelasan:**

- `git push`: Mengirim perubahan lokal ke GitHub.
- `u`: Mengatur upstream agar push berikutnya dapat menggunakan perintah `git push` saja.
- `origin`: Nama remote repository.
- `feature/nama-task`: Nama branch yang dikirim.

Untuk push berikutnya pada branch yang sama, cukup gunakan:

```
git push
```

## 7. Buat Pull Request

Setelah push berhasil, buka repository di GitHub dan buat Pull Request.

**Ketentuan:**

- Base branch: `main`.
- Compare branch: branch yang sedang dikerjakan.
- Berikan judul yang jelas.
- Jelaskan perubahan yang dilakukan.
- Hubungkan Pull Request dengan task atau Issue terkait jika tersedia.
- Sertakan screenshot jika terdapat perubahan tampilan.

Pull Request digunakan agar perubahan dapat diperiksa oleh Team Lead atau anggota tim lainnya sebelum digabungkan ke `main`.

Jika terdapat revisi, lakukan perubahan pada branch yang sama, kemudian commit dan push kembali.

## 8. Merge

Setelah Pull Request mendapatkan approval dan seluruh pemeriksaan yang diperlukan selesai, reviewer melakukan merge ke branch `main`.

**Ketentuan:**

- Jangan melakukan merge sebelum mendapatkan persetujuan reviewer.
- Pastikan tidak ada perubahan yang belum diselesaikan.
- Setelah merge, branch task dapat dihapus jika sudah tidak diperlukan.

Dengan demikian, pekerjaan telah selesai dan perubahan sudah terintegrasi ke branch utama.