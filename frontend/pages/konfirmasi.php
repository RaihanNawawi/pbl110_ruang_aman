
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi Laporan - RuangAman</title>

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    rel="stylesheet"
  >

  <script type="module" src="assets/js/layout.js"></script>
</head>

<body>
  <div id="app-navbar"></div>

  <main class="container py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-7">

        <h1 class="h3 fw-bold mb-1">Buat Laporan Kekerasan</h1>
        <p class="text-body-secondary mb-4">
          Pastikan informasi yang akan Anda kirim sudah benar.
        </p>

        <!-- Stepper -->
        <ol class="nav nav-pills nav-fill gap-2 mb-4 small text-center" aria-label="Tahapan pelaporan">
          <li class="nav-item">
            <a class="nav-link h-100 bg-success-subtle text-success-emphasis d-flex flex-column flex-sm-row align-items-center justify-content-center gap-1 gap-sm-2 px-1 px-sm-2" href="data-diri.html">
              <span class="badge rounded-pill text-bg-success"><i class="fa-solid fa-check" aria-hidden="true"></i></span><span>Data Diri</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link h-100 bg-success-subtle text-success-emphasis d-flex flex-column flex-sm-row align-items-center justify-content-center gap-1 gap-sm-2 px-1 px-sm-2" href="detail-kejadian.html">
              <span class="badge rounded-pill text-bg-success"><i class="fa-solid fa-check" aria-hidden="true"></i></span><span>Detail Kejadian</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link h-100 bg-success-subtle text-success-emphasis d-flex flex-column flex-sm-row align-items-center justify-content-center gap-1 gap-sm-2 px-1 px-sm-2" href="pelaku-bukti.html">
              <span class="badge rounded-pill text-bg-success"><i class="fa-solid fa-check" aria-hidden="true"></i></span><span>Pelaku &amp; Bukti</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link h-100 active d-flex flex-column flex-sm-row align-items-center justify-content-center gap-1 gap-sm-2 px-1 px-sm-2" href="konfirmasi.html" aria-current="step">
              <span class="badge rounded-pill bg-white text-primary">4</span><span>Konfirmasi</span>
            </a>
          </li>
        </ol>

        <section class="card border-0 shadow-sm">
          <div class="card-body p-4">
            <h2 class="h5 fw-bold mb-1">Konfirmasi Laporan</h2>
            <p class="form-text mb-4">
              Periksa kembali seluruh informasi sebelum mengirim laporan.
            </p>

            <!-- DATA DIRI -->
            <section class="border-bottom pb-3 mb-3">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="h6 fw-bold mb-0">Data Diri</h3>
                <button type="button"
                  class="btn btn-sm btn-outline-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#modalDataDiri">
                  <i class="fa-solid fa-pen me-1"></i> Ubah
                </button>
              </div>

              <dl class="row small mb-0">
                <dt class="col-sm-4 text-body-secondary fw-normal">Jenis Pelaporan</dt>
                <dd class="col-sm-8 fw-semibold" id="view-jenis-pelaporan">Teridentifikasi</dd>

                <dt class="col-sm-4 text-body-secondary fw-normal">NIM / NIP</dt>
                <dd class="col-sm-8 fw-semibold" id="view-nim">1234567890</dd>

                <dt class="col-sm-4 text-body-secondary fw-normal">Email</dt>
                <dd class="col-sm-8 fw-semibold" id="view-email">pelapor@example.com</dd>

                <dt class="col-sm-4 text-body-secondary fw-normal d-none" id="view-anonim-label">Informasi anonim</dt>
                <dd class="col-sm-8 fw-semibold d-none" id="view-anonim-deskripsi">
                  Identitas seperti NIM/NIP dan email tidak dicantumkan. Anda tetap dapat melaporkan kejadian tanpa mengisi data tersebut.
                </dd>
              </dl>
            </section>

            <!-- DETAIL KEJADIAN -->
            <section class="border-bottom pb-3 mb-3">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="h6 fw-bold mb-0">Detail Kejadian</h3>
                <button type="button"
                  class="btn btn-sm btn-outline-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#modalKejadian">
                  <i class="fa-solid fa-pen me-1"></i> Ubah
                </button>
              </div>

              <dl class="row small mb-0">
                <dt class="col-sm-4 text-body-secondary fw-normal">Kategori Kasus</dt>
                <dd class="col-sm-8 fw-semibold" id="view-kategori-kasus">Verbal</dd>

                <dt class="col-sm-4 text-body-secondary fw-normal">Tanggal Kejadian</dt>
                <dd class="col-sm-8 fw-semibold" id="view-tanggal">15 Oktober 2026</dd>

                <dt class="col-sm-4 text-body-secondary fw-normal">Lokasi</dt>
                <dd class="col-sm-8 fw-semibold" id="view-lokasi">Ruang Kelas</dd>

                <dt class="col-sm-4 text-body-secondary fw-normal">Kronologi</dt>
                <dd class="col-sm-8 fw-semibold text-break" id="view-kronologi">
                  Setelah perkuliahan, saya menerima komentar yang membuat saya tidak nyaman.
                  Saya ingin kejadian ini ditinjau oleh pihak yang berwenang.
                </dd>
              </dl>
            </section>

            <!-- PELAKU DAN BUKTI -->
            <section>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="h6 fw-bold mb-0">Pelaku dan Bukti</h3>
                <button type="button"
                  class="btn btn-sm btn-outline-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#modalPelaku">
                  <i class="fa-solid fa-pen me-1"></i> Ubah
                </button>
              </div>

              <dl class="row small mb-0">
                <dt class="col-sm-4 text-body-secondary fw-normal">Kategori Pelaku</dt>
                <dd class="col-sm-8 fw-semibold" id="view-kategori-pelaku">Dosen</dd>

                <dt class="col-sm-4 text-body-secondary fw-normal">Deskripsi Pelaku</dt>
                <dd class="col-sm-8 fw-semibold text-break" id="view-deskripsi-pelaku">
                  Dosen pengampu mata kuliah; identitas rinci disampaikan kepada petugas.
                </dd>

                <dt class="col-sm-4 text-body-secondary fw-normal">Tingkat Urgensi</dt>
                <dd class="col-sm-8 fw-semibold" id="view-urgensi">4 - Sangat tinggi</dd>

                <dt class="col-sm-4 text-body-secondary fw-normal">Bukti Pendukung</dt>
                <dd class="col-sm-8 fw-semibold text-break" id="view-bukti">
                  Belum ada bukti pendukung.
                </dd>
              </dl>
            </section>

            <div class="alert alert-info mt-4 mb-0 small">
              <i class="fa-solid fa-circle-info me-2"></i>
              Pastikan informasi yang Anda berikan benar dan sesuai dengan kejadian
              yang dilaporkan.
            </div>

            <div class="d-flex justify-content-between gap-2 mt-4">
              <a href="pelaku-bukti.html" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left me-2"></i>Kembali
              </a>

              <a href="berhasil.html" class="btn btn-success">
                <i class="fa-solid fa-paper-plane me-2"></i>Kirim Laporan
              </a>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>

  <!-- MODAL DATA DIRI -->
  <div class="modal fade" id="modalDataDiri" tabindex="-1"
    aria-labelledby="judulDataDiri" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form id="formDataDiri" class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-5" id="judulDataDiri">Ubah Data Diri</h2>
            <button type="button" class="btn-close"
              data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>

          <div class="modal-body overflow-y-auto">
            <div class="mb-3">
              <label for="jenisPelaporan" class="form-label">Jenis Pelaporan</label>
              <select class="form-select" id="jenisPelaporan" required>
                <option value="Teridentifikasi">Teridentifikasi</option>
                <option value="Anonim">Anonim</option>
              </select>
            </div>

            <div class="mb-3" id="identitas-nim">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim"
                value="1234567890" required>
            </div>

            <div id="identitas-email">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email"
                value="pelapor@example.com" required>
            </div>

            <div class="alert alert-info mb-0 d-none" id="deskripsi-anonim" role="status" aria-live="polite">
              Anda memilih melapor secara anonim. NIM/NIP dan email tidak perlu diisi; laporan tetap dapat dikirim tanpa mencantumkan identitas tersebut.
            </div>
          </div>

          <div class="modal-footer flex-shrink-0">
            <button type="button" class="btn btn-outline-secondary"
              data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">
  Simpan Perubahan
