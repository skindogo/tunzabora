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
          <li><a href="contact.php" class="">Contact</a></li>
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
        <h2>Request <?php print $_GET['facility']??"Facility"?> Info</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

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
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" >
              </div>
              <div class="form-group mt-3">
                <select class="form-control" name="message" required>
                    <option value="">---</option>
                    <option value="I would like to be contacted and learn more">I would like to be contacted and learn more</option>
                    <option value="I would like information about pricing">I would like information about pricing</option>
                    <option value="I would like information about availability">I would like information about availability</option>
                </select>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Request Info</button></div>
            </form>

          </div>

        </div>
        <div class="row mt-5">

          <div class="col-lg-8 mt-5 mt-lg-0">
          <p><i><sup>*</sup>Typically responds within 1 business day</i></p>
          <p><font size="-1">
            Your information is only shared with this provider for the purposes of responding to your inquiry. By continuing, you
            agree that you have read and accepted the <a href="terms.php">terms</a> of use and <a href="privacy.php">privacy policy</a>
          </font></p>
          </div>
        </div>

      </div>
      
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>