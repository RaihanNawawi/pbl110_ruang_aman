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

  <!-- Main Content -->
  <main class="container py-4">

    <!-- Heading -->
    <section class="mb-4">

      <h1 class="h3 fw-bold">
        Blog Edukasi RuangAman
      </h1>

      <p class="text-body-secondary mb-0">
        Temukan informasi mengenai bentuk kekerasan,
        pencegahan, hak pelapor, serta langkah yang dapat
        dilakukan untuk mendapatkan bantuan.
      </p>

    </section>

    <!-- Search & Filter -->
    <section class="card border-0 shadow-sm mb-4">

      <div class="card-body">

        <form action="edukasi.html" method="get">

          <div class="row g-3">

            <div class="col-12 col-lg-7">

              <label for="cari-artikel"
                     class="form-label small fw-semibold">

                Cari Artikel

              </label>

              <div class="input-group">

                <span class="input-group-text">
                  <i class="fa-solid fa-magnifying-glass text-secondary"></i>
                </span>

                <input
                  type="search"
                  class="form-control"
                  id="cari-artikel"
                  name="q"
                  placeholder="Cari topik edukasi..."
                >

              </div>

            </div>

            <div class="col-12 col-md-7 col-lg-3">

              <label for="kategori-artikel"
                     class="form-label small fw-semibold">

                Kategori

              </label>

              <select
                class="form-select"
                id="kategori-artikel"
                name="kategori">

                <option value="">Semua Kategori</option>
                <option value="kekerasan">Bentuk Kekerasan</option>
                <option value="pencegahan">Pencegahan</option>
                <option value="pelaporan">Prosedur Pelaporan</option>
                <option value="dukungan">Dukungan Korban</option>

              </select>

            </div>

            <div class="col-12 col-md-5 col-lg-2 d-flex align-items-end">

              <button type="submit"
                      class="btn btn-primary w-100">

                <i class="fa-solid fa-filter me-2"></i>
                Cari

              </button>

            </div>

          </div>

        </form>

      </div>

    </section>

    <!-- Featured Article -->
    <section class="card border-0 shadow-sm overflow-hidden mb-4">

      <div class="row g-0 align-items-center">

        <div class="col-12 col-md-5 align-self-stretch">

          <div class="d-flex align-items-center justify-content-center h-100 py-5 bg-primary-subtle text-primary">

            <i class="fa-solid fa-book-open-reader display-3"></i>

          </div>

        </div>

        <div class="col-12 col-md-7">

          <div class="card-body p-4">

            <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
              Artikel Pilihan
            </span>

            <h2 class="h4 fw-bold mt-3">

              Mengenal Bentuk Kekerasan di Kampus

            </h2>

            <p class="text-body-secondary">

              Kenali berbagai bentuk kekerasan, cara
              mengenali tanda-tandanya, dan langkah awal
              untuk mencari bantuan.

            </p>

            <div class="small text-body-secondary mb-3">

              <i class="fa-regular fa-calendar me-1"></i>
              28 September 2026

              <span class="mx-2">•</span>

              <i class="fa-regular fa-clock me-1"></i>
              5 menit membaca

            </div>

            <a href="detail-edukasi.html"
               class="btn btn-primary">

              Baca Artikel
              <i class="fa-solid fa-arrow-right ms-2"></i>

            </a>

          </div>

        </div>

      </div>

    </section>

    <!-- Article List -->
    <section>

      <div class="d-flex justify-content-between
                  align-items-center gap-3 mb-3">

        <div>

          <h2 class="h5 fw-bold mb-1">
            Artikel Edukasi
          </h2>

          <p class="small text-body-secondary mb-0">
            Informasi untuk membangun lingkungan kampus yang aman.
          </p>

        </div>

      </div>

      <div class="row g-3">

        <!-- Article 1 -->
        <div class="col-12 col-md-6 col-xl-4">

          <article class="card h-100 border-0 shadow-sm overflow-hidden">

            <div class="d-flex align-items-center justify-content-center py-5 bg-primary-subtle text-primary">
              <i class="fa-solid fa-shield-halved fs-1"></i>
            </div>

            <div class="card-body d-flex flex-column">

              <div>
                <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                  Bentuk Kekerasan
                </span>
              </div>

              <h3 class="h6 fw-bold mt-3">
                Mengenal Bentuk Kekerasan di Kampus
              </h3>

              <p class="small text-body-secondary">
                Pelajari bentuk kekerasan fisik, verbal,
                nonverbal, dan bentuk kekerasan lainnya.
              </p>

              <div class="small text-body-secondary mb-3">
                28 September 2026
              </div>

              <a href="detail-edukasi.html"
                 class="link-primary fw-semibold small text-decoration-none mt-auto">

                Baca Selengkapnya
                <i class="fa-solid fa-arrow-right ms-1"></i>

              </a>

            </div>

          </article>

        </div>

        <!-- Article 2 -->
        <div class="col-12 col-md-6 col-xl-4">

          <article class="card h-100 border-0 shadow-sm overflow-hidden">

            <div class="d-flex align-items-center justify-content-center py-5 bg-success-subtle text-success">
              <i class="fa-solid fa-hand-holding-heart fs-1"></i>
            </div>

            <div class="card-body d-flex flex-column">

              <div>
                <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                  Dukungan Korban
                </span>
              </div>

              <h3 class="h6 fw-bold mt-3">
                Langkah Awal Mencari Bantuan
              </h3>

              <p class="small text-body-secondary">
                Ketahui langkah yang dapat dilakukan ketika
                mengalami atau menyaksikan kekerasan.
              </p>

              <div class="small text-body-secondary mb-3">
                25 September 2026
              </div>

              <a href="detail-edukasi.html"
                 class="link-primary fw-semibold small text-decoration-none mt-auto">

                Baca Selengkapnya
                <i class="fa-solid fa-arrow-right ms-1"></i>

              </a>

            </div>

          </article>

        </div>

        <!-- Article 3 -->
        <div class="col-12 col-md-6 col-xl-4">

          <article class="card h-100 border-0 shadow-sm overflow-hidden">

            <div class="d-flex align-items-center justify-content-center py-5 bg-info-subtle text-info-emphasis">
              <i class="fa-solid fa-file-circle-check fs-1"></i>
            </div>

            <div class="card-body d-flex flex-column">

              <div>
                <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                  Prosedur Pelaporan
                </span>
              </div>

              <h3 class="h6 fw-bold mt-3">
                Cara Melaporkan Kekerasan melalui RuangAman
              </h3>

              <p class="small text-body-secondary">
                Pahami tahapan pengaduan dan informasi
                yang perlu disiapkan sebelum mengirim laporan.
              </p>

              <div class="small text-body-secondary mb-3">
                22 September 2026
              </div>

              <a href="detail-edukasi.html"
                 class="link-primary fw-semibold small text-decoration-none mt-auto">

                Baca Selengkapnya
                <i class="fa-solid fa-arrow-right ms-1"></i>

              </a>

            </div>

          </article>

        </div>

        <!-- Article 4 -->
        <div class="col-12 col-md-6 col-xl-4">

          <article class="card h-100 border-0 shadow-sm overflow-hidden">

            <div class="d-flex align-items-center justify-content-center py-5 bg-danger-subtle text-danger">
              <i class="fa-solid fa-heart-pulse fs-1"></i>
            </div>

            <div class="card-body d-flex flex-column">

              <div>
                <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                  Dukungan Korban
                </span>
              </div>

              <h3 class="h6 fw-bold mt-3">
                Menjaga Diri dan Mencari Dukungan
              </h3>

              <p class="small text-body-secondary">
                Informasi mengenai dukungan sosial dan
                bantuan profesional setelah mengalami kekerasan.
              </p>

              <div class="small text-body-secondary mb-3">
                18 September 2026
              </div>

              <a href="detail-edukasi.html"
                 class="link-primary fw-semibold small text-decoration-none mt-auto">

                Baca Selengkapnya
                <i class="fa-solid fa-arrow-right ms-1"></i>

              </a>

            </div>

          </article>

        </div>

        <!-- Article 5 -->
        <div class="col-12 col-md-6 col-xl-4">

          <article class="card h-100 border-0 shadow-sm overflow-hidden">

            <div class="d-flex align-items-center justify-content-center py-5 bg-primary-subtle text-primary">
              <i class="fa-solid fa-scale-balanced fs-1"></i>
            </div>

            <div class="card-body d-flex flex-column">

              <div>
                <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                  Hak Pelapor
                </span>
              </div>

              <h3 class="h6 fw-bold mt-3">
                Memahami Hak dan Kerahasiaan Pelapor
              </h3>

              <p class="small text-body-secondary">
                Kenali pentingnya perlindungan identitas
                dan penanganan informasi secara bertanggung jawab.
              </p>

              <div class="small text-body-secondary mb-3">
                15 September 2026
              </div>

              <a href="detail-edukasi.html"
                 class="link-primary fw-semibold small text-decoration-none mt-auto">

                Baca Selengkapnya
                <i class="fa-solid fa-arrow-right ms-1"></i>

              </a>

            </div>

          </article>

        </div>

        <!-- Article 6 -->
        <div class="col-12 col-md-6 col-xl-4">

          <article class="card h-100 border-0 shadow-sm overflow-hidden">

            <div class="d-flex align-items-center justify-content-center py-5 bg-warning-subtle text-warning-emphasis">
              <i class="fa-solid fa-people-group fs-1"></i>
            </div>

            <div class="card-body d-flex flex-column">

              <div>
                <span class="badge rounded-pill bg-primary-subtle text-primary-emphasis">
                  Pencegahan
                </span>
              </div>

              <h3 class="h6 fw-bold mt-3">
                Membangun Lingkungan Kampus yang Aman
              </h3>

              <p class="small text-body-secondary">
                Pelajari peran civitas akademika dalam
                mencegah kekerasan dan mendukung korban.
              </p>

              <div class="small text-body-secondary mb-3">
                12 September 2026
              </div>

              <a href="detail-edukasi.html"
                 class="link-primary fw-semibold small text-decoration-none mt-auto">

                Baca Selengkapnya
                <i class="fa-solid fa-arrow-right ms-1"></i>

              </a>

            </div>

          </article>

        </div>

      </div>

    </section>

    <!-- Information -->
    <section class="alert alert-info d-flex gap-3 mt-4 mb-0">

      <i class="fa-solid fa-circle-info fs-4"></i>

      <div>

        <strong>Butuh bantuan lebih lanjut?</strong>

        <p class="mb-2">
          Jika Anda membutuhkan bantuan atau ingin berkonsultasi,
          silakan kunjungi halaman Kontak Darurat.
        </p>

        <a href="kontak-darurat.html"
           class="alert-link">

          Lihat Kontak Darurat
          <i class="fa-solid fa-arrow-right ms-1"></i>

        </a>

      </div>

    </section>

  </main>

  <!-- Footer reusable -->
  <div id="app-footer"></div>
</body>
</html>