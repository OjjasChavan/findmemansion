<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Carousel Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Carousel setting</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Carousel Setting Form</h5>

              <!-- Carousel Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/home_settings.php" enctype="multipart/form-data">
                <div>
                <label>Carousel Title</label>
                      <input type="text" name="carousel_title" class="form-control" value="<?php echo $carousel_info['carousel_title']; ?>"><br>
                      <label>Carousel Discription</label>
                      <textarea type="text" name="carousel_discription" class="form-control"><?php echo $carousel_info['carousel_discription']; ?></textarea>
                  </div>
                <div class="card-group">
                  <div class="card">

                    <img src="<?php echo $carousel_info['carousel_img']; ?>" class="card-img-top" alt="..." height="200px" width="100px">
                    <div class="card-body"><br>
                      <label>Upload Image</label>
                      <input type="file" name="carousel_img" accept=".png,.jpg,.jpeg" class="form-control"><br>
                      <input type="hidden" name="old_carousel_img" value="<?php echo $carousel_info['carousel_img'] ?>">
                      
                    </div>
                  </div>
                  <div class="card">
                    <img src="<?php echo $carousel_info['carousel_img1']; ?>" class="card-img-top" alt="..." height="200px" width="100px">
                    <div class="card-body"><br>
                      <label>Upload Image</label>
                      <input type="file" name="carousel_img1" accept=".png,.jpg,.jpeg" class="form-control"><br>
                      <input type="hidden" name="old_carousel_img1" value="<?php echo $carousel_info['carousel_img1'] ?>">
                      
                    </div>
                  </div>
                  <div class="card">
                    <img src="<?php echo $carousel_info['carousel_img2']; ?>" class="card-img-top" alt="..." height="200px" width="100px">
                    <div class="card-body"><br>
                      <label>Upload Image</label>
                      <input type="file" name="carousel_img2" accept=".png,.jpg,.jpeg" class="form-control"><br>
                      <input type="hidden" name="old_carousel_img2" value="<?php echo $carousel_info['carousel_img2'] ?>">
                      
                    </div>
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit"  name="home_carousel" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Carousel Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>