<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Alt Services Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Add</li>
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

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/about_setting.php" enctype="multipart/form-data">
                <div class="col-6">
                  <label for="page_title" class="form-label">Page Title</label>
                  <input type="text" class="form-control" name="page_title" placeholder="Enter page_title">
                </div>
                  <div class="col-6">
                  <label for="description" class="form-label">Description</label>
                  <textarea type="text" class="form-control" name="description" placeholder="Enter Description"></textarea>
                </div>
                <div class="col-6">
                  <label for="img" class="form-label">Upload Image</label>
                  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg" >
                </div>
                 <div class="col-6">
                  <label for="card1_title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="card1_title" placeholder="Enter card1_title">
                </div>
                <div class="col-6">
                  <label for="card1_sub_title" class="form-label">Sub Title</label>
                  <input type="text" class="form-control" name="card1_sub_title" placeholder="Enter card1_sub_title">
                </div>
                <div class="col-6">
                  <label for="card1_title" class="form-label">Title2</label>
                  <input type="text" class="form-control" name="card2_title" placeholder="Enter card2_title">
                </div>
                <div class="col-6">
                  <label for="card2_sub_title" class="form-label">Sub Title2</label>
                  <input type="text" class="form-control" name="card2_sub_title" placeholder="Enter card2_sub_title">
                </div>
                <div class="col-6">
                  <label for="card1_title" class="form-label">Title3</label>
                  <input type="text" class="form-control" name="card3_title" placeholder="Enter card3_title">
                </div>
                <div class="col-6">
                  <label for="card1_sub_title" class="form-label">Sub Title3</label>
                  <input type="text" class="form-control" name="card3_sub_title" placeholder="Enter card3_sub_title">
                  </div>
                <div class="col-6">
                  <label for="card1_title" class="form-label">Title4</label>
                  <input type="text" class="form-control" name="card4_title" placeholder="Enter card4_title">
                </div>
                <div class="col-6">
                  <label for="card4_sub_title" class="form-label">Sub Title4</label>
                  <input type="text" class="form-control" name="card4_sub_title" placeholder="Enter card4_sub_title">
                </div>

                <div class="text-center">
                  <button type="submit"  name="add_alt_services" class="btn btn-primary">Save</button>
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