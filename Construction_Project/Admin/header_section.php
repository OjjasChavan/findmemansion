<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  include('Backend/load_data.php');
?>
 
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Header Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Header Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Header Section Form</h5>

              <!--Header Section Form -->
              <form class="row g-3" method="POST" action="Backend/home_settings.php" enctype="multipart/form-data">
                
                    <img src="<?php echo $header_info['header_img']; ?>" class="card-img-top" alt="..." height="400px" width="277px">
                    <div class="card-body"><br>
                      <label>Upload Image</label>
                      <input type="file" name="header_img" accept=".png,.jpg,.jpeg" class="form-control"><br>
                      <input type="hidden" name="old_header_img" value="<?php echo $header_info['header_img'] ?>">
                      
               <div class="text-center">
                  <button type="submit"  name="header_section" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Header Section Form -->

            </div>
          </div>
        
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>