</button>
          </div>
        </form>
    </div>
  </div>

  <!-- MODAL DETAIL KEJADIAN -->
  <div class="modal fade" id="modalKejadian" tabindex="-1"
    aria-labelledby="judulKejadian" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form id="formKejadian" class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-5" id="judulKejadian">Ubah Detail Kejadian</h2>
            <button type="button" class="btn-close"
              data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>

          <div class="modal-body overflow-y-auto">
            <div class="mb-3">
              <label for="kategoriKasus" class="form-label">Kategori Kasus</label>
              <select class="form-select" id="kategoriKasus" required>
                <option value="Verbal">Verbal</option>
                <option value="Fisik">Non Verbal</option>
                <option value="Nonfisik">Cyberbullying</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal Kejadian</label>
              <input type="date" class="form-control" id="tanggal"
                value="2026-10-15" required>
            </div>

            <div class="mb-3">
              <label for="lokasi" class="form-label">Lokasi</label>
              <select class="form-select" id="lokasi" required>
                <option value="">Pilih lokasi</option>
                <option value="ruang-kelas">Ruang Kelas</option>
                <option value="laboratorium">Laboratorium</option>
                <option value="perpustakaan">Perpustakaan</option>
                <option value="kantin">Kantin</option>
                <option value="toilet">Toilet</option>
                <option value="area-kampus">Area Kampus Lainnya</option>
                <option value="online">Media Digital / Online</option>
                <option value="lainnya">Lokasi Lainnya</option>
              </select>
            </div>

            <div>
              <label for="kronologi" class="form-label">Kronologi</label>
              <textarea class="form-control" id="kronologi"
                rows="5" required>Setelah perkuliahan, saya menerima komentar yang membuat saya tidak nyaman. Saya ingin kejadian ini ditinjau oleh pihak yang berwenang.</textarea>
            </div>
          </div>

          <div class="modal-footer flex-shrink-0">
            <button type="button" class="btn btn-outline-secondary"
              data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">
  Simpan Perubahan
