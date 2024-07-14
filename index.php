
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AGOC RENTALS</title>
    <link rel="icon" type="image/x-icon" href="titleIcon1.svg">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/modalForm.css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->


    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./rooms.php">Mansions</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+91) 7972874786</li>
            <li><i class="fa fa-envelope"></i> agocrentasl@gmail.com</li>
        </ul>
    </div>

    <?php 
        include 'header.php';
    ?>    

    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
               
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Discover Top<br>Rated Hotels</h1>
                        <p>Here are the best hotel booking sites, including recommendations for international travel and for finding low-priced hotel rooms.</p>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Book Your Hotel</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest">
                                    <option value="">2 Adults</option>
                                    <option value="">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                </select>
                            </div>
                            <a href = "./rooms.php"><h4 class="text-center" style="border: 2px solid #1E0000; padding: 10px; color: #1E0000;">BOOK</h4></a>
                            <!-- <a href = "./rooms.php"><button type="submit">BOOK</button></a> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">

    <!-- HEREWE SFLSFHKSDFHSDHDSHSFHSDFHSDHF SDFSHDF SDF  SDFSDF SDF SDF SD -->

        <?php 
            // include('../sona-master/Construction_Project/Admin/carousel_setting.php');
            include('C:/xampp/htdocs/findmemansion/findmemansion/findmemansion/sona-master/sona-master/Construction_Project/Admin/Backend/conn.php');
            include('C:/xampp/htdocs/findmemansion/findmemansion/findmemansion/sona-master/sona-master/Construction_Project/Admin/Backend/load_data.php');

            $sql= "SELECT id FROM blog_info ORDER BY id LIMIT 1;";
            $bResult= mysqli_query($conn,$sql)or("Query Failed");
            $blog_id=mysqli_fetch_assoc($bResult); 
        ?>
        <div class="hero-slider owl-carousel">
        <?php 
            // include('../sona-master/Construction_Project/Admin/carousel_setting.php');
            // include('C:/xampp/htdocs/findmemansion/sona-master/sona-master/Construction_Project/Admin/Backend/conn.php');
            // include('C:/xampp/htdocs/findmemansion/sona-master/sona-master/Construction_Project/Admin/Backend/load_data.php');

            $sql= "SELECT id FROM blog_info ORDER BY id LIMIT 1;";
            $bResult= mysqli_query($conn,$sql)or("Query Failed");
            $blog_id=mysqli_fetch_assoc($bResult); 
        ?>
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-item active">
                <img class="hs-item set-bg" src="/findmemansion/findmemansion/findmemansion/sona-master/sona-master/Construction_Project/Admin/<?php echo $carousel_info['carousel_img']; ?>" class="d-block w-100">
            </div>
            </div>
            </div>
            <img class="hs-item set-bg" src="/findmemansion/findmemansion/findmemansion/sona-master/sona-master/Construction_Project/Admin/<?php echo $carousel_info['carousel_img1']; ?>" class="d-block w-100" alt="Hero 2">
            <img class="hs-item set-bg" src="/findmemansion/findmemansion/findmemansion/sona-master/sona-master/Construction_Project/Admin/<?php echo $carousel_info['carousel_img2']; ?>" alt="Hero 3">
        </div>
        </div>
        
    </section>
    
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>The Ritz-Carlton, <br>Los Angeles</h2>
                        </div>
                        <p class="f-para">agocrentals.com is a leading online accommodation site. We’re passionate about
                            travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41
                            languages.</p>
                        <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
                            apartment, guest house, or tree house, we’ve got you covered.</p>
                          <!-- <a href="#" class="primary-btn about-btn">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/img11.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="img/img12.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <!-- <span>What We Do</span> -->
                        <h2>Places You <span style="font-size: 50px;">Might</span> Also Like</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/img.jpg">
                            <div class="hr-text" style = "background-color : #F2EFE6; padding-left : 30px; padding-bottom : 30px; border-radius:30px; opacity :0.8;">
                                <h3>Cita La vie</h3>
                                <h2>₹50000<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="./rooms.php" class="primary-btn" style = "color : black;">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/img5.jpg">
                            <div class="hr-text" style = "background-color : #F2EFE6; padding-left : 30px; padding-bottom : 30px; border-radius:30px; opacity :0.8;">
                                <h3>Park Hyatt</h3>
                                <h2>₹60000<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="./rooms.php" class="primary-btn" style = "color : black;">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/img6.jpg">
                            <div class="hr-text" style = "background-color : #F2EFE6; padding-left : 30px; padding-bottom : 30px; border-radius:30px; opacity :0.8;">
                                <h3>Holiday Inn</h3>
                                <h2>₹48000<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="./rooms.php" class="primary-btn" style = "color : black;">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="img/img7.jpg">
                            <div class="hr-text" style = "background-color : #F2EFE6; padding-left : 30px; padding-bottom : 30px; border-radius:30px; opacity :0.8;">
                                <h3>The Louise
                                </h3>
                                <h2>₹53000<span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>30 ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion 5</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>King Beds</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="./rooms.php" class="primary-btn" style = "color : black;">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>  
                                <h5> - Iman Gadzhi</h5>
                            </div>
                            <img src="img/testimonial-logo.svg" alt="">
                        </div>
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Johnny Dep</h5>
                            </div>
                            <img src="img/testimonial-logo.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->

    <?php 
        include 'footer.php';
    ?>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>