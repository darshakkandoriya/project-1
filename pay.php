<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>payment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
      /* Center the title of the page */
      h1 {
        text-align: center;
      }
    </style>
  
  </head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:saurastraautom@gmail.com">saurastraauto@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 90164 15115</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/okayaev?t=vrUCmZqFMbo9C3XlMKodmA&s=09" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/okayaev" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/okayaev/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://in.linkedin.com/company/okaya-electric-vehicle" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

<br>
 
  <h1> Payment </h1>

  <form method="POST">
  &nbsp;&nbsp; <input type="radio" name="payment" value="phonepe"> <b>Phonepe</b> &nbsp;&nbsp;
  <input type="radio" name="payment" value="paytm"> <b>Paytm</b> &nbsp;&nbsp;
  <input type="submit" name="submit" value="Confirm">
</form>

<?php
if(isset($_POST['submit'])){
  $payment = $_POST['payment'];
  if($payment == "phonepe"){
    echo "&nbsp;&nbsp;&nbsp;<b> You selected Phonepe.\n</b>";
  } 

  
  else {
    echo "&nbsp;&nbsp;&nbsp;<b> You selected Paytm.\n</b>";
    }
  }
 ?>
</div>

  <section id="product-details" class="product-details">
      <div class="container">
        <div class="row">

          <div class="col-lg-3">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-left">
                <div class="swiper-slide">
                  <img src="assets/img/web.jpeg" alt="">
                </div>
              </div>
              <br>
              <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scan & Pay</b></h3>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-left">
                <div class="swiper-slide">
                  <img src="assets/img/app.jpg" alt="">
                </div>

              </div>
              <br>
              <h3><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scan & Pay</b></h3>
              <div class="swiper-pagination"></div>

            </div>
          </div>

          <div class="col-lg-5">
            <div class="portfolio-info" textalign="right">
              <h3><b>SAURASTRA AUTOMOBILE</b></h3>
              <ul>
                <li><strong>Category</strong>: EV-Series</li>
                <li><strong>Origin</strong>: Okaya Electrics</li>
                <li><strong>Product</strong>: Okaya Faast F4</li>
                <li><strong>More Info.</strong>: <a href="index.php">www.SaurastraAuto.com</a></li>
              </ul>
              
            </div>
          
          </div>
          <br>
          <?php
              $button_text ='<h4><b>Cash On Delivery</b></h>';
	            $button_type = 'button';
	            $link = "http://localhost/Automotive/confirm.php";
	            ?>
	<button onclick="window.location.href='<?php echo $link; ?>'"><?php echo $button_text; ?></button>
        </div>
        