</button>
          </div>
        </form>
    </div>
  </div>

  <!-- MODAL PELAKU DAN BUKTI -->
  <div class="modal fade" id="modalPelaku" tabindex="-1"
    aria-labelledby="judulPelaku" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <form id="formPelaku" class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title fs-5" id="judulPelaku">Ubah Pelaku dan Bukti</h2>
            <button type="button" class="btn-close"
              data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>

          <div class="modal-body overflow-y-auto">
            <div class="mb-3">
              <fieldset class="border-0 p-0" aria-describedby="kategori-pelaku-lainnya-help">
                <legend class="form-label">Kategori Pelaku</legend>
                <div class="row g-2">
                  <div class="col-12 col-md-6">
                    <input class="btn-check" type="radio" name="kategoriPelaku" id="kategoriPelakuMahasiswa" value="mahasiswa" data-label="Mahasiswa" autocomplete="off" required>
                    <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-start gap-3 text-start p-3" for="kategoriPelakuMahasiswa">
                      <i class="fa-solid fa-user-graduate fa-fw fs-4" aria-hidden="true"></i>
                      <span><span class="fw-semibold d-block">Mahasiswa</span><span class="small d-block">Mahasiswa di lingkungan kampus.</span></span>
                    </label>
                  </div>
                  <div class="col-12 col-md-6">
                    <input class="btn-check" type="radio" name="kategoriPelaku" id="kategoriPelakuDosen" value="dosen" data-label="Dosen" autocomplete="off">
                    <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-start gap-3 text-start p-3" for="kategoriPelakuDosen">
                      <i class="fa-solid fa-chalkboard-user fa-fw fs-4" aria-hidden="true"></i>
                      <span><span class="fw-semibold d-block">Dosen</span><span class="small d-block">Pengajar atau dosen kampus.</span></span>
                    </label>
                  </div>
                  <div class="col-12 col-md-6">
                    <input class="btn-check" type="radio" name="kategoriPelaku" id="kategoriPelakuTendik" value="tenaga-kependidikan" data-label="Tenaga kependidikan" autocomplete="off">
                    <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-start gap-3 text-start p-3" for="kategoriPelakuTendik">
                      <i class="fa-solid fa-briefcase fa-fw fs-4" aria-hidden="true"></i>
                      <span><span class="fw-semibold d-block">Tenaga kependidikan</span><span class="small d-block">Staf atau pegawai kampus.</span></span>
                    </label>
                  </div>
                  <div class="col-12 col-md-6">
                    <input class="btn-check" type="radio" name="kategoriPelaku" id="pelakuKategoriLainnya" value="lainnya" data-label="Lainnya" autocomplete="off">
                    <label class="btn btn-outline-primary w-100 h-100 d-flex align-items-start gap-3 text-start p-3" for="pelakuKategoriLainnya">
                      <i class="fa-solid fa-ellipsis fa-fw fs-4" aria-hidden="true"></i>
                      <span><span class="fw-semibold d-block">Lainnya</span><span class="small d-block">Kategori selain pilihan di atas.</span></span>
                    </label>
                  </div>
                </div>

                <div class="mt-3 d-none" id="kategoriPelakuLainnyaWrapper">
                  <label for="kategoriPelakuLainnyaInput" class="form-label">Sebutkan kategori pelaku <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="kategoriPelakuLainnyaInput" name="kategori_pelaku_lainnya" maxlength="100" placeholder="Contoh: pengunjung atau keluarga mahasiswa" aria-describedby="kategori-pelaku-lainnya-help" disabled>
                  <div class="form-text" id="kategori-pelaku-lainnya-help">Tuliskan kategori yang paling sesuai, maksimal 100 karakter.</div>
                </div>
              </fieldset>
            </div>

            <div class="mb-3">
              <label for="deskripsiPelaku" class="form-label">Deskripsi Pelaku</label>
              <textarea class="form-control" id="deskripsiPelaku"
                rows="3" required>Dosen pengampu mata kuliah; identitas rinci disampaikan kepada petugas.</textarea>
            </div>

            <div class="mb-3">
              <label for="urgensi" class="form-label">Tingkat urgensi/keparahan kasus</label>
              <select class="form-select" id="urgensi" required>
                <option value="">Pilih tingkat urgensi</option>
                <option value="1">1 - Rendah: kejadian telah berhenti dan Anda merasa aman saat ini</option>
                <option value="2">2 - Sedang: kejadian berdampak pada Anda, tetapi tidak ada ancaman langsung</option>
                <option value="3">3 - Tinggi: kejadian berulang atau masih berlangsung dan membuat Anda merasa tidak aman</option>
                <option value="4">4 - Sangat tinggi: terdapat ancaman serius atau kekhawatiran kuat akan kejadian berulang dalam waktu dekat</option>
                <option value="5">5 - Darurat: Anda atau orang lain sedang menghadapi bahaya langsung atau membutuhkan pertolongan segera</option>
              </select>
              <div class="form-text">Pilih tingkat yang menggambarkan kekhawatiran Anda.</div>
            </div>

            <div>
              <label for="bukti" class="form-label">
                Unggah Bukti Pendukung <span class="text-body-secondary">(Opsional)</span>
              </label>
              <input type="file" class="form-control" id="bukti" accept=".jpg,.jpeg,.png,.pdf" multiple>
              <div class="form-text">Pilih satu atau beberapa file JPG, PNG, atau PDF. Anda dapat menambahkan file lagi; maksimal 10 MB per file.</div>
              <div class="alert alert-danger d-none mt-3 mb-0" id="bukti-error" role="alert"></div>
              <div class="row g-3 mt-1" id="bukti-preview-list" aria-live="polite">
                <div class="col-12 text-body-secondary small" id="bukti-empty">
                  Belum ada bukti yang dipilih.
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer flex-shrink-0">
            <button type="button" class="btn btn-outline-secondary"
              data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">
  Simpan Perubahan
