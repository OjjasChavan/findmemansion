<?php 
include('Backend/conn.php');
include('Backend/load_data.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - <?php echo $site_info['site_title']; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block"><h2 style="font-weight: bold; margin-top: 10px" >Find Me Mansion</h2></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="data:image/png;base64,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" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="view_inquiry.php">
          <i class="bi bi-grid"></i>
          <span>View Inquiry</span>
        </a>
      </li><!-- End Dashboard Nav -->

      


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#home-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Home Setting</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="home-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="carousel_setting.php">
              <i class="bi bi-circle"></i><span>Carousel Section</span>
            </a>
          </li>
          <li>
            <a href="constructions_section_view.php">
              <i class="bi bi-circle"></i><span>Constructions Section</span>
            </a>
          </li>
          <li>
            <a href="services_section.php">
              <i class="bi bi-circle"></i><span>Services Section</span>
            </a>
          </li>
        </ul>
      </li><!-- End Home Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Team Settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="team-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="team_section_view.php">
              <i class="bi bi-circle"></i><span>Team Section</span>
            </a>
          </li>
          <li>
            <a href="gallery_section_add.php">
              <i class="bi bi-circle"></i><span>Team Section</span>
            </a>
          </li>
        </ul>
      </li><!-- End Team Nav -->
    </ul>

  </aside><!-- End Sidebar-->