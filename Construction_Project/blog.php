<?php include('header.php');
include('Admin/Backend/conn.php');
include('Admin/Backend/load_data.php');

 $sql= "SELECT id FROM blog_info ORDER BY id LIMIT 1;";
$bResult= mysqli_query($conn,$sql)or("Query Failed");
$blog_id=mysqli_fetch_assoc($bResult);

 ?>
<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('Admin/<?php echo $header_info['header_img']; ?>" class="img-fluid" alt=""');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Blog</h2>
        

      </div>
    </div><!-- End Breadcrumbs -->
<main id="main">

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="" alt="" class="img-fluid" id=img>
              </div>

              <h2 class="entry-title">
                <a id=blog_title></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a id=writer_name></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01" id=date>
                   
                  </time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p id=description>

                </p>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <?php 
                  $count=1;
                  $blogQ = "SELECT * FROM blog_info";
                  $blogR=mysqli_query($conn,$blogQ);
                    while( $blog_info=mysqli_fetch_assoc($blogR))
                    {
                      
                   ?>
                <div class="post-item clearfix">
                  <img src="Admin/<?php echo $blog_info['img']; ?>" alt="">
                  <h4><a type="button" onclick="getBlogData(<?php echo $blog_info['id']; ?>)"><?php echo $blog_info['blog_title']; ?></a></h4>
                  <time datetime="<?php echo $blog_info['date']; ?>"><?php echo $blog_info['date']; ?></time>
                </div>
                  <?php $count++;} ?>


              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <script type="text/javascript">
   $(window).on('load', getBlogData(<?php echo $blog_id['id']; ?>) ) 

    function getBlogData(bid) {
      $.ajax({
          url:"ajax_call.php",
          type:"post",
          data:{ 
            bid : bid
          },
          success:function(data,status){
          var blog = JSON.parse(data);
          let img = "Admin/" + blog.img;
          $("#img").attr("src",img);
          $('#blog_title').html(blog.blog_title);
          $('#writer_name').html(blog.writer_name);
          $('#date').html(blog.date);
          $('#description').html(blog.description);
          }
      });
    }
  </script>

<?php include('footer.php'); ?>

  