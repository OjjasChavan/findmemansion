<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  include('Backend/load_data.php');
?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Gallery Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Header setting</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Header Setting Form</h5>

              <!-- Gallery Header Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/gallery_setting.php">
                <div class="col-12">
                  <label for="page_title" class="form-label">Page Title</label>
                  <input type="text" class="form-control" name="page_title" value="<?php echo $gallery_info['page_title']; ?>">
                </div>

                <div class="col-12">
                  <label for="page_description" class="form-label">Page Description</label>
                  <textarea type="text" class="form-control" name="page_description"><?php echo $gallery_info['page_description']; ?></textarea>
                </div>

                <div class="text-center">
                  <button type="submit"  name="gallery_header" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Gallery Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>