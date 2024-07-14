<?php include('header.php');
include('Admin/Backend/conn.php');
include('Admin/Backend/load_data.php');
 ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('Admin/<?php echo $header_info['header_img']; ?>" class="img-fluid" alt=""');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Sample Inner Page</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Sample Inner Page</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container">

        <p>
          You can duplicate this sample page and create any number of inner pages you like!
        </p>

      </div>
    </section>

  </main><!-- End #main -->

<?php include('footer.php'); ?>