</button>
          </div>
        </form>
    </div>
  </div>

  <div id="app-footer"></div>

  <div class="modal fade" id="modalPreviewBukti" tabindex="-1"
    aria-labelledby="judulPreviewBukti" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-fullscreen-lg-down">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5 text-break" id="judulPreviewBukti">Pratinjau bukti</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup pratinjau"></button>
        </div>
        <div class="modal-body text-center">
          <div class="alert alert-danger d-none text-start" id="previewBuktiError" role="alert">
            Pratinjau tidak dapat ditampilkan. Berkas mungkin tidak tersedia atau tidak dapat dibuka.
          </div>
          <img class="img-fluid d-none mx-auto" id="previewBuktiImage" alt="">
          <div class="ratio ratio-4x3 d-none" id="previewBuktiPdfContainer">
            <iframe id="previewBuktiPdf" title="Pratinjau dokumen PDF"></iframe>
          </div>
          <a class="btn btn-outline-primary mt-3 d-none" id="previewBuktiOpen" target="_blank" rel="noopener">
            <i class="fa-solid fa-arrow-up-right-from-square me-1" aria-hidden="true"></i>
            Buka berkas di tab baru
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Logika edit -->
<script>

const $ = (id) => document.getElementById(id);

const fields = {
  modalDataDiri: {
    jenisPelaporan: "view-jenis-pelaporan",
    nim: "view-nim",
    email: "view-email"
  },
  modalKejadian: {
    kategoriKasus: "view-kategori-kasus",
    tanggal: "view-tanggal",
    lokasi: "view-lokasi",
    kronologi: "view-kronologi"
  },
  modalPelaku: {
    deskripsiPelaku: "view-deskripsi-pelaku",
    urgensi: "view-urgensi",
  }
};

