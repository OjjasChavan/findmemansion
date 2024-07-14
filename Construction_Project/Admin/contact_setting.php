<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Contact setting</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact Setting Form</h5>

              <!-- Contact Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/settings.php">
                <div class="col-12">
                  <label for="contact_no" class="form-label">Contact Number</label>
                  <input type="text" class="form-control" name="contact_no" value="<?php echo $contact_info['contact_no']; ?>">
                </div>
                <div class="col-12">
                  <label for="email" class="form-label">Email Id</label>
                  <input type="email" class="form-control" name="email" value="<?php echo $contact_info['email']; ?>">
                </div>
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" name="address" value="<?php echo $contact_info['address']; ?>">
                </div>
                <div class="col-12">
                  <label for="map" class="form-label">Map</label>
                  <input type="text" class="form-control" name="map" value="<?php echo $contact_info['map']; ?>">
                </div>
                <div class="col-12">
                  <label for="contact_title" class="form-label">Contact Page Title</label>
                  <input type="text" class="form-control" name="contact_title" value="<?php echo $contact_info['contact_title']; ?>">
                </div>
                <div class="text-center">
                  <button type="submit"  name="contact" class="btn btn-primary">Update</button>
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