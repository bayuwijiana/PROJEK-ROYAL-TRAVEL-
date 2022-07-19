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

  <title>ROYAL TRAVEL </title>

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

  <style>
    input {
      border: 3px solid rgb(37, 121, 245);
      opacity: 70%;
    }

    h1 {
      color: rgb(37, 121, 245);
    }

    label {
      color: orange;
    }

    #travel2 {
      height: 100px;
      width: 100px;
    }

    #enjoy {
      display: inline-block;
    }

    #enjoytext {
      font-size: 40px;
      color: wheat;
    }

    #mom {
      color: black;
      opacity: 70%;
    }
  </style>

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
              <img style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL"><img style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL"><b style="font-size: 30px;font-family: Georgia, 'Times New Roman', Times;">ROYAL </b><b style="font-size: 35px;font-family: Georgia, 'Times New Roman', Times; color:rgb(218,165,32) ">TRAVEL</b>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">HOME</a></li>
              <li class="scroll-to-section"><a href="#clients">ABOUT</a></li>
              <li class="scroll-to-section"><a href="buat_akun.php">REGISTER</a></li>
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
                    <div id="enjoy">
                      <h2 id="enjoytext">ENJOY YOUR TRAVEL
                        <img src="assets/images/travel2.png" id="travel2">
                      </h2>
                    </div>
                    <h3 style="font-size:50px;color:wheat">Find the best <b id="mom">moments</b> with your family.</h3>
                    <p style="color:white;">ROYAL TRAVEL ~ Best Travel App - Best Price, Safe & Practical</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a><b style="color:rgb(218,165,32)"> App Store </b><i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a> <b style="color:rgb(218,165,32)"> Play Store </b><i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div id="kanan" class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <!-- <img src="assets/images/slider-dec.png" alt=""> -->
                <div class="social_login">

                  <form id="masuk" action="config/checkingPost.php" method="post" style="border: orange 4px solid;border-radius: 20px;">
                    <h1>Log In </h1>

                    <input type="hidden" name="cek" value="login">
                    <input type="hidden" name="act" value="login">
                    <label for="a"> Username</label>
                    <br>

                    <input id="a" name="ussername_login" type="text" placeholder="       Ussername" required />
                    <br />
                    <label for="b">Password</label>
                    <br>
                    <input id="b" name="password_login" type="password" placeholder="      Password" required />
                    <br />
                    <button style=" margin-top:5%; height:15%; ;width:50% ;font-size:20px;" type="submit" name="masuk" class="btn btn_red">Log In</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /////////////////////////////////////////////////////////////////////////// -->
  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4> <b b style="color:rgb(218,165,32) ; font-family: Georgia;">ROYAL TRAVEL</b> Fitur <em>&amp; Layanan Terbaik</em> Untuk Anda</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <h5>Bandingkan Tiket Promo Termurah di sini dengan teknologi Royal Travel®, Diskon hingga 25% untuk pemesanan segera. <a rel="nofollow" href="https://www.toocss.com/" target="_blank"></a> Blog.Tiket Pesawat Harga Terbaik, Checkin Mudah. <a href="https://templatemo.com/contact" target="_parent">our contact page</a> Pesan Tiket Pesawat cara pintar</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="info1">
              <a href="#oke"><img style="height:150px;width:150px;" src="assets/images/pesawat.png" alt=""></a>
              <h2>Pesawat</h2>
              <h4>Temukan penerbangan dengan harga terbaik.</h4>
              <div class="text-button">

                <!-- Button trigger modal -->
                <button type="button " style="background-color:white ;border: 1px lightblue solid; color:blue ;border-radius:10px;font-size :20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Read more ...
                </button>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="info2">
              <a href="#oke2">
                <img style="height:150px;width:150px;" src="assets/images/kereta.jpg" alt="">
              </a>
              <h2>Kereta</h2>
              <h4>Paket Diskon Kereta Api Bikin Perjalanan Semakin Nyaman</h4>
              <div class="text-button">
                <!-- Button trigger modal -->
                <button type="button " style="background-color:white ;border: 1px lightblue solid; color:blue ;border-radius:10px;font-size :20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Read more ...
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="info2">
              <a href="#oke3">
                <img style="height:150px;width:150px;" src="assets/images/logobus.jpg" alt="">
              </a>
              <h2>Bus</h2>
              <h4>Paket Diskon Bus Bikin Perjalanan Semakin Nyaman</h4>
              <div class="text-button">
                <!-- Button trigger modal -->
                <button type="button " style="background-color:white ;border: 1px lightblue solid; color:blue ;border-radius:10px;font-size :20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Read more ...
                </button>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4> <b b style="color:rgb(218,165,32) ; font-family: Georgia;">ROYAL TRAVEL</b> Fitur <em>&amp; Layanan Terbaik</em> Untuk Anda</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <h5>Bandingkan Tiket Promo Termurah di sini dengan teknologi Royal Travel®, Diskon hingga 25% untuk pemesanan segera. <a rel="nofollow" href="https://www.toocss.com/" target="_blank"></a> Blog.Tiket Pesawat Harga Terbaik, Checkin Mudah. <a href="https://templatemo.com/contact" target="_parent">our contact page</a> Pesan Tiket Pesawat cara pintar</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- PESAWAT TAMPIL////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div id="oke" class="container">
      <div class="row">
        <?php
        include "read_home.php";
        $b = new a();
        foreach ($b->tampil_pesawat() as $data2) :
        ?>
          <div class="col-lg-3">
            <div class="service-item first-service">
              <div class="info1">
                <img style="height:200px;width:100%; border-radius:10px" src="assets/images/<?= $data2['gambar_pesawat']; ?>">
                <h2>Bandara <?= $data2['nama_bandara'];  ?></h2>
                <h1>Pesawat <?= $data2['nama_pesawat'];  ?></h1>
                <h1>penerbangan <?= $data2['jam_berangkat_pesawat'];  ?></h1>

                <h4>Temukan penerbangan dengan harga terbaik.</h4>
                <div class="text-button">
                  <!-- Button trigger modal -->
                  <button type="button " style="background-color:white ;border: 1px lightblue solid; color:blue ;border-radius:10px;font-size :20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Read more ...
                  </button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- //////////////////////////////////////////////////////////////////////////////////////// -->

    <div id="services" class="services section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <h4> <b b style="color:rgb(218,165,32) ; font-family: Georgia;">ROYAL TRAVEL</b> Fitur <em>&amp; Layanan Terbaik</em> Untuk Anda</h4>
              <img src="assets/images/heading-line-dec.png" alt="">
              <h5>Bandingkan Tiket Promo Termurah di sini dengan teknologi Royal Travel®, Diskon hingga 25% untuk pemesanan segera. <a rel="nofollow" href="https://www.toocss.com/" target="_blank"></a> Blog.Tiket Pesawat Harga Terbaik, Checkin Mudah. <a href="https://templatemo.com/contact" target="_parent">our contact page</a> Pesan Tiket Pesawat cara pintar</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- KERETA TAMPIL////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <div id="oke2" class="container">
        <div class="row">
          <?php
          $c = new a();
          foreach ($c->tampil_kereta() as $data2) :
          ?>
            <div class="col-lg-3">
              <div class="service-item first-service">
                <div class="info1">
                  <img style="height:200px;width:100%; border-radius:10px" src="assets/images/<?= $data2['gambar_kereta']; ?>">
                  <h2><?= $data2['nama_stasiun'];  ?></h2>
                  <h1>Kereta <?= $data2['nama_kereta'];  ?></h1>
                  <h4>Temukan penerbangan dengan harga terbaik.</h4>
                  <div class="text-button">
                    <!-- Button trigger modal -->
                    <button type="button " style="background-color:white ;border: 1px lightblue solid; color:blue ;border-radius:10px;font-size :20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Read more ...
                    </button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- ///////////////////////////////////////////////////////////// -->

      <!-- BUS TAMPIL////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <div id="oke3" class="container">
        <div class="row">
          <?php
          $c = new a();
          foreach ($c->tampil_bus() as $data2) :
          ?>
            <div class="col-lg-3">
              <div class="service-item first-service">
                <div class="info1">
                  <img style="height:200px;width:100%; border-radius:10px" src="assets/images/<?= $data2['gambar_bus']; ?>">
                  <h2><?= $data2['nama_terminal'];  ?></h2>
                  <h1>Bus <?= $data2['nama_bus'];  ?></h1>
                  <h4>Temukan penerbangan dengan harga terbaik.</h4>
                  <div class="text-button">

                    <!-- Button trigger modal -->
                    <button type="button " style="background-color:white ;border: 1px lightblue solid; color:blue ;border-radius:10px;font-size :20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Read more ...
                    </button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- ///////////////////////////////////////////////////////////// -->




      <!-- //////////////////////////////////////////////////////////////////////////////////////// -->

      <div id="services" class="services section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4> <b b style="color:rgb(218,165,32) ; font-family: Georgia;">ROYAL TRAVEL</b> Fitur <em>&amp; Layanan Terbaik</em> Untuk Anda</h4>
                <img src="assets/images/heading-line-dec.png" alt="">
                <h5>Kami bekerja sama dengan berbagai jaringan segera di seluruh dunia untuk memastikan kenyamanan Anda saat menginap di belahan dunia manapun! <a rel="nofollow" href="https://www.toocss.com/" target="_blank"></a> Blog.Tiket Pesawat Harga Terbaik, Checkin Mudah. <a href="https://templatemo.com/contact" target="_parent">our contact page</a> Pesan Tiket Pesawat cara pintar</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- //////////////////////////////////////////////////////////////////////////// -->




        <div id="clients" class="the-clients">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                  <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                  <img src="assets/images/heading-line-dec.png" alt="">
                  <h5>Bandingkan Tiket Promo Termurah disini dengan teknologi Royal Travel®,Tiket Pesawat
                    Harga Terbaik, Check-in Mudah. Cara Pintar Pesan Tiket Pesawat.</h5>
                </div>
              </div>
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
                                    <img style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL">
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
            <div class="col-lg-8 offset-lg-2">
              <div class="section-heading">
                <h4>Join our mailing list to receive the news &amp; latest trends</h4>
              </div>
            </div>
            <div class="col-lg-6 offset-lg-3">
              <form id="search" action="#" method="GET">
                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <fieldset>
                      <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                    <fieldset>
                      <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="footer-widget">
                <b class="fa-3x">
                  <i class="fas fa-stroopwafel fa-spin"></i>
                </b>
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
                  <br>Design : <a href="https://templatemo.com/" target="_blank" title="css templates">@bayu_wijiana</a>
                </p>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel"><b style="color :orange ;">Log In untuk pemesanan anda..</b>
        </h1>

      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">


        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OKE</button>


      </div>
    </div>
  </div>
</div>

</html>