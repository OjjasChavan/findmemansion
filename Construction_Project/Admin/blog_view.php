<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');


?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Blogs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Blogs</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">

            <div class="card-body">
               <div class="row">
                <div class="col-md-9"><h5 class="card-title">View Blogs</h5></div>
                <div class="col-md-3"><br>
                  <a href="testimonials_section.php" class="btn btn-md" style="background-color: #8fa1c0;">+ Blog Section</a>
                </div>
              </div>
              
             

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Blog Title</th>
                    <th scope="col">Writer Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php 
                	$count=1;
                	$blogQ = "SELECT * FROM blog_info";
                	$blogR=mysqli_query($conn,$blogQ);
                    while( $blog_info=mysqli_fetch_assoc($blogR))
                    {
                    	$id= $blog_info['id'];

                	 ?>
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><img src="<?php echo $blog_info['img'] ?>" height="70" width="100"></td>
                    <td><?php echo  $blog_info['blog_title']; ?></td>
                    <td><?php echo $blog_info['writer_name']; ?></td>
                    <td><?php echo $blog_info['date']; ?></td>
                    <td>
                    	<a href="blog_edit.php?id=<?php echo $blog_info['id'];?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="Backend/blog_settings.php?b_id=<?php echo $blog_info['id'];?>"  onclick="return confirm('Are you sure you want to delete this Blog?')"><i class="bi bi-trash"></i></a>

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