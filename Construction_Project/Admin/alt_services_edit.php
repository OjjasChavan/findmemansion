<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  include('Backend/load_data.php');

  $id= $_GET['id'];
  $alt_servicesQ = "SELECT * FROM alt_services_section WHERE id='$id'";
  $alt_servicesR=mysqli_query($conn,$alt_servicesQ);
  $alt_services_info = mysqli_fetch_array($alt_servicesR);
?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Alt Services Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Alt Services Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Alt Services Section Form</h5>

              <!-- Alt Services Section  Form -->
              <form class="row g-3" method="POST" action="Backend/about_setting.php" enctype="multipart/form-data">
                <div class="col-6">
                  <label for="page_title" class="form-label">Page Title</label>
                  <input type="text" class="form-control" name="page_title" value="<?php echo $alt_services_info['page_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="discription" class="form-label">Discription</label>
                  <textarea  class="form-control" name="discription"><?php echo $alt_services_info['discription']; ?></textarea>
                </div><hr>
               
                <div class="col-6">
                  <label for="img" class="form-label">Upload Image</label>
                  <input type="file"  accept=".jpg,.png,.jpeg" class="form-control" name="img" >
                  <img src="<?php echo $alt_services_info['img']; ?>" height="100" width="200" >
                  <input type="hidden" name="old_img" value="<?php echo $alt_services_info['img']; ?>">
                </div>
                
                <h6 class="card-text">Card One</h6>
                <div class="col-6">
                  <label for="card1_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card1_title" value="<?php echo $alt_services_info['card1_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="card1_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card1_sub_title" value="<?php echo $alt_services_info['card1_sub_title']; ?>">
                </div>
                <h6 class="card-text">Card Two</h6>
                <div class="col-6">
                  <label for="card2_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card2_title" value="<?php echo $alt_services_info['card2_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="card2_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card2_sub_title" value="<?php echo $alt_services_info['card2_sub_title']; ?>">
                </div>
                <h6 class="card-text">Card Three</h6>
                <div class="col-6">
                  <label for="card3_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card3_title" value="<?php echo $alt_services_info['card3_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="card3_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card3_sub_title" value="<?php echo $alt_services_info['card3_sub_title']; ?>">
                </div>
                <h6 class="card-text">Card Four</h6>
                <div class="col-6">
                  <label for="card4_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card4_title" value="<?php echo $alt_services_info['card4_title']; ?>">
                </div>
                <div class="col-6">
                  <label for="card4_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card4_sub_title" value="<?php echo $alt_services_info['card4_sub_title']; ?>">
                </div>

              </form><!-- Alt Services Setting Form --> 
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>