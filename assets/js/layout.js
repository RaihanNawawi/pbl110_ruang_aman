const ROOT_URL = new URL("../../", import.meta.url);


const PAGE_CONFIG = {
  "dashboard-pelapor.html": {
    title: "Dashboard Pelapor | RuangAman",
    description:
      "Pantau status laporan teridentifikasi yang Anda kirim melalui RuangAman."
  },

  "pages/index.html": {
    title: "RuangAman - Beranda",
    description:
      "Portal informasi dan pengaduan kekerasan di lingkungan kampus."
  },

  "pages/pelapor/formulir-pengaduan/berhasil.html": {
    title: "Laporan Berhasil | RuangAman",
    description:
      "Informasi tentang laporan yang berhasil dikirim."
  },

  "pages/pelapor/formulir-pengaduan/data-diri.html": {
    title: "Data Diri Pelapor | RuangAman",
    description:
      "Formulir data diri untuk proses pengaduan."
  },

  "pages/pelapor/formulir-pengaduan/detail-kejadian.html": {
    title: "Detail Kejadian | RuangAman",
    description:
      "Formulir detail kejadian yang dilaporkan."
  },

  "pages/pelapor/formulir-pengaduan/pelaku-bukti.html": {
    title: "Pelaku dan Bukti | RuangAman",
    description:
      "Formulir informasi pelaku dan bukti pengaduan."
  },

  "pages/pelapor/formulir-pengaduan/konfirmasi.html": {
    title: "Konfirmasi Pengaduan | RuangAman",
    description:
      "Konfirmasi informasi pengaduan sebelum dikirim."
  },

  "pages/pelapor/lacak-laporan/lacak-laporan.html": {
    title: "Lacak Laporan | RuangAman",
    description:
      "Informasi pelacakan status laporan RuangAman."
  }
};


function getCurrentPage() {
  const rootPath = new URL(".", ROOT_URL).pathname;
  const currentPath = decodeURIComponent(location.pathname);

  return currentPath
    .startsWith(rootPath)
    ? currentPath.slice(rootPath.length)
    : currentPath.split("/").pop();
}

function setMetadata() {
  const currentPage = getCurrentPage();

  const page =
    PAGE_CONFIG[currentPage] ||
    {
      title: "RuangAman",
      description: "Platform pelaporan dan edukasi RuangAman."
    };

  document.title = page.title;

  let description = document.querySelector(
    'meta[name="description"]'
  );

  if (!description) {
    description = document.createElement("meta");
    description.name = "description";
    document.head.appendChild(description);
  }

  description.content = page.description;
}

function loadStylesheet(href, integrity = "") {
  const link = document.createElement("link");

  link.rel = "stylesheet";
  link.href = href;

  if (integrity) {
    link.integrity = integrity;
    link.crossOrigin = "anonymous";
  }

  document.head.appendChild(link);
}

function loadGlobalStyles() {
  loadStylesheet(
    "https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css",
    "sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
  );

  loadStylesheet(
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
  );

  loadStylesheet(new URL("assets/css/style.css", ROOT_URL).href);
}

async function loadComponent(selector, path) {
  const target = document.querySelector(selector);

  if (!target) {
    throw new Error(`Elemen ${selector} tidak ditemukan.`);
  }

  const url = new URL(path, ROOT_URL);
  const response = await fetch(url);

  if (!response.ok) {
    throw new Error(`Gagal memuat komponen: ${path}`);
  }

  target.innerHTML = await response.text();
}

function setActiveNavigation() {
  const currentPage = getCurrentPage();

  document.querySelectorAll(".navbar-nav .nav-link").forEach((link) => {
    const linkPage = new URL(link.href).pathname.split("/").pop();

    const isActive = linkPage === currentPage;

    link.classList.toggle("active", isActive);

    if (isActive) {
      link.setAttribute("aria-current", "page");
    } else {
      link.removeAttribute("aria-current");
    }
  });
}

function setBrandLogos() {
  const logoUrl = new URL("assets/img/ruang_aman_logo.jpeg", ROOT_URL).href;

  document.querySelectorAll("[data-brand-logo]").forEach((logo) => {
    logo.src = logoUrl;
  });
}

function loadBootstrapJS() {
  return new Promise((resolve, reject) => {
    const script = document.createElement("script");

    script.src =
      "https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js";

    script.integrity =
      "sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI";

    script.crossOrigin = "anonymous";
    script.onload = resolve;
    script.onerror = () => reject(
      new Error("Gagal memuat Bootstrap JavaScript.")
    );

    document.body.appendChild(script);
  });
}

async function initLayout() {
  setMetadata();
  loadGlobalStyles();

  try {
    await Promise.all([
      loadComponent("#app-navbar", "components/navbar.html"),
      loadComponent("#app-footer", "components/footer.html")
    ]);

    setBrandLogos();
    setActiveNavigation();

    await loadBootstrapJS();
  } catch (error) {
    console.error("Layout gagal dimuat:", error);
  }
}

initLayout();