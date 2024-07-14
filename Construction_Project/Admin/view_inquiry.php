<?php 
include('layout/header.php'); 
include('Backend/conn.php');
include('Backend/load_data.php');


?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>View Inquiries</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Inquiries</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">

            <div class="card-body">
               <div class="row">
                <div class="col-md-6"><h5 class="card-title">View Inquiries</h5></div>
              </div>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $count=1;
                    $inquiryQ = "SELECT * FROM inquiry_info";
                    $inquiryR=mysqli_query($conn,$inquiryQ);
                      while($inquiry_info=mysqli_fetch_assoc($inquiryR))
                      {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $inquiry_info['name'] ?></td>
                    <td><?php echo $inquiry_info['email'] ?></td>
                    <td><?php echo $inquiry_info['subject'] ?></td>
                    <td><?php echo $inquiry_info['message'] ?></td>
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