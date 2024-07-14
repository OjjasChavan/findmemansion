<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  include('Backend/load_data.php');

  $id= $_GET['id'];
  $constructionsQ = "SELECT * FROM constructions_setting WHERE id='$id'";
  $constructionsR=mysqli_query($conn,$constructionsQ);
  $constructions_info = mysqli_fetch_array($constructionsR);
?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Constructions Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
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

              <!-- Constructions Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/constructions_setting.php?t_id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="col-6">
                  <label for="img" class="form-label">Upload Image</label>
                  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg" ><br>
                  <img src="<?php echo $constructions_info['img'] ?>" height="100" width="200" class="img-thumbnail">
                  <input type="hidden" name="old_img" value="<?php echo $constructions_info['img']; ?>" >
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $constructions_info['name']; ?>" >
                </div>


                <div class="col-6">
                  <label for="description" class="form-label">Description</label>
                  <input type="text" class="form-control" name="description" value="<?php echo $constructions_info['description']; ?>" >
                </div>
               
                <div class="text-center">
                  <button type="submit"  name="edit_constructions" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Constructions Setting Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>