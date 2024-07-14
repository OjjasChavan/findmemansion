<?php 
  include('layout/header.php'); 
  include('Backend/conn.php');
  // include('Backend/load_data.php');
?>

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Team List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Team</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
               <div class="row">
                <div class="col-md-6"><h5 class="card-title">Team</h5></div>
                <div class="col-md-3"><br>
                  <a href="team_section_add.php" class="btn btn-md btn-danger">+ Add Team</a>
                </div>
                <div class="col-md-3"><br>
                  <a href="team_section.php" class="btn btn-md " style="background-color: gray;">+ Team Section</a>
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
                    <th scope="col">Post</th>
                    <th scope="col">Description</th>
                    <th scope="col">Twitter URL</th>
                    <th scope="col">Facebook URL</th>
                    <th scope="col">Instagram_URL</th>
                    <th scope="col">Linkedin URL</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                    $count=1;
                    $teamQ = "SELECT * FROM team_setting";
                    $teamR=mysqli_query($conn,$teamQ);
                      while($team_info=mysqli_fetch_assoc($teamR))
                      {
                        $id=$team_info['id'];

                  ?>

                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><img src="<?php echo $team_info['img']; ?>" height="50" width="100"></td>
                    <td><?php echo $team_info['name']; ?></td>
                    <td><?php echo $team_info['post']; ?></td>
                    <td><?php echo $team_info['description']; ?></td>
                    <td><?php echo $team_info['twitter_url']; ?></td>
                    <td><?php echo $team_info['facebook_url']; ?></td>
                    <td><?php echo $team_info['instagram_url']; ?></td>
                    <td><?php echo $team_info['linkedin_url']; ?></td>
                    <td>
                      <a href="team_section_edit.php?id=<?php echo $team_info['id'];?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="Backend/team_setting.php?td_id=<?php echo $team_info['id'];?>"  onclick="return confirm('Are you sure you want to delete this Team?')"><i class="bi bi-trash"></i></a>

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