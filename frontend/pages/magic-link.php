<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script type="module" src="assets/js/layout.js"></script>
  </head>

  <body>
    <!-- Navbar reusable -->
    <div id="app-navbar"></div>

    <!-- Main Content -->
    <main class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <section class="card border-0 shadow-sm">
            <div class="card-body p-4 p-md-5">
              <div class="text-center">
                <div
                  class="d-inline-flex rounded-circle bg-primary-subtle text-primary p-3 mb-3"
                >
                  <i class="fa-solid fa-envelope-circle-check fa-fw fs-3"></i>
                </div>

                <h1 class="h3 fw-bold mb-2">Periksa Email Anda</h1>

                <p class="text-body-secondary mb-3">
                  Jika alamat email valid, petunjuk untuk mengakses akun Anda
                  akan dikirimkan melalui email.
                </p>

                <div
                  class="bg-body-tertiary rounded-3 py-2 px-3 fw-semibold text-break mb-4"
                  id="email-display"
                >
                  Email yang Anda masukkan
                </div>
              </div>

              <div class="bg-body-tertiary rounded-3 p-3 mb-4">
                <h2 class="fw-bold fs-6 mb-3">Langkah selanjutnya:</h2>

                <div class="d-flex align-items-center gap-3 mb-2">
                  <span
                    class="d-inline-flex rounded-circle bg-primary text-white p-2 flex-shrink-0"
                  >
                    <i class="fa-solid fa-1 fa-fw small"></i>
                  </span>

                  <div class="small">Buka email Anda.</div>
                </div>

                <div class="d-flex align-items-center gap-3 mb-2">
                  <span
                    class="d-inline-flex rounded-circle bg-primary text-white p-2 flex-shrink-0"
                  >
                    <i class="fa-solid fa-2 fa-fw small"></i>
                  </span>

                  <div class="small">
                    Klik tautan masuk yang dikirimkan oleh RuangAman.
                  </div>
                </div>

                <div class="d-flex align-items-center gap-3">
                  <span
                    class="d-inline-flex rounded-circle bg-primary text-white p-2 flex-shrink-0"
                  >
                    <i class="fa-solid fa-3 fa-fw small"></i>
                  </span>

                  <div class="small">
                    Anda akan diarahkan ke halaman dashboard pelaporan Anda.
                  </div>
                </div>
              </div>

              <button
                type="button"
                class="btn btn-primary w-100 py-2 mb-2"
                onclick="window.location.href = 'dashboard-pelapor.html'"
              >
                <i
                  class="fa-solid fa-arrow-right-to-bracket me-2"
                  aria-hidden="true"
                ></i>
                Simulasikan Klik Magic Link
              </button>

              <button
                type="button"
                class="btn btn-outline-primary w-100 py-2"
                id="btnKirimUlang"
              >
                <i class="fa-solid fa-rotate-right me-2" aria-hidden="true"></i>
                Kirim Ulang Link
              </button>

              <div
                id="pesanKirimUlang"
                class="alert alert-info small mt-3 mb-0 d-none"
                role="status"
              ></div>

              <p class="small text-body-secondary mt-3 mb-0">
                Tautan akses berlaku selama 15 menit. Periksa folder spam jika
                email belum diterima.
              </p>

              <div class="text-center mt-4">
                <a href="login-pelapor.html" class="small text-secondary">
                  <i class="fa-solid fa-arrow-left me-1"></i>
                  Kembali
                </a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </main>

    <script>
      const params = new URLSearchParams(window.location.search);
      const email = params.get("email");

      if (email) {
        document.getElementById("email-display").textContent = email;
      }
      // Simulate sending the magic link email
      document.getElementById("btnKirimUlang").addEventListener("click", () => {
        const pesan = document.getElementById("pesanKirimUlang");
        pesan.textContent =
          "Simulasi UI: fitur kirim ulang memerlukan integrasi backend.";
        pesan.classList.remove("d-none");
      });
    </script>

    <!-- Footer reusable -->
    <div id="app-footer"></div>
  </body>
</html>
