<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Site Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Site setting</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Site Setting Form</h5>

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/settings.php">
                <div class="col-12">
                  <label for="site_title" class="form-label">Site Title</label>
                  <input type="text" class="form-control" name="site_title" value="<?php echo $site_info['site_title']; ?>">
                </div>
                <div class="col-12">
                  <label for="site_name" class="form-label">Site Name</label>
                  <input type="text" class="form-control" name="site_name" value="<?php echo $site_info['site_name']; ?>">
                </div>
                <div class="col-12">
                  <label for="footer_text" class="form-label">Footer Text</label>
                  <input type="text" class="form-control" name="footer_text" value="<?php echo $site_info['footer_text']; ?>">
                </div>
                <div class="text-center">
                  <button type="submit"  name="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Site Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>