<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  // include('Backend/load_data.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Constructions List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Constructions</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
               <div class="row">
                <div class="col-md-6"><h5 class="card-title">Constructions</h5></div>
                <div class="col-md-3"><br>
                  <a href="constructions_section_add.php" class="btn btn-md btn-danger">+ Add Constructions</a>
                </div>
                <div class="col-md-3"><br>
                  <a href="constructions_section.php" class="btn btn-md " style="background-color: gray;">+ Constructions Section</a>
                </div>
              </div>

              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                    $count=1;
                    $constructionsQ = "SELECT * FROM constructions_setting";
                    $constructionsR=mysqli_query($conn,$constructionsQ);
                      while($constructions_info=mysqli_fetch_assoc($constructionsR))
                      {
                        $id=$constructions_info['id'];

                  ?>

                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><img src="<?php echo $constructions_info['img']; ?>" height="50" width="100"></td>
                    <td><?php echo $constructions_info['name']; ?></td>
                    <td><?php echo $constructions_info['description']; ?></td>
                    
                    <td>
                      <a href="constructions_section_edit.php?id=<?php echo $constructions_info['id'];?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="Backend/team_setting.php?td_id=<?php echo $constructions_info['id'];?>"  onclick="return confirm('Are you sure you want to delete this constructions?')"><i class="bi bi-trash"></i></a>

                    </td> 
                  </tr>

                  <?php $count++;} ?>
                 
                </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>