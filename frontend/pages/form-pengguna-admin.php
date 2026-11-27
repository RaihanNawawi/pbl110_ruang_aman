<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pengguna - Admin RuangAman</title>

  <!-- Bootstrap 5.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <script
    type="module"
    src="assets/js/layout.js"
  ></script>
</head>

<body class="bg-light">

  <!-- Navbar reusable -->
  <div id="app-navbar"></div>

  <!-- Main Content -->
  <main class="container py-4">

    <!-- Role Navigation -->
    <nav class="nav nav-pills gap-2 mb-4" aria-label="Navigasi Admin">
        <a class="nav-link text-secondary bg-white shadow-sm" href="dashboard-admin.html">
            <i class="fa-solid fa-gauge-high me-1" aria-hidden="true"></i>
            Dashboard
        </a>
        <a class="nav-link active shadow-sm" href="pengguna-admin.html" aria-current="page">
            <i class="fa-solid fa-users me-1" aria-hidden="true"></i>
            Manajemen Pengguna
        </a>
    </nav>

    <!-- Heading -->
    <section class="mb-4">
        <a href="pengguna-admin.html" class="small text-secondary text-decoration-none d-inline-block mb-3">
            <i class="fa-solid fa-arrow-left me-1"></i>
            Kembali ke Daftar Pengguna
        </a>

        <h1 class="h3 fw-bold text-dark mb-1">
            Tambah Pengguna
        </h1>

        <p class="text-muted mb-0">
            Masukkan informasi akun dan tentukan peran pengguna.
        </p>
    </section>

    <div class="row g-4">

        <!-- Form -->
        <div class="col-12 col-lg-8">

            <section class="card border-0 shadow-sm rounded-4 p-3 p-md-4">

                <h2 class="fs-5 fw-bold text-dark mb-3">
                    Informasi Pengguna
                </h2>

                <form action="pengguna-admin.html" method="post">

                    <div class="row g-3">

                        <!-- Nama -->
                        <div class="col-12">
                            <label for="nama" class="form-label small fw-semibold text-dark">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <input
                                type="text"
                                class="form-control bg-light border-0 shadow-none"
                                id="nama"
                                name="nama"
                                placeholder="Masukkan nama lengkap"
                                required
                            >
                        </div>

                        <!-- Email -->
                        <div class="col-12">
                            <label for="email" class="form-label small fw-semibold text-dark">
                                Email <span class="text-danger">*</span>
                            </label>
                            <input
                                type="email"
                                class="form-control bg-light border-0 shadow-none"
                                id="email"
                                name="email"
                                placeholder="nama@polibatam.ac.id"
                                required
                            >
                            <div class="form-text text-muted small">
                                Gunakan alamat email yang valid dan dapat diakses.
                            </div>
                        </div>

                        <!-- NIM/NIP -->
                        <div class="col-12">
                            <label for="identitas" class="form-label small fw-semibold text-dark">
                                NIM / NIP / Identitas Akademik
                            </label>
                            <input
                                type="text"
                                class="form-control bg-light border-0 shadow-none"
                                id="identitas"
                                name="identitas"
                                placeholder="Masukkan identitas akademik"
                            >
                        </div>

                        <!-- Role -->
                        <div class="col-12 col-md-6">
                            <label for="role" class="form-label small fw-semibold text-dark">
                                Peran Pengguna <span class="text-danger">*</span>
                            </label>
                            <select class="form-select bg-light border-0 shadow-none"
                                    id="role"
                                    name="role"
                                    required>
                                <option value="">Pilih peran</option>
                                <option value="pelapor">Pelapor</option>
                                <option value="satgas">Satgas PPKS</option>
                                <option value="admin">Administrator</option>
                            </select>
                            <div class="form-text text-muted small">
                                Peran menentukan kewenangan akses pengguna.
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="col-12 col-md-6">
                            <label for="status" class="form-label small fw-semibold text-dark">
                                Status Akun <span class="text-danger">*</span>
                            </label>
                            <select class="form-select bg-light border-0 shadow-none"
                                    id="status"
                                    name="status"
                                    required>
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Nonaktif</option>
                            </select>
                        </div>

                        <!-- Notes -->
                        <div class="col-12">
                            <label for="catatan" class="form-label small fw-semibold text-dark">
                                Catatan Administrator
                            </label>
                            <textarea
                                class="form-control bg-light border-0 shadow-none"
                                id="catatan"
                                name="catatan"
                                rows="3"
                                maxlength="500"
                                placeholder="Catatan tambahan jika diperlukan..."
                                style="font-size: 13px;"
                            ></textarea>
                        </div>

                    </div>

                    <hr class="my-4 text-secondary opacity-25">

                    <div class="d-flex flex-column flex-sm-row justify-content-end gap-2">
                        <a href="pengguna-admin.html" class="btn btn-outline-secondary px-3">
                            Batal
                        </a>
                        <button type="submit" class="btn btn-primary px-4 fw-semibold">
                            <i class="fa-solid fa-floppy-disk me-2"></i>
                            Simpan Pengguna
                        </button>
                    </div>

                </form>

            </section>

        </div>

        <!-- Role Information -->
        <div class="col-12 col-lg-4">

            <section class="card border-0 shadow-sm rounded-4 p-3 p-md-4 mb-4">
                <h2 class="fs-5 fw-bold text-dark mb-3">
                    Panduan Peran
                </h2>

                <div class="d-flex flex-column gap-3">

                    <!-- Role 1 -->
                    <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border">
                        <div class="bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; min-width: 36px; font-size: 15px;">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div>
                            <div class="fw-semibold small text-dark">Pelapor</div>
                            <div class="text-muted extra-small" style="font-size: 0.775rem;">
                                Mengirim laporan, memantau status, dan berkomunikasi dengan Satgas.
                            </div>
                        </div>
                    </div>

                    <!-- Role 2 -->
                    <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border">
                        <div class="bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; min-width: 36px; font-size: 15px;">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <div class="fw-semibold small text-dark">Satgas PPKS</div>
                            <div class="text-muted extra-small" style="font-size: 0.775rem;">
                                Memverifikasi laporan dan melakukan tindak lanjut sesuai kewenangannya.
                            </div>
                        </div>
                    </div>

                    <!-- Role 3 -->
                    <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3 border">
                        <div class="text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; min-width: 36px; font-size: 15px; background: #ede9fe;">
                            <i class="fa-solid fa-user-gear"></i>
                        </div>
                        <div>
                            <div class="fw-semibold small text-dark">Administrator</div>
                            <div class="text-muted extra-small" style="font-size: 0.775rem;">
                                Mengelola akun, konfigurasi sistem, dan hak akses administratif.
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>

    </div>

  </main>

  <!-- Footer reusable -->
  <div id="app-footer"></div>
</body>
</html>