 <?php	
 
session_start();
      if(!isset($_SESSION["login-usser"])){
        echo "<script>
                     alert('silahkan log in dahulu');
                     window.location ='index.php';
             </script>";
    }
      include "read_home.php";

                            


?>
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
    <link rel="stylesheet" href="assets/css/style2.css">
    
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
          <nav class="main-nav" >
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img  style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL"><img style=" height: 100px;width:100px;border-radius: 20px;" src="assets/images/y.png" alt="ROYAL TRAVEL"><b style="font-size: 30px;font-family: Georgia, 'Times New Roman', Times;" >ROYAL </b><b style="font-size: 35px;font-family: Georgia, 'Times New Roman', Times; color:rgb(218,165,32) " >TRAVEL</b>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"></li>
              <li class="scroll-to-section"></li>
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
  
<!-- /////////////////////////////////////////////////////////////////////////// -->
                              
<div id="services" class="services section">
  

<div id="clients" class="the-clients">

    <div class="container" style="margin-top:-70px">
     <h3> <img src="assets/images/2.png" style="height:80px;width: 80px;"><b> pemesanan </b></h3>
      
      <div class="row">       
                         <form action="oke2.php" method="post">
                              <table class="table table-sm" style="font-size:23px;width: 95%;">
                                  <thead style="height:70px;background-image: url(assets/images/biru.jpg);color: lightblue;font-weight:bold;color:white;">
                                        <td></td>
                                        <td>
                                        </td>
                                        <td>Pesawat</td>
                                        <td>Tujuan</td>
                                        <td>Jam berangkat</td>
                                        <td>Opsi</td>
                                  </thead>
                      <?php	
                                  
                                 $id_pesawat=$_POST['id_pesawat'];
                                 $f=new pesan();
                                 foreach ($f->tampil_pesawat5($id_pesawat) as $data2) {
                      ?>             
                                      <tr style="height:60px">
                                            <td></td>
                                            <td >
                                                  <img style="height: 50px;width:100%;" src="assets/images/<?=$data2['logo_pesawat']; ?>">
                                            </td>
                                           
                                            
                                            <td><?=$data2['nama_pesawat']?></td>
                                           

                                            <td><?=$data2['kota_tujuan_pesawat']?></td>
                                           

                                            <td><?=$data2['jam_berangkat_pesawat']?></td>
                                                >                                            
                                            <td>  
                                               
                                            </td>
                                      </tr>

                                      <thead style="height:80px; ">
                                        <td></td>
                                        <td></td>
                                        <td>Tanggal berangkat</td>
                                        <td>Jumlah Penumpang</td>
                                        <td>Kelas</td>
                                        <td>Opsi</td>
                                      </thead>
                                      <tr>
                                        
                                        <td></td>
                                        <td></td>
                                        <td> <input type="date" name="tanggal_berangkat_pesawat" required> </td>
                                        <td> <input type="number" name="jumlah_penumpang" required> </td>
                                        <td>
                                          <select name="kelas_pesawat" id="" required>
                                                  <option value="ekonomi">ekonomi</option>
                                                  <option value="bisnis">bisnis</option>
                                                  <option value="exekutif">exekutif</option>
                                          </select>
                                        </td>
                                        <td>


                                                  <input type="hidden" name="id_pesawat" value="<?=$data2['id_pesawat']?>">
                                                  <input type="hidden" name="nama_pesawat" value="<?=$data2['nama_pesawat']?>">
                                                  <input type="hidden" name="kota_tujuan_pesawat" value="<?=$data2['kota_tujuan_pesawat']?>">
                                                  <input type="hidden" name="harga" value="<?=$data2['harga']?>">
                                                  
                                                  <input type="hidden" name="nama_bandara" value="<?=$data2['nama_bandara']?>">
                                                  <input type="hidden" name="jam_berangkat_pesawat" value="<?=$data2['jam_berangkat_pesawat']?>">
                                                    <button style="border-radius:20px;width:100px" name="pesan" type="submit"><b>pesan</b></button>

                                        </td>
                                      </tr>

                      <?php   	    }     ?>
                      
                               
                              </table>
                                                                      
                         </form>
                         
                                
                         
                        
 
      </div>
    </div>
  </div>
</div>


    
<div id="services" class="services section">
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
          <br>Design : <a href="https://templatemo.com/" target="_blank" title="css templates">@bayu_wijiana</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
<

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
        <h4 style="color:orange ;"class="modal-title" id="exampleModalLabel"><b> PANDUAN</b></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <b>
        >> Untuk memesan tiket silahkan search bandara keberangkatan  <br>
        >> Lihat jadwal penerbangan <br>
        >> Cek <br>
        >>" Search sesuai nama bandara yang ada "
      </b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</html>