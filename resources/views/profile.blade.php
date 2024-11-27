<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile | Hatect</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="img/Logo Hatect/Logo Hatect.png" />
    <style>
      .main-content {
        display: flex;
        gap: 20px;
      }
      .edit-profile, .change-photo {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }
      .edit-profile input, .change-photo input {
        color: black; /* Tetap hitam untuk input */
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- Navbar -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <a class="navbar-brand brand-logo me-5" href="index.html">
            <img src="assets/images/Logo Hatect/Logo Text.png" alt="logo" />
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- Sidebar -->
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
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
        </nav>
        <!-- Main Panel -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row main-content">
              <!-- Edit Profile Section -->
              <div class="col-md-6 edit-profile">
                <h1>Edit Profile</h1>
                <form method="POST" action="{{ route('update') }}">
                  @csrf
                  <p>Name</p>
                  <div class="form-group mb-3">
                    <input type="text" id="name" name="name" class="form-control" required>
                  </div>
                  <p>Email</p>
                  <div class="form-group mb-3">
                    <input type="email" id="email" name="email" class="form-control" required>
                  </div>
                  <p>Phone Number</p>
                  <div class="form-group mb-3">
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                  </div>
                  <p>Address</p>
                  <div class="form-group mb-3">
                    <input type="text" id="address" name="address" class="form-control" required>
                  </div>
                  <p>Date of Birth</p>
                  <div class="form-group mb-3">
                    <input type="date" id="dob" name="dob" class="form-control" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
              <!-- Change Photo Section -->
              <div class="col-md-6 change-photo">
                <h1>Edit Photo</h1>
                <form method="POST" action="#" enctype="multipart/form-data">
                  @csrf
                  <img src="img/logoProfile.png" alt="Profile Picture" class="mb-3">
                  <div class="form-group mb-3">
                    <label for="photo">Upload New Photo:</label>
                    <input type="file" id="photo" name="photo" class="form-control" accept="image/*" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Upload</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
  </body>
</html>
