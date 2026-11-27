<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Laporan | RuangAman</title>
  <script type="module" src="assets/js/layout.js"></script>
</head>
<body class="bg-light">
  <div id="app-navbar"></div>
  <main class="container py-4">
    <div class="mb-4">
      <h1 class="h3 fw-bold mt-3 mb-1">Detail Laporan</h1>
      <p class="text-body-secondary mb-0">Pantau perkembangan laporan dan komunikasi dengan Satgas.</p>
    </div>

    <section class="card border-0 shadow-sm rounded-4 mb-3" aria-label="Ringkasan laporan">
      <div class="card-body p-3 p-md-4">
        <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
          <div>
            <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
              <i class="fa-regular fa-file-lines text-primary fs-4" aria-hidden="true"></i>
              <h2 class="h5 font-monospace fw-bold mb-0">RA-20260928-7F3K9</h2>
              <button type="button" class="btn btn-sm btn-outline-secondary" aria-label="Salin nomor tiket" onclick="navigator.clipboard.writeText('RA-20260928-7F3K9')">
                <i class="fa-regular fa-copy" aria-hidden="true"></i>
              </button>
              <span class="badge rounded-pill text-bg-primary">Dalam Penanganan</span>
            </div>
            <p class="small text-body-secondary mb-2">Dikirim 28 September 2026, 10.24</p>
            <p class="small text-body-secondary mb-0">Verbal <span class="mx-1">·</span> Ruang Kelas B, Gedung A</p>
          </div>
          <div class="text-md-end">
            <div class="small text-body-secondary mb-1">Tingkat urgensi/keparahan</div>
            <span class="badge rounded-pill text-bg-danger fs-6">4 / 5 · Tinggi</span>
          </div>
        </div>
      </div>
    </section>

    <section class="card border-0 shadow-sm rounded-4 mb-4" aria-labelledby="status-laporan">
      <div class="card-body p-3 p-md-4">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
          <h2 class="h6 fw-bold mb-0" id="status-laporan">Status Laporan</h2>
          <span class="small text-body-secondary">Pembaruan terakhir: 1 Oktober 2026, 09.12</span>
        </div>
        <div class="progress mb-3" role="progressbar" aria-label="Progres penanganan laporan" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar w-75"></div>
        </div>
        <ol class="row row-cols-2 row-cols-md-4 g-3 list-unstyled text-center mb-0">
          <li class="col">
            <span class="badge rounded-pill text-bg-success mb-2"><i class="fa-solid fa-check" aria-hidden="true"></i></span>
            <div class="small fw-semibold">Dikirim</div>
            <div class="small text-body-secondary">28 Sep · 10.24</div>
          </li>
          <li class="col">
            <span class="badge rounded-pill text-bg-success mb-2"><i class="fa-solid fa-check" aria-hidden="true"></i></span>
            <div class="small fw-semibold">Verifikasi</div>
            <div class="small text-body-secondary">28 Sep · 14.10</div>
          </li>
          <li class="col" aria-current="step">
            <span class="badge rounded-pill text-bg-primary mb-2"><i class="fa-solid fa-clock" aria-hidden="true"></i></span>
            <div class="small fw-semibold text-primary">Dalam Penanganan</div>
            <div class="small text-body-secondary">1 Okt · 09.12</div>
          </li>
          <li class="col">
            <span class="badge rounded-pill text-bg-secondary mb-2"><i class="fa-solid fa-flag-checkered" aria-hidden="true"></i></span>
            <div class="small text-body-secondary">Selesai</div>
            <div class="small text-body-secondary">Menunggu proses</div>
          </li>
        </ol>
      </div>
    </section>

    <section class="card border-0 shadow-sm rounded-4 overflow-hidden">
      <nav class="nav nav-tabs flex-nowrap overflow-x-auto px-3 pt-2" role="tablist" aria-label="Detail laporan">
        <button class="nav-link active text-nowrap" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="true">
          <i class="fa-regular fa-file-lines me-1" aria-hidden="true"></i>Informasi
        </button>
        <button class="nav-link text-nowrap" id="lampiran-tab" data-bs-toggle="tab" data-bs-target="#lampiran" type="button" role="tab" aria-controls="lampiran" aria-selected="false">
          <i class="fa-solid fa-paperclip me-1" aria-hidden="true"></i>Lampiran
        </button>
        <button class="nav-link text-nowrap" id="percakapan-tab" data-bs-toggle="tab" data-bs-target="#percakapan" type="button" role="tab" aria-controls="percakapan" aria-selected="false">
          <i class="fa-regular fa-message me-1" aria-hidden="true"></i>Percakapan <span class="badge rounded-pill text-bg-primary ms-1">2</span>
        </button>
      </nav>
      <div class="tab-content p-3 p-md-4">
        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
          <h2 class="h5 fw-bold mb-3">Informasi Laporan</h2>
          <dl class="row g-0 small mb-0">
            <dt class="col-5 col-md-3 py-2 border-bottom text-body-secondary fw-normal">Jenis pelaporan</dt><dd class="col-7 col-md-9 py-2 border-bottom mb-0">Teridentifikasi</dd>
            <dt class="col-5 col-md-3 py-2 border-bottom text-body-secondary fw-normal">NIM</dt><dd class="col-7 col-md-9 py-2 border-bottom mb-0">1234567890</dd>
            <dt class="col-5 col-md-3 py-2 border-bottom text-body-secondary fw-normal">Email aktif</dt><dd class="col-7 col-md-9 py-2 border-bottom mb-0 text-break">pelapor@example.com</dd>
            <dt class="col-5 col-md-3 py-2 border-bottom text-body-secondary fw-normal">Tanggal kejadian</dt><dd class="col-7 col-md-9 py-2 border-bottom mb-0">28 September 2026</dd>
            <dt class="col-5 col-md-3 py-2 border-bottom text-body-secondary fw-normal">Kategori pelapor</dt><dd class="col-7 col-md-9 py-2 border-bottom mb-0">Mahasiswa</dd>
            <dt class="col-5 col-md-3 py-2 border-bottom text-body-secondary fw-normal">Kategori pelaku</dt><dd class="col-7 col-md-9 py-2 border-bottom mb-0">Mahasiswa</dd>
            <dt class="col-5 col-md-3 py-2 border-bottom text-body-secondary fw-normal">Kategori kasus</dt><dd class="col-7 col-md-9 py-2 border-bottom mb-0">Verbal</dd>
            <dt class="col-5 col-md-3 py-2 border-bottom text-body-secondary fw-normal">Lokasi kejadian</dt><dd class="col-7 col-md-9 py-2 border-bottom mb-0">Ruang Kelas B, Gedung A</dd>
          </dl>
          <h3 class="h6 fw-bold mt-4 mb-2">Kronologi Kejadian</h3>
          <p class="small text-body-secondary mb-0">Saya mendapatkan komentar yang tidak pantas dari teman sekelas saat kegiatan perkuliahan berlangsung. Kejadian tersebut membuat saya merasa tidak nyaman.</p>
          <div class="alert alert-info d-flex gap-3 small mt-4 mb-0" role="note">
            <i class="fa-solid fa-shield-halved fs-5" aria-hidden="true"></i>
            <div><strong>Jaga kerahasiaan tiket.</strong> Jangan bagikan kode tiket atau kode akses kepada orang lain.</div>
          </div>
        </div>
        <div class="tab-pane fade" id="lampiran" role="tabpanel" aria-labelledby="lampiran-tab" tabindex="0">
          <h2 class="h5 fw-bold mb-3">Bukti Pendukung</h2>
          <p class="small text-body-secondary">Berkas yang Anda lampirkan pada laporan.</p>
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center gap-3 border rounded-3 p-3">
                <i class="fa-regular fa-image fs-3 text-primary" aria-hidden="true"></i>
                <div class="flex-grow-1 overflow-hidden"><div class="fw-semibold text-truncate">bukti-foto.jpg</div><div class="small text-body-secondary">JPG · 1.2 MB</div></div>
                <button class="btn btn-sm btn-outline-primary flex-shrink-0" type="button" data-bs-toggle="modal" data-bs-target="#preview-modal" data-preview-src="assets/uploads/bukti-foto.jpg" data-preview-type="image" data-preview-name="bukti-foto.jpg" aria-label="Pratinjau bukti-foto.jpg"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex align-items-center gap-3 border rounded-3 p-3">
                <i class="fa-regular fa-file-pdf fs-3 text-danger" aria-hidden="true"></i>
                <div class="flex-grow-1 overflow-hidden"><div class="fw-semibold text-truncate">bukti-dokumen.pdf</div><div class="small text-body-secondary">PDF · 856 KB</div></div>
                <button class="btn btn-sm btn-outline-primary flex-shrink-0" type="button" data-bs-toggle="modal" data-bs-target="#preview-modal" data-preview-src="assets/uploads/bukti-dokumen.pdf" data-preview-type="pdf" data-preview-name="bukti-dokumen.pdf" aria-label="Pratinjau bukti-dokumen.pdf"><i class="fa-regular fa-eye" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="percakapan" role="tabpanel" aria-labelledby="percakapan-tab" tabindex="0">
          <div class="d-flex align-items-center gap-3 border-bottom pb-3 mb-3">
            <span class="rounded-circle bg-primary-subtle text-primary d-inline-flex align-items-center justify-content-center p-3"><i class="fa-solid fa-user-shield" aria-hidden="true"></i></span>
            <div>
              <h2 class="h6 fw-bold mb-1">Petugas PPKS</h2>
              <span class="small text-success"><i class="fa-solid fa-circle me-1" aria-hidden="true"></i>Online</span>
            </div>
          </div>
          <div id="conversation" class="d-flex flex-column gap-3 bg-body-tertiary rounded-3 p-3 mb-3" aria-live="polite">
            <div class="align-self-start bg-white border rounded-3 p-3">
              <p class="small mb-1">Halo, kami sedang meninjau laporan Anda. Apakah Anda bersedia memberikan informasi tambahan mengenai waktu kejadian?</p>
              <time class="small text-body-secondary">18 Okt · 09.15</time>
            </div>
            <div class="align-self-end bg-primary text-white rounded-3 p-3">
              <p class="small mb-1">Kejadian berlangsung setelah perkuliahan selesai, sekitar pukul 15.00.</p>
              <time class="small">18 Okt · 09.32</time>
            </div>
            <div class="align-self-start bg-white border rounded-3 p-3">
              <p class="small mb-1">Terima kasih atas informasinya. Tim kami akan melanjutkan proses verifikasi.</p>
              <time class="small text-body-secondary">18 Okt · 09.40</time>
            </div>
          </div>
          <form id="message-form" class="d-flex gap-2">
            <label for="message" class="visually-hidden">Tulis pesan</label>
            <input id="message" class="form-control" placeholder="Tulis pesan..." maxlength="2000" required>
            <button class="btn btn-primary text-nowrap" type="submit"><i class="fa-solid fa-paper-plane me-sm-1" aria-hidden="true"></i><span class="d-none d-sm-inline">Kirim</span></button>
          </form>
          <p class="form-text mb-0">Pesan hanya dapat dibaca oleh Anda dan petugas yang menangani laporan.</p>
        </div>
      </div>
    </section>
  </main>
  <div id="app-footer"></div>

  <div class="modal fade" id="preview-modal" tabindex="-1" aria-labelledby="preview-title" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-fullscreen-lg-down">
      <div class="modal-content">
        <div class="modal-header"><h2 class="modal-title fs-5 text-break" id="preview-title">Pratinjau bukti</h2><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Tutup"></button></div>
        <div class="modal-body text-center"><div class="alert alert-danger d-none" id="preview-error" role="alert">Berkas tidak tersedia untuk pratinjau.</div><img class="img-fluid d-none mx-auto" id="preview-image" alt=""><div class="ratio ratio-4x3 d-none" id="preview-pdf"><iframe title="Pratinjau dokumen PDF"></iframe></div></div>
      </div>
    </div>
  </div>
  <script>
    const previewModal = document.getElementById("preview-modal");
    const previewImage = document.getElementById("preview-image");
    const previewPdf = document.querySelector("#preview-pdf iframe");
    const previewError = document.getElementById("preview-error");
    previewModal.addEventListener("show.bs.modal", (event) => {
      const { previewSrc, previewType, previewName } = event.relatedTarget.dataset;
      document.getElementById("preview-title").textContent = previewName;
      previewError.classList.add("d-none");
      previewImage.classList.add("d-none");
      document.getElementById("preview-pdf").classList.add("d-none");
      if (previewType === "image") {
        previewImage.onload = () => previewImage.classList.remove("d-none");
        previewImage.onerror = () => previewError.classList.remove("d-none");
        previewImage.src = previewSrc;
        previewImage.alt = `Pratinjau ${previewName}`;
      } else {
        document.getElementById("preview-pdf").classList.remove("d-none");
        previewPdf.src = previewSrc;
      }
    });
    previewModal.addEventListener("hidden.bs.modal", () => {
      previewImage.removeAttribute("src");
      previewPdf.removeAttribute("src");
    });
    const conversation = document.getElementById("conversation");
    document.getElementById("message-form").addEventListener("submit", (event) => {
      event.preventDefault();
      const input = document.getElementById("message");
      const message = input.value.trim();
      if (!message) return;
      const bubble = document.createElement("div");
      bubble.className = "align-self-end bg-primary text-white rounded-3 p-3";
      const text = document.createElement("p");
      text.className = "small mb-1";
      text.textContent = message;
      const time = document.createElement("time");
      time.className = "small";
      time.textContent = new Date().toLocaleTimeString("id-ID", { hour: "2-digit", minute: "2-digit" });
      bubble.append(text, time);
      conversation.append(bubble);
      input.value = "";
      conversation.scrollTop = conversation.scrollHeight;
    });
  </script>
</body>
</html>
