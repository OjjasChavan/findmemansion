<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  include('Backend/load_data.php');
?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Testimonial Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Testimonial Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Testimonial Section Form</h5>

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/about_setting.php">
                <div class="card-group">
                  <div class="card">
                    <div class="card-body"><br>
                      <label>Testimonial Title</label>
                      <input type="text" name="testimonial_title" class="form-control" value="<?php echo $testimonial_section['testimonial_title']; ?>"><br>
                      
                      <label>Testimonial Description</label>
                      <textarea type="text" name="testimonial_description" class="form-control"><?php echo $testimonial_section['testimonial_description']; ?></textarea>
                    </div>
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit" name="testimonial_section" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Site Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>