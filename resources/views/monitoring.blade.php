<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Monitoring | Hatect</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="img/Logo Hatect/Logo Hatect.png" />
    <style>
        .chatbox-container {
    z-index: 9999;
    }

    .chatbox-container .card {
        border-radius: 10px;
    }

    .chatbox-container .chat-messages {
        padding: 10px;
        font-size: 14px;
    }

    .chatbox-container .message {
        padding: 10px;
        margin-bottom: 5px;
        border-radius: 5px;
    }

    .chatbox-container .bot-message {
        background-color: #f1f1f1;
        text-align: left;
    }

    .chatbox-container .user-message {
        background-color: #007bff;
        color: white;
        text-align: right;
    }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="index.html"><img src="assets/images/Logo Hatect/Logo Text.png" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="logout">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile') }}">
                <span class="menu-title">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('monitoring') }}">
                <span class="menu-title">Monitoring</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </div>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">CCTV Real-Time </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
              <div id="weatherCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="card tale-bg position-relative">
                    <div class="card-people mt-auto">
                        <img src="img/cabai.jpg" alt="cabai1">
                    </div>
                    <div class="weather-info position-absolute top-0 end-0 m-3 text-end" style="color: white;">
                        <div>
                        <h2 class="mb-2 font-weight-normal">
                            <i class="icon-sun me-2"></i>28<sup>°C</sup>
                        </h2>
                        </div>
                        <div>
                        <h4 class="location font-weight-normal">Bogor</h4>
                        <h6 class="font-weight-normal">Babakan</h6>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="card tale-bg position-relative">
                    <div class="card-people mt-auto">
                    <img src="img/cabai2.jpg" alt="people">
                    </div>
                    <div class="weather-info position-absolute top-0 end-0 m-3 text-end" style="color: white;">
                        <div>
                        <h2 class="mb-2 font-weight-normal">
                            <i class="icon-cloud me-2"></i>28<sup>°C</sup>
                        </h2>
                        </div>
                        <div>
                        <h4 class="location font-weight-normal">Bogor</h4>
                        <h6 class="font-weight-normal">Babakan</h6>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Tambahkan slide lainnya jika perlu -->
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#weatherCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#weatherCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
              </div>
            
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <p class="card-title">Pest Quick Monitoring</p>
                      <a class="text-info">Last 30 days</a>
                    </div>
                    <p class="font-weight-500">
                      Pest Quick Monitoring merupakan sistem atau fitur yang digunakan untuk memantau keberadaan, jenis, dan jumlah hama secara cepat pada suatu area tertentu, seperti ladang atau perkebunan.
                    </p>
                    <div id="sales-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
                    <canvas id="sales-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <!-- Container untuk menampilkan elemen secara berdampingan -->
              <div class="d-flex justify-content-between">
                <!-- Bagian #2 -->
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Distribusi Jenis Hama yang Terdeteksi</p>
                      <p class="font-weight-500">
                        Total distribusi hama yang menyerang ladang Anda  selama satu bulan terakhir
                      </p>
                    <div class="chart-container" style="position: relative; height: 300px; width: 300px;">
                      <canvas id="pest-distribution-chart"></canvas>
                    </div>
                  <div id="pest-legend" style="margin-top: 20px;"></div>
                </div>
              </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title mb-0">Status Hama di Ladang</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Nama Tanaman</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Cabai Rawit</td>
                            <td>27 Nov 2024</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-success">Aman</div>
                            </td>
                          </tr>
                          <tr>
                            <td>Cabai Rawit</td>
                            <td>26 Nov 2024</td>
                            <td class="font-weight-medium">
                              <div class="badge badge-success">Aman</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
              <!-- Container untuk menampilkan elemen secara berdampingan -->
              <div class="d-flex justify-content-between">
              <!-- Chatbox -->
                <div class="chatbox-container position-fixed bottom-0 end-0 p-3">
                <div id="chatbox" class="card" style="width: 300px;">
                    <div class="card-header">
                    Hubungi Ahli Pertanian
                    </div>
                    <div class="card-body">
                    <div id="chat-messages" class="chat-messages" style="max-height: 200px; overflow-y: auto;">
                        <!-- Pesan awal -->
                        <div class="message bot-message">
                        Halo! Ada yang bisa dibantu?
                        </div>
                    </div>
                    <input type="text" id="user-message" class="form-control" placeholder="Tulis pesan..." onkeydown="if(event.key === 'Enter'){sendMessage();}">
                    </div>
                    </div>
                </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="../../assets/js/chart.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>