let evidenceFiles = [];
let activePreviewUrl;
let reopenEvidenceModal = false;
const evidenceList = $("bukti-preview-list");
const evidenceError = $("bukti-error");
const evidenceModal = $("modalPelaku");
const previewModal = $("modalPreviewBukti");
const previewImage = $("previewBuktiImage");
const previewPdf = $("previewBuktiPdf");
const previewPdfContainer = $("previewBuktiPdfContainer");
const previewOpenLink = $("previewBuktiOpen");

function renderEvidence() {
  evidenceList.replaceChildren();
  if (!evidenceFiles.length) {
    const empty = document.createElement("div");
    empty.className = "col-12 text-body-secondary small";
    empty.textContent = "Belum ada bukti yang dipilih.";
    evidenceList.append(empty);
    return;
  }

  evidenceFiles.forEach((file, index) => {
    const isPdf = file.name.toLowerCase().endsWith(".pdf");
    const column = document.createElement("div");
    column.className = "col-12 col-lg-6";
    column.innerHTML = `
      <div class="d-flex align-items-center gap-3 border rounded-3 p-3">
        <i class="fa-regular ${isPdf ? "fa-file-pdf text-danger" : "fa-image text-primary"} fs-3" aria-hidden="true"></i>
        <div class="flex-grow-1 overflow-hidden">
          <div class="fw-semibold text-truncate"></div>
          <div class="small text-body-secondary">${isPdf ? "PDF" : file.name.split(".").pop().toUpperCase()} · ${(file.size / 1024 / 1024).toFixed(2)} MB</div>
        </div>
        <button type="button" class="btn btn-sm btn-outline-primary flex-shrink-0" data-preview-index="${index}">
          <i class="fa-regular fa-eye me-sm-1" aria-hidden="true"></i>
          <span class="d-none d-sm-inline">Lihat</span>
          <span class="visually-hidden"> pratinjau</span>
        </button>
        <button type="button" class="btn btn-sm btn-outline-danger flex-shrink-0" data-remove-index="${index}">
          <i class="fa-solid fa-trash" aria-hidden="true"></i>
        </button>
      </div>`;
    column.querySelector(".fw-semibold").textContent = file.name;
    const removeButton = column.querySelector("[data-remove-index]");
    removeButton.setAttribute("aria-label", `Hapus ${file.name}`);
    evidenceList.append(column);
  });
}

