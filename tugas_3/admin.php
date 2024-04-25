<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Include AdminLTE CSS -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <?php include "navbar.php"; ?>
    <!-- navbar.php -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link">Home</a>
        </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="profil.php" class="nav-link">Profil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="contact.php" class="nav-link">Contact</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="login.php" class="nav-link">Login</a>
      </li>
    </ul>
  </nav>
  
    <!-- Main Sidebar Container -->
    <?php include "sidebar.php"; ?>
    <!-- sidebar.php -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar content -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <a href="#" class="brand-link">
        <img src="C:\Searches\Saved Games\Documents\Contacts\Music\Music\Pictures\IMG_1395.JPG" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Pratikum pw2</span>
        </a>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="C:\Searches\Saved Games\Documents\Contacts\Music\Music\Pictures\All Photos And Videos\Fashya Sangadji\20190405185839_IMG_0816.JPG" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">Nur ida</a>
            </div>
            </div>
        </a>
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
          <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
          </button>
          </div>
          </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
          </div>
        </a>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Pratikum <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
              <a href="form_nilai.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pratikum 1</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="form_registrasi.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pratikum 2</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="form_registrasi.php" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Pratikum 3</p>
              </a>
              </li>
              </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>Tugas Akhir <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item">
              <a href="belanja.online.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tugas 1</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="form_nilai.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tugas 2</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Tugas 3</p>
              </a>
              </li>
              </ul>
          </li>
            <li class="nav-item">
        <a href="login.php" class="nav-link">Logout</a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    
    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h1>Pratikum</h1>
                <!-- Add your content here -->
            </div>
        </section>
    </div>
    
    <!-- Footer -->
    <?php include "footer.php"; ?>
    <!-- footer.php -->
    <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
</div>
    <strong>Tuharea &copy; 2024</strong>
</footer>
<!-- Include AdminLTE JS -->
<script src="adminlte/js/adminlte.min.js"></script>
</body>
</html>