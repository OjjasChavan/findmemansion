<?php include('header.php');
include('Admin/Backend/conn.php');
include('Admin/Backend/load_data.php');
 ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('Admin/<?php echo $header_info['header_img']; ?>" class="img-fluid" alt=""');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url('Admin/<?php echo $about_info['img']; ?>" class="img-fluid" alt=""');"></div>

          <div class="col-lg-7">
            <h2><?php echo $about_info['page_title']; ?></h2>
            <div class="our-story">
              <h4><?php echo $about_info['year']; ?></h4>
              <h3><?php echo $about_info['title']; ?></h3>
              <p><?php echo $about_info['sub_title']; ?></p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span><?php echo $about_info['l1_title']; ?></span></li>
                <li><i class="bi bi-check-circle"></i> <span><?php echo $about_info['l2_title']; ?></span></li>
                <li><i class="bi bi-check-circle"></i> <span><?php echo $about_info['l3_title']; ?></span></li>
              </ul>
              <p><?php echo $about_info['discription']; ?></p>

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href=<?php echo $about_info['video']; ?> class="glightbox stretched-link">Watch Video</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $about_info['card1_title']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p><?php echo $about_info['card1_sub_title']; ?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $about_info['card2_title']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p><?php echo $about_info['card2_sub_title']; ?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $about_info['card3_title']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p><?php echo $about_info['card3_sub_title']; ?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?php echo $about_info['card4_title']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p><?php echo $about_info['card4_sub_title']; ?></p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Non quasi officia eum nobis et rerum epudiandae rem voluptatem</h3>
            <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
              </div>
            </div><!-- End Icon Box -->
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $team_header_info['page_title']; ?></h2>
           <p><?php echo $team_header_info['page_description']; ?></p>
        </div>

        <div class="row">
          <?php 
              $count=1;
                $teamQ = "SELECT * FROM team_setting";
                $teamR=mysqli_query($conn,$teamQ);
                while($team_info=mysqli_fetch_assoc($teamR))
                {
            ?>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="Admin/<?php echo $team_info['img'] ?>" class="img-fluid" alt="">
              <div class="social">
                <a href="<?php echo $team_info['twitter_url'] ?>"><i class="bi bi-twitter"></i></a>
                <a href="<?php echo $team_info['facebook_url'] ?>"><i class="bi bi-facebook"></i></a>
                <a href="<?php echo $team_info['instagram_url'] ?>"><i class="bi bi-instagram"></i></a>
                <a href="<?php echo $team_info['linkedin_url'] ?>"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
             <div class="member-info">
                <h4><?php echo $team_info['name'] ?></h4>
                <span><?php echo $team_info['post'] ?></span>
              </div>
              <p><?php echo $team_info['description'] ?></p>
            </div>
          </div><!-- End Team Member -->
          <?php $count++;} ?>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo $testimonial_section['testimonial_title']; ?></h2>
          <p><?php echo $testimonial_section['testimonial_description']; ?></p>
        </div>
        
        
        <div class="slides-2 swiper">
          <div class="swiper-wrapper">
            <?php 
            $count=1;
            $testQ = "SELECT * FROM testimonial_info";
            $testR=mysqli_query($conn,$testQ);
              while($testimonial_info=mysqli_fetch_assoc($testR))
              {
                $id=$testimonial_info['id'];

          ?>

            <div class="swiper-slide">
             
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="Admin/<?php echo $testimonial_info['img'] ?>" class="testimonial-img" alt="">
                  <h3><?php echo $testimonial_info['name'] ?></h3>
                  <h4><?php echo $testimonial_info['post'] ?></h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i><?php echo $testimonial_info['description'] ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
              </div>
              <?php $count++;} ?>
            </div><!-- End testimonial item -->
        
         </div>
          <div class="swiper-pagination"></div>
      </div>
      
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <?php include('footer.php'); ?>