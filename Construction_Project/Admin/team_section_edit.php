<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  include('Backend/load_data.php');

  $id= $_GET['id'];
  $teamQ = "SELECT * FROM team_setting WHERE id='$id'";
  $teamR=mysqli_query($conn,$teamQ);
  $team_info = mysqli_fetch_array($teamR);
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

              <!-- Site Setting  Form -->
              <form class="row g-3" method="POST" action="Backend/team_setting.php?t_id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="col-6">
                  <label for="img" class="form-label">Upload Image</label>
                  <input type="file" class="form-control" name="img" accept=".png,.jpg,.jpeg" ><br>
                  <img src="<?php echo $team_info['img'] ?>" height="100" width="200" class="img-thumbnail">
                  <input type="hidden" name="old_img" value="<?php echo $team_info['img']; ?>" >
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $team_info['name']; ?>" >
                </div>

                <div class="col-6">
                  <label for="post" class="form-label">Post</label>
                  <input type="text" class="form-control" name="post" value="<?php echo $team_info['post']; ?>" >
                </div>

                <div class="col-6">
                  <label for="description" class="form-label">Description</label>
                  <input type="text" class="form-control" name="description" value="<?php echo $team_info['description']; ?>" >
                </div>
                
                <div class="col-6">
                  <label for="twitter_url" class="form-label">Twitter URL</label>
                  <input type="text" class="form-control" name="twitter_url" value="<?php echo $team_info['twitter_url']; ?>" >
                </div>

                <div class="col-6">
                  <label for="facebook_url" class="form-label">Facebook URL</label>
                  <input type="text" class="form-control" name="facebook_url" value="<?php echo $team_info['facebook_url']; ?>" >
                </div>

                <div class="col-6">
                  <label for="instagram_url" class="form-label">Instagram URL</label>
                  <input type="text" class="form-control" name="instagram_url" value="<?php echo $team_info['instagram_url']; ?>" >
                </div>

                <div class="col-6">
                  <label for="linkedin_url" class="form-label">Linkedin URL</label>
                  <input type="text" class="form-control" name="linkedin_url" value="<?php echo $team_info['linkedin_url']; ?>" >
                </div>
                
                <div class="text-center">
                  <button type="submit"  name="edit_team" class="btn btn-primary">Update</button>
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