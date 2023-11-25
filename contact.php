<!-- =======================================================
  * Elvan Twins Enterprises
  ======================================================== -->
<?php require("db/class.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us|Tunza Bora</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index.php">Tunza Bora</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Daycare</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="daycare.php?daycare=home-based">Home-Based Daycares</a></li>
              <li><a href="daycare.php?daycare=centre-based">Centre-Based Daycares</a></li>
              <li><a href="daycare.php?daycare=montessori">Montessori Daycares</a></li>
              <li><a href="daycare.php?daycare=religious">Religious Based Daycares</a></li>
              <li><a href="daycare.php?daycare=24hr">24-Hour Daycares</a></li>
              <li><a href="daycare.php?daycare=weekend-based">Weekend-Based Daycares</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class=""><span>Kindergarten</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="kindergarten.php?kindergarten=home-based">Home-Based Kindergartens</a></li>
              <li><a href="kindergarten.php?kindergarten=centre-based">Centre-Based Kindergartens</a></li>
              <li><a href="kindergarten.php?kindergarten=montessori">Montessori Kindergartens</a></li>
              <li><a href="kindergarten.php?kindergarten=religious">Religious Based Kindergartens</a></li>
              <li><a href="kindergarten.php?kindergarten=24hr">24-Hour Kindergartens</a></li>
              <li><a href="kindergarten.php?kindergarten=weekend-based">Weekend-Based Kindergartens</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class=""><span>Childcare</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="childcares.php?childcare=home-based">Home-Based Childcares</a></li>
              <li><a href="childcares.php?childcare=centre-based">Centre-Based Childcares</a></li>
              <li><a href="childcares.php?childcare=montessori">Montessori Childcares</a></li>
              <li><a href="childcares.php?childcare=religious">Religious Based Childcares</a></li>
              <li><a href="childcares.php?childcare=24hr">24-Hour Childcares</a></li>
              <li><a href="childcares.php?childcare=weekend-based">Weekend-Based Childcares</a></li>
            </ul>
          </li>
          <li><a href="onlinekidsch.php?search" class="">Online Kids Schools</a></li>
          <li class="dropdown"><a href="#"><span>Children with Special Needs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="specialneeds.php?special=home-based">Home-Based Special Schs</a></li>
              <li><a href="specialneeds.php?special=centre-based">Centre-Based Special Schs</a></li>
              <li><a href="specialneeds.php?special=montessori">Montessori Special Schs</a></li>
              <li><a href="specialneeds.php?special=religious">Religious Based Special Schs</a></li>
              <li><a href="specialneeds.php?special=24hr">24-Hour Special Schs</a></li>
              <li><a href="specialneeds.php?special=weekend-based">Weekend-Based Special Schs</a></li>
            </ul>
          </li>
          <li><a href="resources.php">Resources</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../users/sign-in.php" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php print $contacts['address']?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php print $contacts['email1']?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php print $contacts['phone1']?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>