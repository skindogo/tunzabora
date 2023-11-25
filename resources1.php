<!-- =======================================================
  * Elvan Twins Enterprises
  ======================================================== -->
<?php require("db/class.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resources|Tunza Bora</title>
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
          <li class="dropdown"><a href="#" class=""><span>Daycare</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Home-Based Daycares</a></li>
              <li><a href="#">Centre-Based Daycares</a></li>
              <li><a href="#">Montessori Daycares</a></li>
              <li><a href="#">Religious Based Daycares</a></li>
              <li><a href="#">24-Hour Daycares</a></li>
              <li><a href="#">Weekend-Based Daycares</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class=""><span>Kindergarten</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="kindergarten.php">Home-Based Kindergartens</a></li>
              <li><a href="kindergarten.php">Centre-Based Kindergartens</a></li>
              <li><a href="kindergarten.php">Montessori Kindergartens</a></li>
              <li><a href="kindergarten.php">Religious Based Kindergartens</a></li>
              <li><a href="kindergarten.php">24-Hour Kindergartens</a></li>
              <li><a href="kindergarten.php">Weekend-Based Kindergartens</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class=""><span>Childcare</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="childcares.php">Home-Based Childcares</a></li>
              <li><a href="childcares.php">Centre-Based Childcares</a></li>
              <li><a href="childcares.php">Montessori Childcares</a></li>
              <li><a href="childcares.php">Religious Based Childcares</a></li>
              <li><a href="childcares.php">24-Hour Childcares</a></li>
              <li><a href="childcares.php">Weekend-Based Childcares</a></li>
            </ul>
          </li>
          <li><a href="onlinekidsch.php">Online Kids Schools</a></li>
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
          <li><a href="#">Resources</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../users/sign-in.php" class="get-started-btn" target="_blank">Login</a>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Resources</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="resources.php?resources&target=caregivers"><h4>Care Giver Resources</h4></a>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="resources.php?resources&target=parents"><h4>Parent Resources</h4></a>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <a href="resources.php?resources&target=children"><h4>Children Resources</h4></a>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Courses Section -->
    
    <?php 
    if(isset($_GET['resources']) && isset($_GET['target']))
    {
    $resources=$_GET['resources'];
    $target=$_GET['target'];
    $sth=$pdo->prepare("SELECT * FROM `resources` WHERE `target`=?");
    $sth->execute([$target]);
    ?>
      <div class="container" data-aos="fade-up">
        <div class="row">
        <div class="col-lg-12 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <table width="100%">
                <tr>
                    <th>File</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Download</th>
                </tr>
            <?php 
                foreach($sth as $sth){ 
                $size=round($image['size']/1024,0)." Kbs";
                $size=($size<1000)?$size:round($size/1000,1)." Mbs";
                ?>
                <tr>
                    <td><?php print $sth['title']?></td>
                    <td><?php print ucfirst($sth['type'])?></td>
                    <td><?php print $size?></td>
                    <td><a href="resources/<?php print $sth['filename']?>" class="get-started-btn" target="_blank">Download</a></td>
                </tr>
            <?php }?>
                </table>
            </div>
        </div>
      </div><br>
    <?php
    }
    ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>