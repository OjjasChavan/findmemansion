<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Blog Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blog Section Form</h5>

              <!-- Blog Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/home_settings.php">
                <div class="col-12">
                <label>Upload Image</label>
                      <input type="file" name="blog_img" accept=".png,.jpg,.jpeg" class="form-control"><br>
                      <input type="hidden" name="old_blog_img" value="<?php echo $blog_info['blog_img'] ?>">
                 </div>
                <div class="col-12">
                  <label for="blog_title" class="form-label">Client Title</label>
                  <input type="text" class="form-control" name="blog_title" value="<?php echo $client_info['blog_title']; ?>">
                </div>
                <div class="text-center">
                  <button type="submit"  name="client_section" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Blog Section Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>