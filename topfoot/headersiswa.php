<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="WEB pendaftaran Siswa SMP">

  <title>WEB Pendaftaran Siswa</title>


  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    .logo-login {
        max-height: 160px;
        margin-bottom: 20px;
    }
  </style>

</head>

<body id="page-top">

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="assets/img/pti.png">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMP Slawe</div>
      </a>

      <!-- Heading -->
      <div class="sidebar-heading">
        <?= $_SESSION['level'] ?>
      </div>

      <?php if($_SESSION['level'] == 'siswa') { ?>

          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
          </li>

          
          <hr class="sidebar-divider my-0">

          <li class="nav-item">
            <a class="nav-link" href="nilai.php">
              <i class="fas fa-fw fa-list"></i>
              <span>Nilai</span></a>
          </li>

        
          <hr class="sidebar-divider my-0">

          <li class="nav-item">
            <a class="nav-link" href="editprofil.php">
              <i class="fas fa-fw fa-user"></i>
              <span>Edit Profil</span></a>
          </li>

      <?php } ?>


      <!-- jika level admin -->
      <?php if($_SESSION['level'] == 'admin') { ?>

          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <li class="nav-item">
            <a class="nav-link" href="pendaftaran.php">
              <i class="fas fa-fw fa-list"></i>
              <span>Data Pendaftaran</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <li class="nav-item">
            <a class="nav-link" href="laporan.php">
              <i class="fas fa-fw fa-list"></i>
              <span>Laporan</span></a>
          </li> 
      
      <?php } ?>

      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama']; ?></span>
                <?php
                if(isset($data_pendaftar['foto']) && $data_pendaftar['foto'] != '') {
                    $foto = '../uploads/' . $data_pendaftar['foto'];
                } else {
                    $foto = '../assets/img/avatar.jpg';
                }
                ?>
                <img class="img-profile rounded-circle" src="<?= $foto ?>">
              </a>
            
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <?php if($_SESSION['level'] == 'siswa') { ?>
                
                  <a class="dropdown-item" href="<?= $base_url ?>/siswa/editprofil.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Edit Profil
                  </a>
                  <div class="dropdown-divider"></div>

                <?php } ?>
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>