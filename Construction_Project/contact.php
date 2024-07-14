<?php include('header.php');
include('Admin/Backend/conn.php');
include('Admin/Backend/load_data.php');
?>
<link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../css/style.css">

  <main id="main">
    <header style="background-color: #F2EFE6; width: 100%">
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="../img/logo.svg" alt="" id="logoImg">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="../rooms.php" style="text-decoration: none">Mansions</a></li>
                                    <li><a href="../about-us.php" style="text-decoration: none">About Us</a></li>
                                    <li class="active"><a href="Construction_Project/contact.php" style="text-decoration: none">Contact</a></li>
                                    <li><a href = "../Construction_Project/Admin/index.php" style="text-decoration: none">Log in</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo $contact_info['address']; ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact.agocrentals@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 7972705020</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="<?php echo $contact_info['map']; ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="inquiry.php" method="post" role="form" class="">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div><br>
              <div class="text-center"><button type="submit" name="inquiry" class="btn btn-" style = "background-color : #1E0000; color : white;">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="../img/logo2.svg" alt="" id="logoImg" >
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                            <div class="fa-social">
                                <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
                                <a href="https://twitter.com/ojjas_chavan" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAlBJREFUSEuF1rtrFUEUBvDfxIBCJJUWguIDRAQVESstFUERfCBBCVhoIZJeURT/AG0sIjYSAmnSpBCEFGlE0gQFRQsrxYAoiJUIvmC89+7ee2f3zt5Msztnz5znd77ZoLcCYrmrvgex96Wvn76l+lUT7S+ZFeSNloYy9vKBMuhg4HDqrOqgyU9HnqhmypJNql/BfNpFuLH36GgVGfRDGcPPqmjA/3jLzD2cxk7BX9E0bmMLzgSmYxlOSNJZh3eYwNshzVzCsWqcHe1VwTbRJcwX59vl7a8d+IhvOIflTMqH8KqQZ1AXvBQ9x5zgdVsndbABPzBaRvcEd/ElQcgkca67z7hol3cqMJsCPs12GUdq5XmBp4IV0UE8rDioQmZGdKXvuJJB2Ejcg0VsagLKGvL7uJHORNHkQrI18CnyHZsrSr1JztY9he8UHlW0ks0IPmB7z/jQocvmshfvU+jX5+C8YF40Wp/GIsuqx5r/NgJ31bUSFPXGcEIMd4K4v4uEjO0S410S7NDJ9Rg8rrNihYtKF6fwrKmZDfyzit2taf5TP5c2OZ2f2VY/LjcipurlH+EocaVWwSLxDC7a4hHiPsEt0cUU1zU2a1fxagsYMwPBNLJpMCY6jJs4mWtayRK/ApORhQwvVZi1uzmOB4ID4hr3RLAoulYSXP4iLFOqlAjjgguisziB9fiNr/iMpcBC5E0j+dfvg6G30lBeKG+6ZmbtMO7gHKxBNvkB7NajTuM1FNVHvGhmJsdSnv4YZFilAFz+Q4KxyjgP3rddCmn6tfkPa+jWHi9teSIAAAAASUVORK5CYII="/></a>
                                <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAyVJREFUSEuN1VuoVWUQB/DfnCijCKIeMrEoC4RMpCy6WEm+lFQUHLCo7KFISsgiEoJ6VrpQDxVdIHuJ7K4vGvVQpl3FNNOO9FjSKXxJogg85bTXWt8+e+3LyTYs2Gt9M9/M/P//mYlAav3qD0Nf2xb9/4t9yHJP2zdUbzM7/J84QwHKdcV3OEB/uONwIy7FRVhc/HYRe8idwhYZR2schqofVUEvwDy8WS4vzv3ZlbcvcHvw4zDURC9oHx6r8AxOnhn8vpM/8CA2jEJ8kIPV0gujeR8kMKf1UE7ux0t9vgOwnYf9xIk9bVU4dhUyQg/1p2lG/5QWtOFqIGqMxsgdwpXTuu0d7hc+kXbiCK7CtbhwGMLYEXJplmsbFTVlLAn5WXIYe0tlv0rPBXszLJK1kir7PdK3weJkNTG73LcIp+Jy4euusLoVPhI8lRwlxsnN3cqxUNggXVIy3o2VmGhJ81a8gTE8jGe7uXerfDcYL018Nz4U1so4h9yG14j3Qk4lN2FVcF1ygNhIXo8nSrbvCCsqBbQ5OEjO7eh+C27BD8IBaV8n0xV4kviHPCLMk+4L3k51VWPBFclPmBscTM6uK2iRPEmeibXEJnJvwfNv3InbcA+mhM3SB8H6DHOkn4PZycu4Gb9gTi9AE2VrsLwTuWqWqtEmi/EePN2ILdYUMqtqzg15b7K8YH9aR1mf1nyxFTdUcLVmUawnH60zFAvJJVhHnBHyt6wdfFlUdL70enBZw1m8Qj4uHCoSXyc81lNRQ3OF81uF8e80RFZVXNAhf1+Gq6Vd5bzqg4+C+R2ZHiJmkZtqeTaqH0/eH1TRScHuZH45OJzhRRlfkcuwplx6fLKM+Liepswi7iJPL7Ke0BD/Vw+iHtNVZ37TgeaE0UPumGOj6vKL8X3Xv81Bd2g81G2SY03SEfvoATzf85t5H1RyrDrxlGnj/kE6sGf9Xrr31cGkZliZtdlZwsYyo2bYt/WU3UbcQU6O3GitRhtc/91kFmAprqmeYCrD59J2bO+MhInpbdlOvzvB2/vgP4MNAd5P+Ih13LTm0KUjsB5BZm/KD2Xdb/0vM1AkL5PguO8AAAAASUVORK5CYII="/></a>
                                <a href="https://www.instagram.com/ojjas_chavan/" target="_blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAw9JREFUSEuF1U+oZnMYB/DPc00RMZvJCndqKHSbEEkaFkgpTdxphsHGxp+FMpmZIgslMsTNyoKFdJkJQ1cpjd1tSppJavxrIikbszLNiuHx/s75ve97znnvNWfxvp3feX7Pn+/zfb5PGD6BbH7qlxByctT93LVa2w/Fpv/UW9PL/+um9TDOZcbZOMBM1ue4101iJkCteFz/TKbtwZZgT7KNWAgZLWp96MgUTkirwVJyclJEte9ANLn8ON7EBvyGr4IfWxT6/cANwnXS5fhbeFJ6u4vUsAc3Fof4Hvfh53VaNGzcArkiXCHdFHwzrrgNMMX0cHIPrsavrZf1uticPzIq6gXpz+DRDMekT7E48TmAtjgt2ZcgXTjnkrtwLf7BD/hSe/ZFgTKYT45hU7B5SvJJkk2o01jGEx3/Bd9DI0e3DPi8GvKd5A9cGrybHMbduGhsO2zyv3gN+6rBHHGU3Cw8I+NIyPNqNQe0rLmNyDoMJZEdQbGZANxNrJy/TDxbL+wkDpE7hQ/7NLUrOJhsH7FppUL9gbQLc2P3MZiDEqBktr9GPUDsDXlxcmbQ8IL1qeTFUV+er36Wid11YIYVNCZlcJZGrHi6fn1FNnBtFE4PBGkTeQovjWbguWr/noyHpwHK3PSZWAK8Ie2pFSyOJvmjkDuSjwfk390QImyXsdJAGpZlPFD7VAezPweZLFEraLCMoyHnM+yVjjQTHu6UXsVPuL0jd6XJpScXrMGi5uhMS9N4rGZU/i4bDd5B3DqkKfmg8HuBrpH0lqZ3BBvHstWTiuBkFazeoFVWlMzuxV/4HJ91hbo2+TguGSV51XpzUDC9X7qmkYo1VGJGT6cyszX5lng/5ENTcew3+XrhuCyGFvHLAJYxFFNlbQ224hPMEzeTpZIOTfuZNnIdFP35ukJSGHJW+m40iOfjSmJDxf1CFBU+i6eIt7orbijX48BbaKi6DQsTvg1WYzSD4wSxSr7eyns/2/UCTOvr0mE2wBrruLsye4PWXbT9PNZeq+vtidm73YUz0LM+A2bfzrWP+A+M8Bovx3iE9QAAAABJRU5ErkJggg=="/></a>
                                <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAitJREFUSEuNlb9qVUEQxn8Tb6FERTQggYiFAbGwiI2lnY1g4QtYCCnUl5CktRGsBPEVfAU7FRRt/FNYhGChggQtAiGOd3fPsrO7s1dPc++Zs/Pvm/m+FdpHAK2N1uT/r62CopNJ4q8TNKboPi48OJ2fipt8hwlKqFxK6szaY6U23lRVsQspgfOhw8lzHiQovhILqluz8FuIRliOUDOd2ZCrCFso6wJrChfc/HXQAMAH4DvwaV7uA+BrxjJ1kJ6LwGvgRGjJbkLXlIO7GdAecAX4kovLED0Dbudg3ZC7oKO0MdxThTslQTr7BtjoE9hAzhb5M3gFXG0T/BA4kzeq2clgvgHyCHS950dXxI4K5wPB7AwOgSXPWeCPwhFgBtwHtoDjJWzH75/AaTuDZZTfZRM7h9DBkqlzZZ5se74tm2nJazICvxBOZmIGvxnIgS9C0Tl0F85kWq6AbAu6GVHotWtfhWMRIlNrc6wC4FCFGRohupt2XU7ZghpOflPhbDuDANHyIEvo4BbIwzhkh+1Wl4CPwKXEp0LVHeDcYh5YAjoimBUUfaFwrSRIWZ6D3vQSWHVs1nekY0+mBajU9DLoS+JwXGm3IumLbYEuSMXbVirCe2DyPWB3Ont93tmGoEer2SR0wszeKxyYkXwGHgPvkq3eomxrrjgHd6tLHWXqj/190N0BtQz4b6OBU99o/wNyp22jDkwjDtNHy1GH72LbRvL/7ib8B0QLC3ak+y8Jd+gjMSnkAgAAAABJRU5ErkJggg=="/></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(91) 7972874780</li>
                                <li>contact.agoc@gmail.com</li>
                                <li>48th Floor, Kohinoor Square, N C. Kelkar Marg, Dadar West, Shivaji Park, Mumbai, Maharashtra 400028</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjpJREFUSEuNlj1rVEEUhp+XWKRQ0CqVnWDpD7BNIfYSCTbiR2GlkCJWhoixsxDEwjYiQvAHiDb2kh8QUBCEdEqKEJDluPfOmd0zd+ZucpvdnTtnzjnvx5mVAOMMz8KNQhhW7enWwzN/H3d68FgNjUNjyUWCcMYv4CdwF/ixsL+xzvr1QQfhoNztMWgD7G3fa15tfI8Qlf13p9YBNm+zf/kVuAMcVjCeCaJZO5YJz7XeAt4BFxF/Me4JPqWXfnL5MUCzBVEKyMLqfq0Au4hVX30PPAIdtfUXM+YEdZsZIjl+XWX3Qa+EXTDxG2Nd8C1WUn8fJAh5Mgodd/G5LPhgcN3t8xrYBJ30JDfkpiHjDm0sZhjWhTwBXgiWDQ6ANWC/JeeUoMpScFBYMVR6FfgIXAP+AduIl5gmUYG10VLGxEFv4oaT5kvnEJvTrVvAEuILphvCJjMIxiAKWhj1GNAleDqF/5lgyeAz6CbYJLedOqh1HTio8fPgK4I9c4imCZ4b7IBDlCusnJmiTyP5MWhH2LKJA0xrwvYLFUUIGuyPJQgy7XlymXIyRyI4pwOnDYCTnPbm54Eb7XxttNK9xbhuaKTLG528ImzXYNUz+ajgaJ57XGm1TJ0DD1kH3gCXgD+gh8L2WsqNEBWX2Ckk572zcb2w6ooIlRzEC8f3HmNsTCeqXzhFbUls1SgoJRN8UAR/790obmN+ZbbJao2flNMrLDgYtVQxjQZ3XRRQI92Yk9NWb789ist/G2NI/Qeg/fghBIE1LQAAAABJRU5ErkJggg=="/></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>