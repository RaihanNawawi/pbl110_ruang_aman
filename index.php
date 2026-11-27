<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script
    type="module"
    src="assets/js/layout.js"
  ></script>
</head>

<body>
  <!-- Navbar reusable -->
  <div id="app-navbar"></div>

  <!-- Konten khusus Beranda -->
  <main class="container py-4">

    <!-- 2. HERO SECTION -->
    <section class="bg-primary-subtle rounded-4 p-4 mb-4">
      <div>
        <span class="badge rounded-pill text-bg-primary mb-3">
          <i class="fa-solid fa-location-dot me-1"></i>
          Kampus Aman, Untuk Semua
        </span>

        <h1 class="h3 fw-bold mb-3">
          Laporkan Jika Anda Mengalami atau Mengetahui Kekerasan
        </h1>

        <p class="text-body-secondary mb-4">
          RuangAman adalah platform pelaporan kekerasan dan pelecehan di
          lingkungan kampus yang aman, rahasia, dan terpercaya.
        </p>

        <div class="d-flex flex-column gap-2">
          <!-- Button Buat Laporan -->
          <a
            href="data-diri.html"
            class="btn btn-primary w-100 py-2 d-flex align-items-center justify-content-center gap-2"
          >
            <i class="fa-solid fa-plus"></i>
            Buat Laporan Sekarang
            <i class="fa-solid fa-arrow-right"></i>
          </a>

          <!-- Button Lacak Laporan -->
          <a
            href="lacak-laporan.html"
            class="btn btn-outline-primary w-100 py-2"
          >
            <i class="fa-solid fa-magnifying-glass me-2"></i>
            Lacak Laporan Saya
          </a>
        </div>
      </div>
    </section>

    <!-- 4. KENAPA RUANGAMAN ? -->
    <section class="mb-4">
      <h2 class="h5 fw-bold mb-3"> Mengapa RuangAman?</h2>

      <div class="row g-3">
        <div class="col-12 col-sm-6 col-lg-4">
          <article class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body p-3 p-md-4">
              <div class="d-inline-flex rounded-3 p-3 mb-3 bg-primary-subtle text-primary">
                <i class="fa-solid fa-lock fa-fw fs-4"></i>
              </div>

              <h3 class="h6 fw-semibold mb-2">Aman &amp; Rahasia</h3>

              <p class="small text-body-secondary mb-0">Privasi pelapor menjadi prioritas.</p>
            </div>
          </article>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <article class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body p-3 p-md-4">
              <div class="d-inline-flex rounded-3 p-3 mb-3 bg-success-subtle text-success">
                <i class="fa-solid fa-shield-halved fa-fw fs-4"></i>
              </div>

              <h3 class="h6 fw-semibold mb-2">Ditangani Satgas</h3>

              <p class="small text-body-secondary mb-0">Laporan ditangani petugas berwenang.</p>
            </div>
          </article>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <article class="card h-100 border-0 shadow-sm text-center">
            <div class="card-body p-3 p-md-4">
              <div class="d-inline-flex rounded-3 p-3 mb-3 bg-info-subtle text-info-emphasis">
                <i class="fa-solid fa-file-circle-check fa-fw fs-4"></i>
              </div>

              <h3 class="h6 fw-semibold mb-2">Dokumentasi</h3>

              <p class="small text-body-secondary mb-0">Pantau perkembangan laporan.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- 5. INFORMASI PELAPORAN -->
    <section class="mb-4">
      <div class="card border-0 bg-primary-subtle">
        <div class="card-body d-flex gap-3">
          <div class="text-primary fs-3 lh-1">
            <i class="fa-solid fa-circle-info"></i>
          </div>

          <div>
            <h3 class="h6 fw-semibold">Apa saja yang bisa dilaporkan?</h3>

            <p class="small text-body-secondary mb-0">
              Kekerasan verbal, nonverbal, cyberbullying, dan
              bentuk kekerasan lainnya yang terjadi di lingkungan kampus.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. INFORMASI EDUKASI -->
    <section class="mb-4">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h2 class="h5 fw-bold mb-0">Informasi Edukasi</h2>

        <a href="edukasi.html" class="link-primary fw-semibold small text-decoration-none">
          Lihat Semua
          <i class="fa-solid fa-arrow-right ms-1"></i>
        </a>
      </div>

      <div class="row g-3">
        <div class="col-12 col-md-6">
          <article class="card h-100 border-0 shadow-sm">
            <div class="card-body d-flex gap-3">
              <div class="d-inline-flex rounded-3 p-3 bg-primary-subtle text-primary flex-shrink-0 align-self-start">
                <i class="fa-solid fa-book-open fa-fw fs-4"></i>
              </div>

              <div>
                <h3 class="h6 fw-semibold">Mengenal Bentuk Kekerasan di Kampus</h3>

                <p class="small text-body-secondary">
                  Pelajari bentuk kekerasan dan cara mengenali perilaku yang
                  tidak pantas.
                </p>

                <a href="detail-edukasi.html" class="link-primary fw-semibold small text-decoration-none">
                  Baca Selengkapnya
                  <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </article>
        </div>

        <div class="col-12 col-md-6">
          <article class="card h-100 border-0 shadow-sm">
            <div class="card-body d-flex gap-3">
              <div class="d-inline-flex rounded-3 p-3 bg-primary-subtle text-primary flex-shrink-0 align-self-start">
                <i class="fa-solid fa-hand-holding-heart fa-fw fs-4"></i>
              </div>

              <div>
                <h3 class="h6 fw-semibold">Langkah Awal Mencari Bantuan</h3>

                <p class="small text-body-secondary">
                  Ketahui langkah yang bisa dilakukan ketika mengalami atau
                  menyaksikan kekerasan.
                </p>

                <a href="detail-edukasi.html" class="link-primary fw-semibold small text-decoration-none">
                  Baca Selengkapnya
                  <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- 7. KONTAK DARURAT -->
    <section class="mb-4">
      <h2 class="h5 fw-bold mb-3">Butuh Bantuan Segera?</h2>

      <div class="card border-0 shadow-sm">
        <div class="card-body d-flex align-items-center gap-3">
          <div class="d-inline-flex rounded-3 p-3 bg-danger-subtle text-danger flex-shrink-0">
            <i class="fa-solid fa-phone-volume fa-fw fs-4"></i>
          </div>

          <div class="flex-grow-1">
            <h3 class="h6 fw-semibold">Kontak Darurat</h3>

            <p class="small text-body-secondary mb-0">
              Temukan kontak bantuan dan layanan darurat yang dapat dihubungi.
            </p>
          </div>

          <a
            href="kontak-darurat.html"
            class="btn btn-outline-primary btn-sm flex-shrink-0"
          >
            Lihat
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer reusable -->
  <div id="app-footer"></div>
</body>
</html>