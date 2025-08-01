<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Raihanul Mawa - Personal Portfolio & Task Manager</title>
  <meta name="description" content="Situs pribadi Raihanul Mawa: Portofolio proyek, blog, dan alat manajemen tugas kuliah.">
  <meta name="keywords" content="Raihanul Mawa, personal website, portfolio, project management, task manager, kuliah, mahasiswa, blog, teknologi">
  <link href="<?= base_url('assets/img/profile_icon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/profile_apple_icon.png') ?>" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Raihan's Web</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Saya</a></li>
          <li><a href="#portfolio">Portofolio</a></li>
          <li><a href="#blog">Blog</a></li>
      <?php if (logged_in()): ?>
          <li><a href="#task-manager">Manajemen Tugas Kuliah</a></li>
      <?php endif; ?>
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    <?php if (logged_in()): ?>
        <a class="btn-getstarted" href="#task-manager">Kelola Tugas</a>
        <a class="btn-getstarted ms-2" href="<?= base_url('logout') ?>">Logout</a>
    <?php else: ?>
      <a class="btn-getstarted" href="<?= base_url('login') ?>">Login</a>
    <?php endif; ?>
    </div>
  </header>

  <main class="main">
    <?= $this->renderSection('content') ?>
  </main>

  <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
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

  <footer id="footer" class="footer position-relative">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Raihan's Web</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Cianjur, Jawa Barat</p>
            <p>Indonesia</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>+62 857-7351-7348</span></p>
            <p><strong>Email:</strong> <span>raihanulmawa@gmail.com</span></p>
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
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Raihan's Web</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- Template Init ---
        AOS.init({ duration: 800, easing: 'slide', once: true, mirror: false });
        new PureCounter();
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const navmenu = document.getElementById('navmenu');
        if (mobileNavToggle) {
            mobileNavToggle.addEventListener('click', function() {
                navmenu.classList.toggle('mobile-active');
                this.classList.toggle('bi-list');
                this.classList.toggle('bi-x');
            });
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
        const scrollTop = document.querySelector('#scroll-top');
        if (scrollTop) {
            const toggleScrollTop = () => {
                if (window.scrollY > 100) { scrollTop.classList.add('active'); } else { scrollTop.classList.remove('active'); }
            }
            window.addEventListener('load', toggleScrollTop);
            document.addEventListener('scroll', toggleScrollTop);
            scrollTop.addEventListener('click', (e) => { e.preventDefault(); window.scrollTo({ top: 0, behavior: 'smooth' }); });
        }
        document.querySelectorAll('.faq-list .faq-item h3').forEach(header => {
            header.addEventListener('click', function() {
                const faqItem = this.closest('.faq-item'); faqItem.classList.toggle('faq-active'); const faqContent = faqItem.querySelector('.faq-content');
                if (faqItem.classList.contains('faq-active')) { faqContent.style.maxHeight = faqContent.scrollHeight + 'px'; } else { faqContent.style.maxHeight = '0'; }
            });
        });

      // --- CRUD Functionality (DATABASE-DRIVEN) ---
      const taskTableBody = document.getElementById('taskTableBody');
      const addTaskForm = document.getElementById('addTaskForm');
      const editTaskForm = document.getElementById('editTaskForm');

      // Pastikan elemen ada sebelum dijalankan
      if (taskTableBody) {
          renderTasks();
          function renderTasks() {
              fetch('<?= base_url('api/tasks') ?>')
                  .then(response => response.json())
                  .then(tasks => {
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
                      attachEventListeners();
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
          function attachEventListeners() {
              document.querySelectorAll('.edit-task-btn').forEach(button => {
                  button.addEventListener('click', function() {
                      const taskId = parseInt(this.dataset.id);
                      fetch('<?= base_url('api/tasks/') ?>' + taskId)
                          .then(response => response.json())
                          .then(taskToEdit => {
                              if (taskToEdit) {
                                  document.getElementById('editTaskId').value = taskToEdit.id;
                                  document.getElementById('editTaskName').value = taskToEdit.name;
                                  document.getElementById('editCourseName').value = taskToEdit.course;
                                  document.getElementById('editTaskDeadline').value = taskToEdit.deadline;
                                  document.getElementById('editTaskStatus').value = taskToEdit.status;
                              }
                          });
                  });
              });
              document.querySelectorAll('.delete-task-btn').forEach(button => {
                  button.addEventListener('click', function() {
                      const taskId = parseInt(this.dataset.id);
                      if (confirm('Apakah Anda yakin ingin menghapus tugas ini?')) {
                          fetch('<?= base_url('api/tasks/') ?>' + taskId, { method: 'DELETE' })
                          .then(response => response.json())
                          .then(data => {
                              alert(data.message);
                              renderTasks();
                          });
                      }
                  });
              });
          }
          if (addTaskForm) {
              addTaskForm.addEventListener('submit', function(event) {
                  event.preventDefault();
                  const newTask = {
                      name: document.getElementById('taskName').value, course: document.getElementById('courseName').value,
                      deadline: document.getElementById('taskDeadline').value, status: document.getElementById('taskStatus').value
                  };
                  fetch('<?= base_url('api/tasks') ?>', {
                      method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(newTask)
                  })
                  .then(response => response.json())
                  .then(data => {
                      alert(data.message); renderTasks(); addTaskForm.reset();
                      bootstrap.Modal.getInstance(document.getElementById('addTaskModal')).hide();
                  });
              });
          }
          if (editTaskForm) {
              editTaskForm.addEventListener('submit', function(event) {
                  event.preventDefault();
                  const taskId = parseInt(document.getElementById('editTaskId').value);
                  const updatedTask = {
                      name: document.getElementById('editTaskName').value, course: document.getElementById('editCourseName').value,
                      deadline: document.getElementById('editTaskDeadline').value, status: document.getElementById('editTaskStatus').value
                  };
                  fetch('<?= base_url('api/tasks/') ?>' + taskId, {
                      method: 'PUT', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(updatedTask)
                  })
                  .then(response => response.json())
                  .then(data => {
                      alert(data.message); renderTasks();
                      bootstrap.Modal.getInstance(document.getElementById('editTaskModal')).hide();
                  });
              });
          }
      }
    });
  </script>
</body>
</html>