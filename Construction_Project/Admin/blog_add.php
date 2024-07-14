<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Add</li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Blog Form</h5>

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/blog_settings.php" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="img" class="form-label">Blog Image</label>
                  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg">
                </div>
                <div class="col-12">
                  <label for="blog_title" class="form-label">Blog Title</label>
                  <input type="text" class="form-control" name="blog_title" >
                </div>
                <div class="col-12">
                  <label for="writer_name" class="form-label">Writer Name</label>
                  <input type="text" class="form-control" name="writer_name">
                </div>
                <div class="col-12">
                  <label for="date" class="form-label">Date</label>
                  <input type="date" class="form-control" name="date" >
                </div>
                <div class="col-12">
                  <label for="date" class="form-label">Description</label>
                  <textarea name="description" class="form-control tinymce-editor"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit"  name="blog_add" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Contact Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>