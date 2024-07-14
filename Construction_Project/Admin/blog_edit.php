<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');

$id= $_GET['id'];
$blogQ = "SELECT * FROM blog_info WHERE id='$id'";
$blogR=mysqli_query($conn,$blogQ);
$blog_info = mysqli_fetch_array($blogR);
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blog Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Blog Form</h5>

              <!-- Blog Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/blog_settings.php?blog_id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="img" class="form-label">Blog Image</label>
                  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg">
                  <img src="<?php echo $blog_info['img'] ?>" height="100" width="200" class="img-thumbnail">
                  <input type="hidden" name="old_img" value="<?php echo $blog_info['img']; ?>" >
                </div>
                <div class="col-12">
                  <label for="blog_title" class="form-label">Blog Title</label>
                  <input type="text" class="form-control" name="blog_title" value="<?php echo $blog_info['blog_title']; ?>">
                </div>
                <div class="col-12">
                  <label for="writer_name" class="form-label">Writer Name</label>
                  <input type="text" class="form-control" name="writer_name" value="<?php echo $blog_info['writer_name']; ?>">
                </div>
                <div class="col-12">
                  <label for="date" class="form-label">Date</label>
                  <input type="date" class="form-control" name="date" value="<?php echo $blog_info['date']; ?>">
                </div>
                <div class="col-12">
                  <label for="date" class="form-label">Description</label>
                  <textarea name="description" class="form-control tinymce-editor"><?php echo $blog_info['description']; ?></textarea>
                </div>
                <div class="text-center">
                  <button type="submit"  name="blog_edit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Blog Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>