$("bukti").addEventListener("change", (event) => {
  const files = [...event.target.files];
  const validFiles = files.filter((file) =>
    /\.(jpe?g|png|pdf)$/i.test(file.name) && file.size <= 10 * 1024 * 1024
  );
  evidenceError.classList.toggle("d-none", validFiles.length === files.length);
  evidenceError.textContent = "Pilih file JPG, PNG, atau PDF dengan ukuran maksimal 10 MB per file.";
  evidenceFiles.push(...validFiles.filter((file) => !evidenceFiles.some((existing) =>
    existing.name === file.name && existing.size === file.size && existing.lastModified === file.lastModified
  )));
  event.target.value = "";
  renderEvidence();
});

evidenceList.addEventListener("click", (event) => {
  const preview = event.target.closest("[data-preview-index]");
  const remove = event.target.closest("[data-remove-index]");
  if (remove) {
    evidenceFiles.splice(Number(remove.dataset.removeIndex), 1);
    renderEvidence();
  } else if (preview) {
    const file = evidenceFiles[Number(preview.dataset.previewIndex)];
    activePreviewUrl = URL.createObjectURL(file);
    $("judulPreviewBukti").textContent = file.name;
    $("previewBuktiError").classList.add("d-none");
    previewImage.classList.add("d-none");
    previewPdfContainer.classList.add("d-none");
    previewOpenLink.href = activePreviewUrl;
    previewOpenLink.classList.remove("d-none");
    if (file.name.toLowerCase().endsWith(".pdf")) {
      previewPdf.src = activePreviewUrl;
      previewPdfContainer.classList.remove("d-none");
    } else {
      previewImage.alt = `Pratinjau ${file.name}`;
      previewImage.onload = () => previewImage.classList.remove("d-none");
      previewImage.onerror = () => $("previewBuktiError").classList.remove("d-none");
      previewImage.src = activePreviewUrl;
    }
    reopenEvidenceModal = true;
    bootstrap.Modal.getOrCreateInstance(evidenceModal).hide();
  }
});

evidenceModal.addEventListener("hidden.bs.modal", () => {
  if (reopenEvidenceModal) {
    reopenEvidenceModal = false;
    bootstrap.Modal.getOrCreateInstance(previewModal).show();
  }
});

previewModal.addEventListener("hidden.bs.modal", () => {
  previewImage.removeAttribute("src");
  previewPdf.removeAttribute("src");
  if (activePreviewUrl) URL.revokeObjectURL(activePreviewUrl);
  activePreviewUrl = null;
  bootstrap.Modal.getOrCreateInstance(evidenceModal).show();
});

