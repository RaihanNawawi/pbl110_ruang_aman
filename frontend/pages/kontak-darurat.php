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
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <!-- Heading -->
        <section class="mb-4">

          <h1 class="h3 fw-bold">
            Kontak Darurat
          </h1>

          <p class="text-body-secondary mb-0">
            Temukan layanan bantuan yang dapat dihubungi ketika
            Anda atau orang di sekitar membutuhkan pertolongan.
          </p>

        </section>

        <!-- Emergency Alert -->
        <section class="alert alert-danger d-flex gap-3 mb-4">

          <i class="fa-solid fa-phone-volume fa-fw fs-3"></i>

          <div>

            <h2 class="fs-6 fw-bold mb-2">
              Membutuhkan bantuan segera?
            </h2>

            <p class="mb-0">
              Jika berada dalam bahaya langsung, prioritaskan
              keselamatan diri dan hubungi layanan darurat resmi
              yang tersedia di wilayah Anda.
            </p>

          </div>

        </section>

        <!-- Contact List -->
        <section class="mb-4">

          <h2 class="h5 fw-bold">
            Kontak Layanan
          </h2>

          <p class="text-body-secondary mb-3">
            Berikut beberapa jenis layanan yang dapat dihubungi
            untuk mendapatkan bantuan, pendampingan, atau informasi
            lebih lanjut.
          </p>

          <div class="d-flex flex-column gap-3">

            <!-- Satgas -->
            <article class="card border-0 shadow-sm">
              <div class="card-body d-flex flex-column flex-sm-row align-items-sm-center gap-3">

                <div class="d-inline-flex align-self-start align-self-sm-center rounded-3 p-3 bg-success-subtle text-success flex-shrink-0">
                  <i class="fa-solid fa-shield-halved fa-fw fs-4"></i>
                </div>

                <div class="flex-grow-1">

                  <h3 class="h6 fw-bold mb-1">
                    Satgas PPKS Kampus
                  </h3>

                  <p class="small text-body-secondary mb-2">
                    Layanan pengaduan dan pendampingan
                    di lingkungan kampus.
                  </p>

                  <div class="small text-body-secondary">
                    Informasi kontak mengikuti data resmi
                    yang ditetapkan pihak kampus.
                  </div>

                </div>

                <div class="flex-shrink-0">

                  <a href="detail-kontak.html?layanan=satgas"
                     class="btn btn-outline-primary btn-sm">

                    Informasi Layanan

                  </a>

                </div>

              </div>
            </article>

            <!-- Emergency Services -->
            <article class="card border-0 shadow-sm">
              <div class="card-body d-flex flex-column flex-sm-row align-items-sm-center gap-3">

                <div class="d-inline-flex align-self-start align-self-sm-center rounded-3 p-3 bg-danger-subtle text-danger flex-shrink-0">
                  <i class="fa-solid fa-phone fa-fw fs-4"></i>
                </div>

                <div class="flex-grow-1">

                  <h3 class="h6 fw-bold mb-1">
                    Layanan Darurat
                  </h3>

                  <p class="small text-body-secondary mb-2">
                    Untuk kondisi yang membutuhkan pertolongan
                    segera, seperti ancaman keselamatan.
                  </p>

                  <div class="small text-body-secondary">
                    Gunakan nomor layanan resmi sesuai
                    wilayah dan jenis keadaan darurat.
                  </div>

                </div>

                <div class="flex-shrink-0">

                  <a href="detail-kontak.html?layanan=darurat"
                     class="btn btn-outline-primary btn-sm">

                    Lihat Informasi

                  </a>

                </div>

              </div>
            </article>

            <!-- Health Services -->
            <article class="card border-0 shadow-sm">
              <div class="card-body d-flex flex-column flex-sm-row align-items-sm-center gap-3">

                <div class="d-inline-flex align-self-start align-self-sm-center rounded-3 p-3 bg-primary-subtle text-primary flex-shrink-0">
                  <i class="fa-solid fa-user-doctor fa-fw fs-4"></i>
                </div>

                <div class="flex-grow-1">

                  <h3 class="h6 fw-bold mb-1">
                    Layanan Kesehatan / Konseling
                  </h3>

                  <p class="small text-body-secondary mb-2">
                    Informasi bantuan kesehatan dan konseling
                    bagi pengguna yang membutuhkan dukungan.
                  </p>

                  <div class="small text-body-secondary">
                    Hubungi fasilitas kesehatan atau layanan
                    konseling resmi yang tersedia.
                  </div>

                </div>

                <div class="flex-shrink-0">

                  <a href="detail-kontak.html?layanan=kesehatan"
                     class="btn btn-outline-primary btn-sm">

                    Informasi Layanan

                  </a>

                </div>

              </div>
            </article>

          </div>

        </section>

        <!-- Back to Home -->
        <div class="mt-4">

          <a href="index.html"
             class="btn btn-outline-secondary">

            <i class="fa-solid fa-arrow-left me-2"></i>
            Kembali ke Beranda

          </a>

        </div>

      </div>
    </div>
  </main>

  <!-- Footer reusable -->
  <div id="app-footer"></div>
</body>
</html>