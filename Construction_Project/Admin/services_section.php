<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Services Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Services Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">services Section Form</h5>

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/home_settings.php" enctype="multipart/form-data">
                <div class="card-group">
                  <div class="card">
                    <div class="card-header">
                      Card One
                    </div>
                    <div class="card-body"><br>
                      <label>Card Title</label>
                      <input type="text" name="card_title" class="form-control" value="<?php echo $services_info['card_title']; ?>"><br>
                      <label>Card Subtitle</label>
                      <textarea type="text" name="card_subtitle" class="form-control"><?php echo $services_info['card_subtitle']; ?></textarea>
                    </div>
                  </div>
                  <div class="card">
                     <div class="card-header">
                      Card Two
                    </div>
                    <div class="card-body"><br>
                      <label>Card Title</label>
                      <input type="text" name="card_title1" class="form-control" value="<?php echo $services_info['card_title1']; ?>"><br>
                      <label>Card Subtitle</label>
                      <textarea type="text" name="card_subtitle1" class="form-control"><?php echo $services_info['card_subtitle1']; ?></textarea>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      Card Three
                    </div>
                    <div class="card-body"><br>
                      <label>Card Title</label>
                      <input type="text" name="card_title2" class="form-control" value="<?php echo $services_info['card_title2']; ?>"><br>
                      <label>Card Subtitle</label>
                      <textarea type="text" name="card_subtitle2" class="form-control"><?php echo $services_info['card_subtitle2']; ?></textarea>
                    </div>
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit"  name="home_services" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- services Section  Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>