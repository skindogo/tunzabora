<!-- =======================================================
  * Elvan Twins Enterprises
  ======================================================== -->
<?php require("db/class.php");?>
<?php $about=$pdo->query("SELECT * FROM `about`")?>
<?php $mission=$pdo->query("SELECT * FROM `mission`")?>
<?php $corevalues=$pdo->query("SELECT * FROM `corevalues`")?>
<?php $principles=$pdo->query("SELECT * FROM `careprinciples`")?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us|Tunza Bora</title>
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
      <a href="./" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="#" class="active">About Us</a></li>
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
          <li><a href="onlinekidsch.php?search">Online Kids Schools</a></li>
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
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../users/sign-in.php" class="get-started-btn" target="_blank">Login</a>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <?php 
            foreach($about as $about){?>
            <center>
              <h2><?php print $about['item']?></h2>
              <p><?php print $about['details']?></p>
            </center>
            <?php }?>
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <?php 
            foreach($mission as $mission)
            {?>
            <center>
              <h2><?php print $mission['item']?></h2>
              <p><?php print $mission['statement']?></p>
            </center>
            <?php 
            }?>
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content">
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <center><h2>Core Values</h2></center>
            <?php 
            foreach($corevalues as $value)
            {?>
              <p><i class="bi bi-check-circle" style="color:#0FAACD"></i>&nbsp;<?php print $value['item']?></p>
            <?php 
            }?>
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content">
          </div>
          <div class="col-lg-4 pt-4 pt-lg-0 order-2 order-lg-1 content">
          </div>
          <div class="col-lg-5 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <center><h2>Principles of Nurturing Care</h2></center>
            <?php 
            foreach($principles as $p){?>
              <p><i class="bi bi-check-circle" style="color:#0FAACD"></i>&nbsp;<?php print $p['item']?></p>
            <?php }?>
          </div>
          <div class="col-lg-3 pt-4 pt-lg-0 order-2 order-lg-1 content">
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>