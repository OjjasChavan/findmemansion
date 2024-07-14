<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  include('Backend/load_data.php');
?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Team Section</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Team Section</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Team Section Form</h5>

              <!-- Team Section Form -->
              <form class="row g-3" method="POST" action="Backend/team_setting.php">
                <div class="card-group">
                  <div class="card">
                    <div class="card-body">
                      <label>Page Title</label> 
                      <input type="text" class="form-control" name="page_title" value="<?php echo $team_header_info['page_title']; ?>">
                       </div>
                    <div class="card-body"><br>
                      <label>Page Description</label>
                      <textarea type="text" name="page_description" class="form-control"><?php echo $team_header_info['page_description']; ?></textarea>
                    </div>
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit" name="team_header" class="btn btn-primary">Save</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Team Section Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php include('layout/footer.php'); ?>



