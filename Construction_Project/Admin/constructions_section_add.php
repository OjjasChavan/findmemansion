<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');
?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Constructions Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Add</li>
          <li class="breadcrumb-item active">Constructions Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Constructions Section Form</h5>

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/constructions_setting.php" enctype="multipart/form-data">
                <div class="col-6">
                  <label for="img" class="form-label">Upload Image</label>
                  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg" >
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>

                <div class="col-6">
                  <label for="description" class="form-label">Description</label>
                  <textarea type="text" class="form-control" name="description" placeholder="Enter Description"></textarea>
                </div>

                <div class="text-center">
                  <button type="submit"  name="add_constructions" class="btn btn-primary">Add</button>
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