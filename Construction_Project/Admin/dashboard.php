<?php
session_start(); 
if(!isset($_SESSION['login_id']))
{
      header("Location: index.php");

}

include 'layout/header.php';
include ('Backend/conn.php');
 ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Clients <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                      $c_result=mysqli_query($conn,"SELECT count(*) as c_total from client_setting");
                        $c_data=mysqli_fetch_assoc($c_result);
                       ?>
                      <h6><?php echo $c_data['c_total']; ?></h6>
                     </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Testimonials <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-menu-up"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $t_result=mysqli_query($conn,"SELECT count(*) as t_total from testimonial_info");
                        $t_data=mysqli_fetch_assoc($t_result);
                       ?>
                      <h6><?php echo $t_data['t_total']; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-4">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Inquiries <span>| Today </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-question-diamond"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $i_result=mysqli_query($conn,"SELECT count(*) as i_total from inquiry_info");
                        $i_data=mysqli_fetch_assoc($i_result);
                       ?>
                      <h6><?php echo $i_data['i_total']; ?></h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
  

          </div>
        </div><!-- End Left side columns -->

      </div>
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Blog <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-pencil-fill"></i>
                    </div>
                    <div class="ps-3">
                      <?php 
                        $b_result=mysqli_query($conn,"SELECT count(*) as b_total from blog_info");
                        $b_data=mysqli_fetch_assoc($b_result);
                       ?>
                      <h6><?php echo $b_data['b_total']; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Team <span>| Today</span></h5>

                  <div class="d-flex align-items-center ">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" >
                      <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>3</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

           
  

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <?php include 'layout/footer.php'; ?>
  