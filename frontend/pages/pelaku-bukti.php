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

    <!-- Konten khusus Beranda -->
    <main class="container py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
          <h1 class="h3 fw-bold mb-1">Buat Laporan Kekerasan</h1>

          <p class="text-body-secondary mb-4">
            Lengkapi informasi pelaku dan bukti pendukung jika tersedia.
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
              <a class="nav-link h-100 active d-flex flex-column flex-sm-row align-items-center justify-content-center gap-1 gap-sm-2 px-1 px-sm-2" href="pelaku-bukti.html" aria-current="step">
                <span class="badge rounded-pill bg-white text-primary">3</span><span>Pelaku &amp; Bukti</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link h-100 bg-body-tertiary text-body d-flex flex-column flex-sm-row align-items-center justify-content-center gap-1 gap-sm-2 px-1 px-sm-2" href="konfirmasi.html">
                <span class="badge rounded-pill text-bg-light">4</span><span>Konfirmasi</span>
              </a>
            </li>
          </ol>

          <form action="konfirmasi.html" method="get">
            <section class="card border-0 shadow-sm">
              <div class="card-body p-4">
                <h2 class="h5 fw-bold mb-1">Pelaku dan Bukti Pendukung</h2>

                <p class="form-text mb-4">
                  Ceritakan hal yang Anda ketahui. Anda tidak perlu menebak jika
                  ada informasi yang belum diketahui.
                </p>

                <!-- Kategori Pelaku -->
                <fieldset
                  class="mb-4 border-0 p-0"
                  aria-describedby="kategori-pelaku-help"
                >
                  <legend class="form-label fw-semibold">
                    Pelaku termasuk kategori apa?
                    <span class="text-danger">*</span>
                  </legend>

                  <div class="row g-2">
                    <div class="col-12 col-md-6">
                      <input
                        type="radio"
                        class="btn-check"
                        name="kategori_pelaku"
                        id="pelaku-mahasiswa"
                        value="mahasiswa"
                        autocomplete="off"
                        required
                      />
                      <label
                        class="btn btn-outline-primary w-100 h-100 d-flex align-items-start gap-3 text-start p-3"
                        for="pelaku-mahasiswa"
                      >
                        <i class="fa-solid fa-user-graduate fa-fw fs-4"></i>
                        <span>
                          <span class="fw-semibold d-block">Mahasiswa</span>
                          <span class="small d-block"
                            >Mahasiswa di lingkungan kampus.</span
                          >
                        </span>
                      </label>
                    </div>

                    <div class="col-12 col-md-6">
                      <input
                        type="radio"
                        class="btn-check"
                        name="kategori_pelaku"
                        id="pelaku-dosen"
                        value="dosen"
                        autocomplete="off"
                      />
                      <label
                        class="btn btn-outline-primary w-100 h-100 d-flex align-items-start gap-3 text-start p-3"
                        for="pelaku-dosen"
                      >
                        <i class="fa-solid fa-chalkboard-user fa-fw fs-4"></i>
                        <span>
                          <span class="fw-semibold d-block">Dosen</span>
                          <span class="small d-block"
                            >Pengajar atau dosen kampus.</span
                          >
                        </span>
                      </label>
                    </div>

                    <div class="col-12 col-md-6">
                      <input
                        type="radio"
                        class="btn-check"
                        name="kategori_pelaku"
                        id="pelaku-tendik"
                        value="tenaga-kependidikan"
                        autocomplete="off"
                      />
                      <label
                        class="btn btn-outline-primary w-100 h-100 d-flex align-items-start gap-3 text-start p-3"
                        for="pelaku-tendik"
                      >
                        <i class="fa-solid fa-briefcase fa-fw fs-4"></i>
                        <span>
                          <span class="fw-semibold d-block"
                            >Tenaga kependidikan</span
                          >
                          <span class="small d-block"
                            >Staf atau pegawai kampus.</span
                          >
                        </span>
                      </label>
                    </div>

                    <div class="col-12 col-md-6">
                      <input
                        type="radio"
                        class="btn-check"
                        name="kategori_pelaku"
                        id="pelaku-lainnya"
                        value="lainnya"
                        autocomplete="off"
                      />
                      <label
                        class="btn btn-outline-primary w-100 h-100 d-flex align-items-start gap-3 text-start p-3"
                        for="pelaku-lainnya"
                      >
                        <i class="fa-solid fa-ellipsis fa-fw fs-4"></i>
                        <span>
                          <span class="fw-semibold d-block">Lainnya</span>
                          <span class="small d-block"
                            >Kategori selain pilihan di atas.</span
                          >
                        </span>
                      </label>
                    </div>
                  </div>

                  <div class="mt-3 d-none" id="kategori-pelaku-lainnya-wrapper">
                    <label for="kategori-pelaku-lainnya" class="form-label">
                      Sebutkan kategori pelaku
                      <span class="text-danger">*</span>
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      id="kategori-pelaku-lainnya"
                      name="kategori_pelaku_lainnya"
                      maxlength="100"
                      placeholder="Contoh: pengunjung atau keluarga mahasiswa"
                      aria-describedby="kategori-pelaku-lainnya-help"
                      disabled
                    />
                    <div class="form-text" id="kategori-pelaku-lainnya-help">
                      Tuliskan kategori yang paling sesuai, maksimal 100
                      karakter.
                    </div>
                  </div>
                </fieldset>

                <div class="row g-3">
                  <!-- Deskripsi Pelaku -->
                  <div class="col-12 col-md-6">
                    <label for="pelaku" class="form-label">
                      Informasi tentang Pelaku
                      <span class="text-danger">*</span>
                    </label>

                    <textarea
                      class="form-control"
                      id="pelaku"
                      name="pelaku"
                      rows="4"
                      maxlength="500"
                      placeholder="Tuliskan nama atau ciri yang Anda ingat. Jika tidak tahu, tuliskan “Belum diketahui”."
                      required
                    ></textarea>

                    <div class="form-text">
                      Sampaikan sebatas yang Anda ketahui; tidak perlu menebak.
                      Maksimal 500 karakter.
                    </div>
                  </div>

                  <!-- Tingkat Urgensi dan Keparahan -->

                  <div class="col-12 col-md-6">
                    <label for="kekhawatiran" class="form-label">
                      Tingkat urgensi/keparahan kasus
                      <span class="text-danger">*</span>
                    </label>

                    <select
                      class="form-select"
                      id="kekhawatiran"
                      name="kekhawatiran"
                      aria-describedby="urgensi-help"
                      required
                    >
                      <option value="">Pilih tingkat urgensi</option>
                      <option value="1">
                        1 - Rendah: kejadian telah berhenti dan Anda merasa aman
                        saat ini
                      </option>
                      <option value="2">
                        2 - Sedang: kejadian berdampak pada Anda, tetapi tidak
                        ada ancaman langsung
                      </option>
                      <option value="3">
                        3 - Tinggi: kejadian berulang atau masih berlangsung dan
                        membuat Anda merasa tidak aman
                      </option>
                      <option value="4">
                        4 - Sangat tinggi: terdapat ancaman serius atau
                        kekhawatiran kuat akan kejadian berulang dalam waktu
                        dekat
                      </option>
                      <option value="5">
                        5 - Darurat: Anda atau orang lain sedang menghadapi
                        bahaya langsung atau membutuhkan pertolongan segera
                      </option>
                    </select>

                  <div class="form-text">
                    Pilih tingkat yang menggambarkan kekhawatiran Anda.
                  </div>
                </div>

                <!-- Upload Bukti -->
                <div class="mt-4">
                  <label for="bukti" class="form-label">
                    Unggah Bukti Pendukung
                    <span class="text-body-secondary">(Opsional)</span>
                  </label>

                  <label
                    for="bukti"
                    class="d-block text-center border rounded-3 bg-body-tertiary p-4"
                  >
                    <i
                      class="fa-solid fa-cloud-arrow-up d-block fs-1 text-primary mb-2"
                    ></i>

                    <div class="fw-semibold">Pilih file untuk diunggah</div>

                    <div class="form-text mt-2">
                      Format: JPG, PNG, PDF. Maksimal 10 MB per file.
                    </div>
                  </label>

                  <input
                    type="file"
                    class="form-control mt-2"
                    id="bukti"
                    name="bukti"
                    accept=".jpg,.jpeg,.png,.pdf"
                    multiple
                  />

                  <div class="form-text">
                    Unggah hanya bukti yang relevan dan aman untuk dibagikan.
                  </div>
                </div>

                <div class="d-flex justify-content-between gap-2 mt-4">
                  <a
                    href="detail-kejadian.html"
                    class="btn btn-outline-secondary"
                  >
                    <i class="fa-solid fa-arrow-left me-2"></i>
                    Kembali
                  </a>

                  <button type="submit" class="btn btn-primary">
                    Lanjut ke Konfirmasi
                    <i class="fa-solid fa-arrow-right ms-2"></i>
                  </button>
                </div>
              </div>
            </section>
          </form>
        </div>
      </div>
    </main>

    <!-- Footer reusable -->
    <div id="app-footer"></div>
    <script>
      const categoryRadios = document.querySelectorAll(
        'input[name="kategori_pelaku"]',
      );
      const otherCategoryWrapper = document.getElementById(
        "kategori-pelaku-lainnya-wrapper",
      );
      const otherCategoryInput = document.getElementById(
        "kategori-pelaku-lainnya",
      );

      function updateOtherCategoryField() {
        const isOtherSelected =
          document.getElementById("pelaku-lainnya").checked;

        otherCategoryWrapper.classList.toggle("d-none", !isOtherSelected);
        otherCategoryInput.disabled = !isOtherSelected;
        otherCategoryInput.required = isOtherSelected;
      }

      categoryRadios.forEach((radio) => {
        radio.addEventListener("change", updateOtherCategoryField);
      });

      updateOtherCategoryField();
    </script>
  </body>
</html>