// Sinkronkan ringkasan dengan formulir saat modal dibuka.
document.querySelectorAll(".modal").forEach((modal) => {
  modal.addEventListener("show.bs.modal", () => {
    Object.entries(fields[modal.id] || {}).forEach(([input, output]) => {
      let value = $(output).textContent.trim();

      if (input === "tanggal") {
        const match = value.match(/^(\d{1,2}) (\w+) (\d{4})$/);
        const months = [
          "Januari", "Februari", "Maret", "April", "Mei", "Juni",
          "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        if (match) {
          const month = months.indexOf(match[2]);
          $(input).value = month < 0 ? "" :
            `${match[3]}-${String(month + 1).padStart(2, "0")}-${String(match[1]).padStart(2, "0")}`;
        } else {
          $(input).value = "";
        }
      } else if (input === "urgensi") {
        $(input).value = value.split(" - ")[0];
      } else if (input === "lokasi") {
        $(input).value = [...$(input).options].find(
          (option) => option.text === value
        )?.value || "";
      } else {
        $(input).value = value === "-" ? "" : value;
      }
    });

    if (modal.id === "modalDataDiri") updateIdentity();
    if (modal.id === "modalPelaku") {
      const category = $("view-kategori-pelaku").textContent.trim();
      const options = [...document.querySelectorAll('[name="kategoriPelaku"]')];
      const matchingOption = options.find(
        (option) => option.dataset.label.toLowerCase() === category.toLowerCase()
      );
      (matchingOption || $("pelakuKategoriLainnya")).checked = true;
      $("kategoriPelakuLainnyaInput").value = matchingOption ? "" : category;
      updateOtherCategory();
    }
  });
});

// Atur field identitas berdasarkan jenis pelaporan.
function updateIdentity() {
  const anonymous = $("jenisPelaporan").value === "Anonim";

  ["identitas-nim", "identitas-email"].forEach((id) => {
    $(id).classList.toggle("d-none", anonymous);
  });

  $("deskripsi-anonim").classList.toggle("d-none", !anonymous);
  $("nim").required = !anonymous;
  $("email").required = !anonymous;
  $("nim").disabled = anonymous;
  $("email").disabled = anonymous;
}

$("jenisPelaporan").addEventListener("change", updateIdentity);
updateIdentity();

function updateOtherCategory() {
  const isOther = $("pelakuKategoriLainnya").checked;
  $("kategoriPelakuLainnyaWrapper").classList.toggle("d-none", !isOther);
  $("kategoriPelakuLainnyaInput").disabled = !isOther;
  $("kategoriPelakuLainnyaInput").required = isOther;
}

document.querySelectorAll('[name="kategoriPelaku"]').forEach((radio) => {
  radio.addEventListener("change", updateOtherCategory);
});
updateOtherCategory();

// Simpan perubahan dan perbarui ringkasan.
Object.entries(fields).forEach(([modalId, mapping]) => {
  const form = $(modalId).querySelector("form");

  form.addEventListener("submit", (event) => {
    event.preventDefault();

    if (!form.reportValidity()) return;

    const anonymous = modalId === "modalDataDiri" &&
      $("jenisPelaporan").value === "Anonim";

    Object.entries(mapping).forEach(([input, output]) => {
      let value = $(input).value.trim();

      if (input === "tanggal" && value) {
        const [year, month, day] = value.split("-");
        value = new Date(+year, +month - 1, +day).toLocaleDateString(
          "id-ID",
          { day: "numeric", month: "long", year: "numeric" }
        );
      }

      if (input === "urgensi") {
        value = $(input).selectedOptions[0].text;
      } else if (input === "lokasi") {
        value = $(input).selectedOptions[0].text;
      }

      if (input === "nim" || input === "email") {
        $(output).classList.toggle("d-none", anonymous);
      }

      $(output).textContent =
        anonymous && (input === "nim" || input === "email")
          ? ""
          : value || "-";
    });

    if (modalId === "modalPelaku") {
      $("view-kategori-pelaku").textContent = $("pelakuKategoriLainnya").checked
        ? $("kategoriPelakuLainnyaInput").value.trim()
        : document.querySelector('[name="kategoriPelaku"]:checked').dataset.label;
      $("view-bukti").textContent = evidenceFiles.length
        ? evidenceFiles.map((file) => file.name).join(", ")
        : "Belum ada bukti pendukung.";
    }

    if (modalId === "modalDataDiri") {
      $("view-anonim-label").classList.toggle("d-none", !anonymous);
      $("view-anonim-deskripsi").classList.toggle("d-none", !anonymous);
    }

    bootstrap.Modal.getOrCreateInstance($(modalId)).hide();
  });
});
  </script>
</body>
</html>
