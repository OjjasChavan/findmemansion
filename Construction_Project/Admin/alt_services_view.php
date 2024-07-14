<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  // include('Backend/load_data.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Alt Services List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Alt Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
               <div class="row">
                <div class="col-md-6"><h5 class="card-title">Alt Services</h5></div>
                <div class="col-md-3"><br>
                  <a href="alt_services_add.php" class="btn btn-md btn-danger">+ Add Alt Services</a>
                </div>
               
              </div>

              <!-- Table with stripped rows -->
              <div class="table-responsive">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Page_Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Card1_title</th>
                    <th scope="col">Card1_Sub_title</th>
                    <th scope="col">Card2_title</th>
                    <th scope="col">Card2_Sub_title</th>
                    <th scope="col">Card3_title</th>
                    <th scope="col">Card3_Sub_title</th>
                    <th scope="col">Card4_title</th>
                    <th scope="col">Card4_Sub_title</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                    $count=1;
                    $alt_servicesQ = "SELECT * FROM alt_services_section";
                    $alt_servicesR=mysqli_query($conn,$alt_servicesQ);
                      while($alt_services_info=mysqli_fetch_assoc($alt_servicesR))
                      {
                        $id=$alt_services_info['id'];

                  ?>    a

                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><img src="<?php echo $alt_services_info['img']; ?>" height="50" width="100"></td>
                    <td><?php echo $alt_services_info['page_title']; ?></td>
                    <td><?php echo $alt_services_info['discription']; ?></td>
                    <td><?php echo $alt_services_info['card1_title']; ?></td>
                    <td><?php echo $alt_services_info['card1_sub_title']; ?></td>
                    <td><?php echo $alt_services_info['card2_title']; ?></td>
                    <td><?php echo $alt_services_info['card2_sub_title']; ?></td>
                    <td><?php echo $alt_services_info['card3_title']; ?></td>
                    <td><?php echo $alt_services_info['card3_sub_title']; ?></td>
                    <td><?php echo $alt_services_info['card4_title']; ?></td>
                    <td><?php echo $alt_services_info['card4_sub_title']; ?></td>
                    <td>
                      <a href="alt_services_edit.php?id=<?php echo $alt_services_info['id'];?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="Backend/about_setting.php?at_id=<?php echo $alt_services_info['id'];?>"  onclick="return confirm('Are you sure you want to delete this alt_services?')"><i class="bi bi-trash"></i></a>

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