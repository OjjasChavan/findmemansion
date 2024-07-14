<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');

$id= $_GET['id'];
$testQ = "SELECT * FROM testimonial_info WHERE id='$id'";
$testR=mysqli_query($conn,$testQ);
$testimonial_info = mysqli_fetch_array($testR);
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Testimonials Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Testimonials Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Testimonials Section Form</h5>

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/about_setting.php?t_id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter your name" value="<?php echo $testimonial_info['name']; ?>">
                </div>
                 <div class="col-12">
                  <label for="post" class="form-label">Post</label>
                  <input type="text" class="form-control" name="post" placeholder="Enter your post" value="<?php echo $testimonial_info['post']; ?>">
                </div>
                <div class="col-12">
                  <label for="img" class="form-label">Upload  Image</label>
                  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg" >
                  <img src="<?php echo $testimonial_info['img'] ?>" height="100" width="200" class="img-thumbnail">
                  <input type="hidden" name="old_img" value="<?php echo $testimonial_info['img']; ?>" >
                </div>
                 <div class="col-12">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" name="description" placeholder="Enter Description"><?php echo $testimonial_info['description']; ?></textarea>
                </div>
                <div class="text-center">
                  <button type="submit"  name="edit_testimonial" class="btn btn-primary">Update</button>
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