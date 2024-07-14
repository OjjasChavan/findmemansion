
<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  include('Backend/load_data.php');           
?>



  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Image Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Add</li>
          <li class="breadcrumb-item active">Image Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Image Section Form</h5>

              <!-- Gallery Setting Form -->
              <form class="row g-3" method="POST" action="Backend/gallery_setting.php" enctype="multipart/form-data">

                <div class="col-12">
                  <label for="category" class="form-label">Image Category</label>
                  <input type="text" class="form-control" name="category" placeholder="Enter Image Category(nature/sports/animals/people)" >
                </div>

                <div class="col-12">
                  <label for="img" class="form-label">Upload Image</label>
                  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg" >
                </div>

                <div class="col-12">
                  <label for="img_title" class="form-label">Image Title</label>
                  <input type="text" class="form-control" name="img_title" placeholder="Enter Image Name" >
                </div>

                <div class="text-center">
                  <button type="submit"  name="add_image" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Gallery Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>