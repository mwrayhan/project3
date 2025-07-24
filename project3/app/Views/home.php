<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Raihanul Mawa - Personal Portfolio & Task Manager</title>
  <meta name="description" content="Situs pribadi Raihanul Mawa: Portofolio proyek, blog, dan alat manajemen tugas kuliah.">
  <meta name="keywords" content="Raihanul Mawa, personal website, portfolio, project management, task manager, kuliah, mahasiswa, blog, teknologi">

  <link href="assets/img/profile_icon.png" rel="icon">
  <link href="assets/img/profile_apple_icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Raihanul Mawa</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Saya</a></li>
          <li><a href="#portfolio">Portofolio</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#task-manager">Manajemen Tugas Kuliah</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#task-manager">Kelola Tugas</a>
    </div>
  </header>

  <main class="main">

    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="100">
              <div class="hero-tag">
                <i class="bi bi-code-slash"></i>
                <span>Pengembang & Mahasiswa</span>
              </div>
              <h1>Halo, Saya <span class="highlight">Raihanul Mawa</span></h1>
              <p class="lead">Membangun solusi inovatif dan mengelola perjalanan akademis saya dengan efisien.</p>
              <ul class="hero-features">
                <li><i class="bi bi-laptop"></i> Pengembang Web Frontend & Backend</li>
                <li><i class="bi bi-book"></i> Mahasiswa Aktif di Bidang Teknologi Informasi</li>
                <li><i class="bi bi-lightbulb"></i> Bersemangat dalam Belajar dan Berinovasi</li>
              </ul>
              <div class="hero-cta">
                <a href="#portfolio" class="btn btn-primary btn-lg rounded-pill custom-btn-primary">Lihat Portofolio Saya</a>
                <a href="#task-manager" class="btn btn-outline-primary btn-lg rounded-pill ms-3 custom-btn-outline"><i class="bi bi-calendar-check"></i> Atur Tugas Kuliah</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image-wrapper text-center" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/raihan.png" alt="Raihanul Mawa Profile" class="img-fluid hero-profile-img">
            </div>
          </div>
        </div>
      </div>
    </section><section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
            <h2 class="section-heading">Mengenal Raihanul Mawa Lebih Jauh</h2>
            <p class="lead">Saya adalah mahasiswa yang bersemangat dalam pengembangan perangkat lunak dan selalu mencari tantangan baru.</p>
          </div>
        </div>

        <div class="row g-4 mb-5">
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-box text-center">
              <div class="icon-container">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
              <h4>Pendidikan</h4>
              <p>Sedang menempuh studi di [Nama Universitas/Institusi Anda], fokus pada [Bidang Studi Anda].</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box text-center">
              <div class="icon-container">
                <i class="bi bi-tools"></i>
              </div>
              <h4>Keahlian Teknis</h4>
              <p>Familiar dengan [Bahasa Pemrograman/Framework A], [Bahasa Pemrograman/Framework B], [Database C], dll.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box text-center">
              <div class="icon-container">
                <i class="bi bi-award-fill"></i>
              </div>
              <h4>Prestasi & Sertifikasi</h4>
              <p>Pernah mengikuti [Nama Kompetisi/Sertifikasi] atau meraih [Prestasi Akademis].</p>
            </div>
          </div>
        </div>

        <div class="row align-items-center about-showcase">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left" data-aos-delay="300">
            <div class="about-image-grid">
              <img src="assets/img/about-study.webp" class="img-grid-main" alt="Raihanul Mawa at Study">
              <div class="experience-badge" data-aos="zoom-in" data-aos-delay="500">
                <span class="years">3+</span>
                <span class="text">Tahun Belajar & Berkarya</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-delay="200">
            <div class="about-content-box">
              <h3>Perjalanan Saya dalam Dunia Teknologi</h3>
              <p class="mb-4">Sejak [Tahun Mulai Tertarik IT], saya telah mengembangkan minat yang mendalam dalam [Sebutkan area spesifik, misal: pengembangan web, data science, mobile app development]. Setiap proyek adalah kesempatan untuk belajar dan berinovasi.</p>

              <div class="progress-item">
                <div class="d-flex justify-content-between">
                  <span class="progress-title">Pemrograman Web</span>
                  <span class="progress-percent">90%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress-item">
                <div class="d-flex justify-content-between">
                  <span class="progress-title">Desain UI/UX</span>
                  <span class="progress-percent">75%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress-item">
                <div class="d-flex justify-content-between">
                  <span class="progress-title">Manajemen Proyek</span>
                  <span class="progress-percent">85%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <a href="#contact" class="btn btn-primary mt-4 rounded-pill custom-btn-primary">Ayo Berkolaborasi!</a>
            </div>
          </div>
        </div>
      </div>
    </section><section id="portfolio" class="portfolio section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Portofolio Proyek Saya</h2>
        <p>Kumpulan proyek personal dan akademis yang pernah saya kerjakan.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-up" data-aos-delay="200">
            <div class="portfolio-content h-100">
              <img src="assets/img/portfolio/project-web-app.webp" class="img-fluid" alt="Proyek Aplikasi Web">
              <div class="portfolio-info">
                <h4>Aplikasi Manajemen Inventori</h4>
                <p>Proyek pengembangan web dengan [Framework/Teknologi], CRUD database.</p>
                <a href="assets/img/portfolio/project-web-app.webp" title="Aplikasi Manajemen Inventori" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="Detail Proyek" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-up" data-aos-delay="300">
            <div class="portfolio-content h-100">
              <img src="assets/img/portfolio/project-mobile-app.webp" class="img-fluid" alt="Proyek Aplikasi Mobile">
              <div class="portfolio-info">
                <h4>Aplikasi Catatan Kuliah Mobile</h4>
                <p>Pengembangan aplikasi Android/iOS dengan [Framework/Teknologi], fitur sinkronisasi.</p>
                <a href="assets/img/portfolio/project-mobile-app.webp" title="Aplikasi Catatan Kuliah Mobile" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="Detail Proyek" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-up" data-aos-delay="400">
            <div class="portfolio-content h-100">
              <img src="assets/img/portfolio/project-data-analysis.webp" class="img-fluid" alt="Proyek Analisis Data">
              <div class="portfolio-info">
                <h4>Analisis Sentimen Twitter</h4>
                <p>Proyek Data Science menggunakan [Bahasa/Tool], visualisasi data.</p>
                <a href="assets/img/portfolio/project-data-analysis.webp" title="Analisis Sentimen Twitter" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="Detail Proyek" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div></div>
      </div>
    </section><section id="blog" class="blog section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Catatan & Inspirasi</h2>
        <p>Pemikiran saya tentang teknologi, kuliah, dan hal-hal menarik lainnya.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="blog-item h-100">
              <img src="assets/img/blog/artikel.jpg" class="img-fluid" alt="Artikel AI">
              <div class="blog-content">
                <h3 class="title"><a href="blog-details.html">Masa Depan AI dalam Pengembangan Web</a></h3>
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Raihanul Mawa</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2025-07-20">Jul 20, 2025</time></a></li>
                  </ul>
                </div>
                <div class="read-more mt-auto">
                  <a href="blog-details.html">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="blog-item h-100">
              <img src="assets/img/blog/tips.jpg" class="img-fluid" alt="Tips Belajar">
              <div class="blog-content">
                <h3 class="title"><a href="blog-details.html">5 Tips Efektif Belajar Pemrograman di Kampus</a></h3>
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Raihanul Mawa</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2025-07-15">Jul 15, 2025</time></a></li>
                  </ul>
                </div>
                <div class="read-more mt-auto">
                  <a href="blog-details.html">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="blog-item h-100">
              <img src="assets/img/blog/artikel.jpg" class="img-fluid" alt="Manajemen Proyek">
              <div class="blog-content">
                <h3 class="title"><a href="blog-details.html">Manajemen Waktu untuk Mahasiswa Teknik</a></h3>
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Raihanul Mawa</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2025-07-10">Jul 10, 2025</time></a></li>
                  </ul>
                </div>
                <div class="read-more mt-auto">
                  <a href="blog-details.html">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div></div>
      </div>
    </section><section id="task-manager" class="task-manager-section section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title text-center">
          <h2>Manajemen Tugas Kuliah Saya</h2>
          <p>Kelola semua tugas, proyek, dan deadline perkuliahan Anda di satu tempat.</p>
        </div>

        <div class="d-flex justify-content-end mb-4" data-aos="fade-up" data-aos-delay="200">
          <button class="btn btn-primary btn-lg rounded-pill" data-bs-toggle="modal" data-bs-target="#addTaskModal">
            <i class="bi bi-plus-circle-fill me-2"></i> Tambah Tugas Baru
          </button>
        </div>

        <div class="table-responsive" data-aos="fade-up" data-aos-delay="300">
          <table class="table table-hover table-striped task-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Tugas/Proyek</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Deadline</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody id="taskTableBody">
              <tr data-id="1">
                <th scope="row">1</th>
                <td>Tugas Besar Web Programming</td>
                <td>Pemrograman Web Lanjut</td>
                <td>2025-08-10</td>
                <td><span class="badge bg-warning text-dark">Dalam Proses</span></td>
                <td>
                  <button class="btn btn-sm btn-info text-white me-2 edit-task-btn" data-bs-toggle="modal" data-bs-target="#editTaskModal">
                    <i class="bi bi-pencil-square"></i> Edit
                  </button>
                  <button class="btn btn-sm btn-danger delete-task-btn">
                    <i class="bi bi-trash"></i> Hapus
                  </button>
                </td>
              </tr>
              <tr data-id="2">
                <th scope="row">2</th>
                <td>Presentasi Project Akhir Jaringan</td>
                <td>Jaringan Komputer</td>
                <td>2025-07-28</td>
                <td><span class="badge bg-danger">Tertunda</span></td>
                <td>
                  <button class="btn btn-sm btn-info text-white me-2 edit-task-btn" data-bs-toggle="modal" data-bs-target="#editTaskModal">
                    <i class="bi bi-pencil-square"></i> Edit
                  </button>
                  <button class="btn btn-sm btn-danger delete-task-btn">
                    <i class="bi bi-trash"></i> Hapus
                  </button>
                </td>
              </tr>
              <tr data-id="3">
                <th scope="row">3</th>
                <td>Laporan Magang Tahap 1</td>
                <td>Magang Industri</td>
                <td>2025-07-25</td>
                <td><span class="badge bg-success">Selesai</span></td>
                <td>
                  <button class="btn btn-sm btn-info text-white me-2 edit-task-btn" data-bs-toggle="modal" data-bs-target="#editTaskModal">
                    <i class="bi bi-pencil-square"></i> Edit
                  </button>
                  <button class="btn btn-sm btn-danger delete-task-btn">
                    <i class="bi bi-trash"></i> Hapus
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section><div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addTaskModalLabel">Tambah Tugas Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addTaskForm">
              <div class="mb-3">
                <label for="taskName" class="form-label">Nama Tugas/Proyek</label>
                <input type="text" class="form-control" id="taskName" required>
              </div>
              <div class="mb-3">
                <label for="courseName" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control" id="courseName">
              </div>
              <div class="mb-3">
                <label for="taskDeadline" class="form-label">Deadline</label>
                <input type="date" class="form-control" id="taskDeadline" required>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="taskStatus" class="form-label">Status</label>
                  <select class="form-select" id="taskStatus">
                    <option value="Dalam Proses">Dalam Proses</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Tertunda">Tertunda</option>
                    <option value="Belum Dimulai">Belum Dimulai</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
            <button type="submit" form="addTaskForm" class="btn btn-primary rounded-pill">Simpan Tugas</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editTaskModalLabel">Edit Tugas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editTaskForm">
              <input type="hidden" id="editTaskId">
              <div class="mb-3">
                <label for="editTaskName" class="form-label">Nama Tugas/Proyek</label>
                <input type="text" class="form-control" id="editTaskName" required>
              </div>
              <div class="mb-3">
                <label for="editCourseName" class="form-label">Mata Kuliah</label>
                <input type="text" class="form-control" id="editCourseName">
              </div>
              <div class="mb-3">
                <label for="editTaskDeadline" class="form-label">Deadline</label>
                <input type="date" class="form-control" id="editTaskDeadline" required>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="editTaskStatus" class="form-label">Status</label>
                  <select class="form-select" id="editTaskStatus">
                    <option value="Dalam Proses">Dalam Proses</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Tertunda">Tertunda</option>
                    <option value="Belum Dimulai">Belum Dimulai</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
            <button type="submit" form="editTaskForm" class="btn btn-primary rounded-pill">Perbarui Tugas</button>
          </div>
        </div>
      </div>
    </div>

    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak Saya</h2>
        <p>Mari terhubung! Saya terbuka untuk kolaborasi atau diskusi.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-main-wrapper">
          <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.82029783515!2d106.94726217439066!3d-6.994600192994793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e683709b1f0c3f5%3A0x6b4c1a5b8f2a1b9e!2sSTMIK%20Nusa%20Mandiri%20Sukabumi!5e0!3m2!1sen!2sid!4v1717897200000!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="contact-content">
            <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="contact-text">
                  <h4>Domisili</h4>
                  <p>Sukabumi, Jawa Barat, Indonesia</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="contact-text">
                  <h4>Email</h4>
                  <p>raihanulmawa@example.com</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="contact-text">
                  <h4>Telepon</h4>
                  <p>+62 812-3456-7890</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-linkedin"></i>
                </div>
                <div class="contact-text">
                  <h4>LinkedIn</h4>
                  <p>/in/raihanul-mawa</p>
                </div>
              </div>
            </div>

            <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
              <h3>Kirim Pesan</h3>
              <p>Jangan ragu untuk menghubungi saya untuk peluang kolaborasi atau pertanyaan.</p>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required="">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required="">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required="">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Pesan Anda" required=""></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">Memuat</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
                </div>

                <div class="form-submit">
                  <button type="submit">Kirim Pesan</button>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-github"></i></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section></main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Raihanul Mawa</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Sukabumi, Jawa Barat</p>
            <p>Indonesia</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>+62 812-3456-7890</span></p>
            <p><strong>Email:</strong> <span>raihanulmawa@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""><i class="bi bi-github"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Navigasi</h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Saya</a></li>
            <li><a href="#">Portofolio</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Manajemen Tugas</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Keahlian</h4>
          <ul>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Mobile Development</a></li>
            <li><a href="#">Data Science</a></li>
            <li><a href="#">Desain UI/UX</a></li>
            <li><a href="#">Database Management</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Sumber Daya</h4>
          <ul>
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Codepen</a></li>
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">Artikel Rekomendasi</a></li>
            <li><a href="#">Tutorial</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Legal & Privasi</h4>
          <ul>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Ketentuan Penggunaan</a></li>
            <li><a href="#">Kebijakan Cookie</a></li>
            <li><a href="#">Hak Cipta</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Raihanul Mawa</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // --- Template Init (from main.js, simplified) ---
      // AOS Animation
      AOS.init({
        duration: 800,
        easing: 'slide',
        once: true,
        mirror: false
      });

      // PureCounter (for stats section)
      new PureCounter();

      // Mobile nav toggle (simplified)
      const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
      const navmenu = document.getElementById('navmenu');

      if (mobileNavToggle) {
        mobileNavToggle.addEventListener('click', function() {
          navmenu.classList.toggle('mobile-active');
          this.classList.toggle('bi-list');
          this.classList.toggle('bi-x');
        });

        // Close mobile nav on click outside or on link click
        document.addEventListener('click', function(event) {
          if (!navmenu.contains(event.target) && !mobileNavToggle.contains(event.target) && navmenu.classList.contains('mobile-active')) {
            navmenu.classList.remove('mobile-active');
            mobileNavToggle.classList.remove('bi-x');
            mobileNavToggle.classList.add('bi-list');
          }
        });

        navmenu.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', function() {
            if (navmenu.classList.contains('mobile-active')) {
              navmenu.classList.remove('mobile-active');
              mobileNavToggle.classList.remove('bi-x');
              mobileNavToggle.classList.add('bi-list');
            }
          });
        });
      }


      // Scroll Top button (simplified)
      const scrollTop = document.querySelector('#scroll-top');
      if (scrollTop) {
        const toggleScrollTop = () => {
          if (window.scrollY > 100) {
            scrollTop.classList.add('active');
          } else {
            scrollTop.classList.remove('active');
          }
        }
        window.addEventListener('load', toggleScrollTop);
        document.addEventListener('scroll', toggleScrollTop);
        scrollTop.addEventListener('click', (e) => {
          e.preventDefault();
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        });
      }

      // FAQ accordion (if still used)
      // This section was removed from HTML, but keeping JS just in case or for reference.
      // You can remove this block if FAQ is permanently removed.
      document.querySelectorAll('.faq-list .faq-item h3').forEach(header => {
        header.addEventListener('click', function() {
          const faqItem = this.closest('.faq-item');
          faqItem.classList.toggle('faq-active');
          const faqContent = faqItem.querySelector('.faq-content');
          if (faqItem.classList.contains('faq-active')) {
            faqContent.style.maxHeight = faqContent.scrollHeight + 'px';
          } else {
            faqContent.style.maxHeight = '0';
          }
        });
      });

      // --- CRUD Functionality (SIMULATED) ---
      let tasks = [
        { id: 1, name: 'Tugas Besar Web Programming', course: 'Pemrograman Web Lanjut', deadline: '2025-08-10', status: 'Dalam Proses' },
        { id: 2, name: 'Presentasi Project Akhir Jaringan', course: 'Jaringan Komputer', deadline: '2025-07-28', status: 'Tertunda' },
        { id: 3, name: 'Laporan Magang Tahap 1', course: 'Magang Industri', deadline: '2025-07-25', status: 'Selesai' }
      ];

      const taskTableBody = document.getElementById('taskTableBody');
      const addTaskForm = document.getElementById('addTaskForm');
      const editTaskForm = document.getElementById('editTaskForm');
      const editTaskId = document.getElementById('editTaskId');

      function renderTasks() {
        taskTableBody.innerHTML = '';
        tasks.forEach((task, index) => {
          const row = `
            <tr data-id="${task.id}">
              <th scope="row">${index + 1}</th>
              <td>${task.name}</td>
              <td>${task.course}</td>
              <td>${task.deadline}</td>
              <td><span class="badge ${getBadgeClass(task.status)}">${task.status}</span></td>
              <td>
                <button class="btn btn-sm btn-info text-white me-2 edit-task-btn" data-bs-toggle="modal" data-bs-target="#editTaskModal" data-id="${task.id}">
                  <i class="bi bi-pencil-square"></i> Edit
                </button>
                <button class="btn btn-sm btn-danger delete-task-btn" data-id="${task.id}">
                  <i class="bi bi-trash"></i> Hapus
                </button>
              </td>
            </tr>
          `;
          taskTableBody.insertAdjacentHTML('beforeend', row);
        });

        // Attach event listeners for edit and delete buttons
        document.querySelectorAll('.edit-task-btn').forEach(button => {
          button.addEventListener('click', function() {
            const taskId = parseInt(this.dataset.id);
            const taskToEdit = tasks.find(t => t.id === taskId);
            if (taskToEdit) {
              document.getElementById('editTaskId').value = taskToEdit.id;
              document.getElementById('editTaskName').value = taskToEdit.name;
              document.getElementById('editCourseName').value = taskToEdit.course;
              document.getElementById('editTaskDeadline').value = taskToEdit.deadline;
              document.getElementById('editTaskStatus').value = taskToEdit.status;
            }
          });
        });

        document.querySelectorAll('.delete-task-btn').forEach(button => {
          button.addEventListener('click', function() {
            const taskId = parseInt(this.dataset.id);
            if (confirm('Apakah Anda yakin ingin menghapus tugas ini?')) {
              tasks = tasks.filter(t => t.id !== taskId);
              renderTasks();
              alert('Tugas berhasil dihapus!');
            }
          });
        });
      }

      function getBadgeClass(status) {
        switch (status) {
          case 'Dalam Proses': return 'bg-warning text-dark';
          case 'Selesai': return 'bg-success';
          case 'Tertunda': return 'bg-danger';
          case 'Belum Dimulai': return 'bg-secondary';
          default: return 'bg-info';
        }
      }

      // Add Task (Create)
      addTaskForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const newTask = {
          id: tasks.length ? Math.max(...tasks.map(t => t.id)) + 1 : 1,
          name: document.getElementById('taskName').value,
          course: document.getElementById('courseName').value,
          deadline: document.getElementById('taskDeadline').value,
          status: document.getElementById('taskStatus').value
        };
        tasks.push(newTask);
        renderTasks();
        addTaskForm.reset();
        const modal = bootstrap.Modal.getInstance(document.getElementById('addTaskModal'));
        modal.hide();
        alert('Tugas berhasil ditambahkan!');
      });

      // Edit Task (Update)
      editTaskForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const taskId = parseInt(document.getElementById('editTaskId').value);
        const taskIndex = tasks.findIndex(t => t.id === taskId);
        if (taskIndex > -1) {
          tasks[taskIndex] = {
            id: taskId,
            name: document.getElementById('editTaskName').value,
            course: document.getElementById('editCourseName').value,
            deadline: document.getElementById('editTaskDeadline').value,
            status: document.getElementById('editTaskStatus').value
          };
          renderTasks();
          const modal = bootstrap.Modal.getInstance(document.getElementById('editTaskModal'));
          modal.hide();
          alert('Tugas berhasil diperbarui!');
        }
      });

      // Initial render
      renderTasks();
    });
  </script>
</body>

</html>