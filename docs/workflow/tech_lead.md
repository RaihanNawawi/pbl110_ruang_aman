# Tech Lead Daily Workflow

## 1. Review Project Progress

Periksa kondisi project sebelum mengatur pekerjaan berikutnya.

**Activities:**

- Periksa GitHub Project Board.
- Periksa task berstatus Todo, In Progress, dan In Review.
- Periksa Milestone dan target pencapaiannya.
- Identifikasi pekerjaan yang terlambat atau mengalami blocker.
- Tentukan prioritas pekerjaan berikutnya.

**Output:** Daftar pekerjaan dan prioritas yang perlu ditindaklanjuti.

## 2. Plan & Assign Tasks

Siapkan pekerjaan yang akan diberikan kepada developer.

**Activities:**

1. Tentukan pekerjaan berdasarkan kebutuhan dan prioritas project.
2. Buat atau perbarui Milestone jika diperlukan.
3. Buat Issue untuk setiap task.
4. Tentukan deskripsi dan Expected Output.
5. Tentukan Acceptance Criteria.
6. Tentukan Priority dan Assignee.
7. Masukkan Issue ke GitHub Project dengan status Todo.

**Output:** Task siap dikerjakan oleh masing-masing developer.

**Checklist:**

- [ ]  Setiap task memiliki Issue.
- [ ]  Deskripsi dan hasil yang diharapkan jelas.
- [ ]  Acceptance Criteria tersedia.
- [ ]  Assignee sudah ditentukan.
- [ ]  Priority sudah ditentukan.

## 3. Monitor Development

Pantau proses pengerjaan dan bantu developer menyelesaikan kendala.

**Activities:**

- Pantau progress melalui GitHub Project.
- Pastikan developer mengerjakan Issue yang ditugaskan.
- Periksa pembaruan dan aktivitas pada Issues.
- Bantu menyelesaikan blocker.
- Pastikan perubahan kebutuhan dicatat pada Issue.
- Pastikan task yang selesai diajukan melalui Pull Request.

**Output:** Progress development terpantau dan setiap kendala memiliki tindak lanjut.

## 4. Review Pull Request

Periksa perubahan kode yang diajukan developer sebelum diintegrasikan ke branch `main`.

**Activities:**

1. Buka Pull Request.
2. Periksa Issue dan Acceptance Criteria terkait.
3. Periksa perubahan melalui tab Files changed.
4. Periksa logika, struktur, dan kualitas kode.
5. Periksa potensi masalah keamanan.
6. Periksa dampak perubahan terhadap fitur lain.
7. Tentukan apakah perubahan dapat dilanjutkan ke tahap merge.

**Review Checklist:**

- [ ]  Perubahan sesuai dengan Issue.
- [ ]  Acceptance Criteria terpenuhi.
- [ ]  Logika program sudah benar.
- [ ]  Kode mudah dibaca dan dipelihara.
- [ ]  Tidak ada credential atau informasi sensitif.
- [ ]  Tidak ditemukan masalah penting yang belum diselesaikan.

**Review Decision:**

| Decision | Action |
| --- | --- |
| Approved | Lanjut ke tahap merge setelah testing terpenuhi. |
| Changes Requested | Kembalikan kepada developer untuk diperbaiki. |
| Pending | Tunda keputusan sampai pemeriksaan selesai. |
4. Periksa integrasi dengan database jika diperlukan.
5. Uji fitur lain yang berpotensi terdampak.
6. Catat hasil pengujian pada Pull Request.

**Jenis Testing:**

| Testing | Tujuan |
| --- | --- |
| Functional Testing | Memastikan fitur bekerja sesuai kebutuhan. |
| Regression Testing | Memastikan fitur lama tidak rusak. |
| Integration Testing | Memastikan komponen aplikasi bekerja bersama. |

**Reviewer dapat melakukan testing secara lokal:**

```
git fetch origin
git switch --track origin/nama-branch
```

Kemudian jalankan aplikasi melalui lingkungan lokal dan lakukan pengujian.

**Testing Rules:**

- Gunakan database lokal atau database testing.
- Jangan menggunakan database produksi.
- Jangan merge jika ditemukan masalah penting yang belum diselesaikan.
- Jika testing gagal, kembalikan PR kepada developer untuk diperbaiki dan diuji ulang.

**Output:** Hasil testing dan keputusan apakah perubahan layak diintegrasikan.

## 6. Merge & Update Project

Integrasikan perubahan yang sudah memenuhi seluruh kriteria dan perbarui progress project.

**Merge Checklist:**

- [ ]  Code Review sudah disetujui.
- [ ]  Testing yang relevan berhasil.
- [ ]  Tidak ada masalah penting yang belum diselesaikan.
- [ ]  Tidak ada merge conflict.

**Activities:**

1. Merge Pull Request ke branch `main`.
2. Pastikan perubahan berhasil masuk ke `main`.
3. Pastikan Issue terkait sudah ditutup.
4. Ubah status GitHub Project menjadi Done.
5. Perbarui progress Milestone jika diperlukan.
6. Hapus branch yang sudah tidak diperlukan.

**Output:** Perubahan berhasil diintegrasikan dan progress project diperbarui.