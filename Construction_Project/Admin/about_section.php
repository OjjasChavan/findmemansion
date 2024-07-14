<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>AboutUs Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">AboutUs Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">AboutUs Section </h5>

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/about_setting.php" enctype="multipart/form-data">
                <div class="col-6">
                  <label for="page_title" class="form-label">Page Title</label>
                  <input type="text" class="form-control" name="page_title" value="<?php echo $about_info['page_title']; ?>">
                </div><div class="col-6">
                  <label for="year" class="form-label">Year</label>
                  <input type="text" class="form-control" name="year" value="<?php echo $about_info['year']; ?>">
                </div>

                

                <div class="col-6">
                  <label for="video" class="form-label">Upload Videos</label>
                  <input type="file"  accept=".mp4,.mp3" class="form-control" name="video" autoplay="autoplay">
                  <video src="<?php echo $about_info['video']; ?>" height="100" width="200" >
                  <input type="hidden" name="old_video" value="<?php echo $about_info['video']; ?>">
                </div>
                <div class="col-6">
                  <label for="img" class="form-label">Upload Image</label>
                  <input type="file"  accept=".jpg,.png,.jpeg" class="form-control" name="img" >
                  <img src="<?php echo $about_info['img']; ?>" height="100" width="200" >
                  <input type="hidden" name="old_img" value="<?php echo $about_info['img']; ?>">
                </div>
                <div class="col-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" value="<?php echo $about_info['title']; ?>">
                </div>
                <div class="col-6">
                  <label for="sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="sub_title" value="<?php echo $about_info['sub_title']; ?>">
                </div>
                 <div class="col-6">
                  <label for="l1_title" class="form-label"> List One Title</label>
                  <input type="text" class="form-control" name="l1_title" value="<?php echo $about_info['l1_title']; ?>">
                </div>
                 <div class="col-6">
                  <label for="l2_title" class="form-label">List Two Title</label>
                  <input type="text" class="form-control" name="l2_title" value="<?php echo $about_info['l2_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="l3_title" class="form-label">List Three  Title</label>
                  <input type="text" class="form-control" name="l3_title" value="<?php echo $about_info['l3_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="discription" class="form-label">Discription</label>
                  <textarea  class="form-control" name="discription"><?php echo $about_info['discription']; ?></textarea>
                </div><hr>

                <h5 class="card-title">Counter Section </h5>
                <h6 class="card-text">Card One</h6>
                <div class="col-6">
                  <label for="card1_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card1_title" value="<?php echo $about_info['card1_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="card1_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card1_sub_title" value="<?php echo $about_info['card1_sub_title']; ?>">
                </div>
                <h6 class="card-text">Card Two</h6>
                <div class="col-6">
                  <label for="card2_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card2_title" value="<?php echo $about_info['card2_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="card2_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card2_sub_title" value="<?php echo $about_info['card2_sub_title']; ?>">
                </div>
                <h6 class="card-text">Card Three</h6>
                <div class="col-6">
                  <label for="card3_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card3_title" value="<?php echo $about_info['card3_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="card3_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card3_sub_title" value="<?php echo $about_info['card3_sub_title']; ?>">
                </div>
                <h6 class="card-text">Card Four</h6>
                <div class="col-6">
                  <label for="card4_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card4_title" value="<?php echo $about_info['card4_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="card4_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card4_sub_title" value="<?php echo $about_info['card4_sub_title']; ?>">
                </div>


                <div class="text-center">
                  <button type="submit"  name="about_section" class="btn btn-primary">Update</button>
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
