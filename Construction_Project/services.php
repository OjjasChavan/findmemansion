<?php include('header.php');
include('Admin/Backend/conn.php');
include('Admin/Backend/load_data.php');
 ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('Admin/<?php echo $header_info['header_img']; ?>" class="img-fluid" alt=""');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Services</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3><?php echo $services_info['card_title']; ?></h3>
              <p><?php echo $services_info['card_subtitle']; ?></p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3><?php echo $services_info['card_title1']; ?></h3>
              <p><?php echo $services_info['card_subtitle1']; ?></p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3><?php echo $services_info['card_title2']; ?></h3>
              <p><?php echo $services_info['card_subtitle2']; ?></p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          

        </div>

      </div>
    </section><!-- End Services Section -->

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