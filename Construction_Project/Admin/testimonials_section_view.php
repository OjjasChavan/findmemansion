<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');


?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Testimonials</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Testimonials</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">

            <div class="card-body">
               <div class="row">
                <div class="col-md-6"><h5 class="card-title">View Testimonials</h5></div>
                <div class="col-md-3"><br>
                  <a href="testimonials_section_add.php" class="btn btn-md btn-danger">+ Add Testimonial</a>
                </div>
                <div class="col-md-3"><br>
                  <a href="testimonials_section.php" class="btn btn-md" style="background-color: #8fa1c0;">+ Testimonial Section</a>
                </div>
              </div>
              
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Post</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php 
                	$count=1;
                	$testQ = "SELECT * FROM testimonial_info";
                	$testR=mysqli_query($conn,$testQ);
                    while($testimonial_info=mysqli_fetch_assoc($testR))
                    {
                    	$id=$testimonial_info['id'];

                	 ?>
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $testimonial_info['name']; ?></td>
                    <td><?php echo $testimonial_info['post']; ?></td>
                    <td><img src="<?php echo $testimonial_info['img'] ?>" height="70" width="100"></td>
                    <td><?php echo $testimonial_info['description']; ?></td>
                    <td>
                    	<a href="testimonials_section_edit.php?id=<?php echo $testimonial_info['id'];?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="Backend/about_setting.php?td_id=<?php echo $testimonial_info['id'];?>"  onclick="return confirm('Are you sure you want to delete this Testimonial?')"><i class="bi bi-trash"></i></a>

                    </td> 
                  </tr>

              	<?php $count++;} ?>
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>