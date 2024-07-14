<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Social Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Social setting</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Social Setting Form</h5>

              <!-- Social Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/settings.php">
                <div class="col-12">
                  <label for="twitter_url" class="form-label">Twitter URL</label>
                  <input type="text" class="form-control" name="twitter_url" value="<?php echo $social_info['twitter_url']; ?>">
                </div>
                <div class="col-12">
                  <label for="instagram_url" class="form-label">Instagram URL</label>
                  <input type="text" class="form-control" name="instagram_url" value="<?php echo $social_info['instagram_url']; ?>">
                </div>
                <div class="col-12">
                  <label for="facebook_url" class="form-label">Facebook URL</label>
                  <input type="text" class="form-control" name="facebook_url" value="<?php echo $social_info['facebook_url']; ?>">
                </div>
                <div class="col-12">
                  <label for="linkdin_url" class="form-label">Linkdin URL</label>
                  <input type="text" class="form-control" name="linkdin_url" value="<?php echo $social_info['linkdin_url']; ?>">
                </div>
                <div class="text-center">
                  <button type="submit"  name="social" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Social Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>