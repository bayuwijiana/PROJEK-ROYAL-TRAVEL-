
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="icon" href="assets/images/logo1.jpg" />
    <title> TRAVEL LOVE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/style2.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
            <img  style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL"><img style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL"><b style="font-size: 30px;font-family: Georgia, 'Times New Roman', Times;" >ROYAL </b><b style="font-size: 35px;font-family: Georgia, 'Times New Roman', Times; color:rgb(218,165,32) " >TRAVEL</b>
            </a>  
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" class="active">HOME</a></li>
              <li class="scroll-to-section"><a href="#clients">ABOUT</a></li>
              <li class="scroll-to-section"><a href="#a">REGISTER</a></li>
              <li></a></li>
              
            </ul>    
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>
<!--LOG IN ////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////// -->
</div>
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
              <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>  Create your account to receive latest trends</h2>
                    <p style="color:white;">ROYAL TRAVEL ~  Best Travel App - Best Price, Safe & Practical</p>
                  </div>
                  <div  class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                    <a><b style="color:rgb(218,165,32)"> App Store </b><i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a> <b  style="color:rgb(218,165,32)"> Play Store </b><i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div  class="col-lg-6">
              <div id="kanan" class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <!-- <img src="assets/images/slider-dec.png" alt=""> -->
                  <div class="social_login">
                    
                    <form id="java" action="" method="post">
                      <h3> <b>CREATE ACCOUNT</b></h3>
                      <input type="hidden" name="cek" value="usser">
                      <input type="hidden" name="act" value="create"> 
                        <label for="a"> Username</label>
                        <br>
                        <input id="a" name="ussername_usser" type="text" placeholder="              Create ussername" required/>
                        <br />
                        <label for="b">Password</label>
                        <br>
                        <input id="b" name="password_usser"type="password" placeholder="                Your password" required/>
                        <br /><label for="c">Confirm Password</label>
                        <br>
                        <input id="c" name ="password_usser2" type="password" placeholder="         Confirm your password" required/>
                        <br /><label for="c">No telepon</label>
                        <br>
                        <input id="c" name ="no_telepon" type="text" placeholder="         no telepon" required/>
 
                        <br />
                        <button type="submit" name="simpan"  class="btn btn_red">SAVE</button>    
                        </div>

                    </form>
                  </div>
                
            <?php	
            
            
       include "read_home3.php";

              if(isset($_POST['simpan'])){
                  
                  $ussername_usser=$_POST['ussername_usser'];
                  $password_usser=$_POST['password_usser'];
                  $password_usser2=$_POST['password_usser2'];
                  $no_telepon=$_POST['no_telepon'];

                  $data = new usser22();
                  $data->create($ussername_usser,$password_usser,$password_usser2,$no_telepon);

                  
                  
              }
            
            
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          
        <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4> <b b style="color:rgb(218,165,32) ; font-family: Georgia;">ROYAL TRAVEL</b>  Fitur <em>&amp; Layanan Terbaik</em>  Untuk Anda</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <h5>Bandingkan Tiket Promo Termurah di sini dengan teknologi Royal Travel®, Diskon hingga 25% untuk pemesanan hotel. <a rel="nofollow" href="https://www.toocss.com/" target="_blank"></a> Blog.Tiket Pesawat Harga Terbaik, Checkin Mudah.  <a href="https://templatemo.com/contact" target="_parent">our contact page</a>  Pesan Tiket Pesawat cara pintar</h5>
          </div>
        </div>
      </div>
    </div>
   <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid"> 
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Teknologi SSL dari RapidSSL dengan Sertifikat yang terotentikasi menjamin privasi dan keamanan transaksi online Anda. Konfirmasi instan dan e-tiket atau voucher dikirim langsung ke email Anda.@royal travel.com”</p>
                              </div>
                              <div class="down-content">
                                <img  style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL">
                                <div class="right-content">
                                  <h4>David Martino</h4>
                                  <span>Royal Travel</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p>Bayu Wijiana - RJ, 22795-008 Bandung , Indonesian .</p>
            <p><a href="#">010-020-0340</a></p>
            <p><a href="#">infoRoyaltravel@company.co</a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Free Apps</a></li>
              <li><a href="#">App Engine</a></li>
              <li><a href="#">Programming</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">App News</a></li>
            </ul>
            <ul>
              <li><a href="#">App Dev Team</a></li>
              <li><a href="#">Digital Web</a></li>
              <li><a href="#">Normal Apps</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>ROYAL TRAVEL</h4>
            <div class="logo">
              <img src="assets/images/y.png" alt="">
              <img src="assets/images/y.png" alt="">
              
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 ROYAL TRAVEL All Rights Reserved. 
          <br>Design : <a href="https://templatemo.com/" target="_blank" title="css templates">@bayu_wijiana</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>