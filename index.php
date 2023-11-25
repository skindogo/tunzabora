<?php require "db/class.php";?>
<?php
$counties=$pdo->query("SELECT * FROM `counties`");
$categories=$pdo->query("SELECT * FROM `categories`");
$countfacilities=$pdo->query("SELECT COUNT(*) FROM `facilities`")->fetchColumn();
$countchildren=$pdo->query("SELECT SUM(`children`) FROM `facilities`")->fetchColumn();
$countparents=$pdo->query("SELECT SUM(`parents`) FROM `facilities`")->fetchColumn();
?>
 <!-- =======================================================
  * Elvan Twins Enterprises
  ======================================================== -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home|Tunza Bora</title>
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

      <a href="../users/sign-in.php" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Access Affordable,<br>Childcare Services</h1>
      <form method="get" action="search.php" class="">
      <div class="col-md-3 form-group">
        <select name="category" class="form-control" id="category" required>
            <option value="">Type of Institution</option>
            <?php foreach($categories as $cat){?>
              <option value="<?php print $cat['code']?>"><?php print $cat['category']?></option>
            <?php }?>
        </select>
      </div><br>
      <div class="col-md-3 form-group">
         <select name="age" class="form-control" id="name">
            <option value="">Age</option>
            <option value="0.5">0-6 Months</option>
            <option value="0.99">7-12 Months</option>
            <option value="1">1 Year</option>
            <option value="2">2 Years</option>
            <option value="3">3 Years</option>
            <option value="4">4 Years</option>
            <option value="5">5 Years</option>
            <option value="6">6 Years</option>
            <option value="7">7 Years</option>
            <option value="8">8+ Years</option>
        </select>
      </div><br>
      <div class="col-md-3 form-group">
        <input type="text" name="location" class="form-control" placeholder="County Code or Location"/>
          <!--
            <select name="countycode" class="form-control" id="countycode">
            <option value="">County</option>
            <?php //foreach($counties as $county){?>
              <option value="<?php //print $county['countycode']?>"><?php //print $county['county']?></option>
            <?php //}?>
          </select>
            -->
      </div><br>
      <div class=""><button type="submit" class="get-started-btn" name="find_facility">Find Facility</button></div>
      </form>

      <!--<a href="../users/sign-in.php" class="btn-get-started">Sign In</a>-->
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <?php $services=$pdo->query("SELECT * FROM `categories`")?>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/img1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>About Us</h2>
            <p class="fst-italic">
              Tunza Bora is a child-centred organization with the aim of providing young mothers with child care services. We offer 
              a variety of services including the following;
            </p>
            <ul>
              <?php foreach($services as $service){?>
                <li><i class="bi bi-check-circle"></i> <?php print $service['category']?></li>
              <?php }?>
            </ul>
           <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>-->

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
      <h2><center>What We Offer</center></h2>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-badge"></i>
                    <h4>Care Giver Training</h4>
                    <p>We train caregivers in responsive parenting in line with the World Health Organization framework</p>
                  </div>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Day Care Services</h4>
                    <p>Tunza Bora offers day care services in a clean and safe environment to children aged between 0 months to 8 years</p>
                  </div>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Childcare Resources</h4>
                    <p>Get childcare materials that will help your kid go mentally and physically</p>
                  </div>
                </div>
                <div class="col-xl-3 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-heart"></i>
                    <h4>Partnerships</h4>
                    <p>We are in constant partnerships with like-minded organizations and individuals to help achieve our goals and make an impact in the society</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div><br>
        <center><a href="about.php" class="get-started-btn">Learn More</a></center>
      </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php print $countchildren??0?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Children</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php print $countparents??0?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Parents</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php print $countfacilities??0?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Child Care Centres</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Partnerships</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
      <h2><center>Our Partners</center></h2>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="assets/img/Tunza_Bora_logo.png">
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="assets/img/oay-logo.png">
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="assets/img/wusc-logo.jpg" width="250">
                  </div>
                </div>
                <!--<div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img src="assets/img/Tunza_Bora_logo.png">   
                 </div>
                </div>-->
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
      <h2><center>Shop with Us</center></h2>
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Discounted Baby Products</h3>
              <p>
                Shop online and get a discount on baby products
              </p>
              <div class="text-center">
                <a href="" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">

<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
  <div class="course-item">
    <img src="assets/img/image (1).jpg" class="img-fluid" alt="...">
    <div class="course-content">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Porridge Flour</h4>
        <p class="price">KSh.169</p>
      </div>
      <p>Get porridge flour at discounted price</p>
    </div>
  </div>
</div> <!-- End Course Item-->

<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
  <div class="course-item">
    <img src="assets/img/image.jpg" class="img-fluid" alt="...">
    <div class="course-content">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Uji Mix</h4>
        <p class="price">KSh.250</p>
      </div>
      <p>Uji mix is a quality product for babies under the age of six.</p>
    </div>
  </div>
</div> <!-- End Course Item-->

<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
  <div class="course-item">
    <img src="assets/img/FFB6FLjXMAEpirL.jpg" class="img-fluid" alt="...">
    <div class="course-content">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Baby Powder</h4>
        <p class="price">KSh.180</p>
      </div>
      <p>Refresh the skin of your young one.</p>
    </div>
  </div>
</div> <!-- End Course Item-->

</div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
                <center><h2>Free Resources</h2></center>
        <div class="row">
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h2 class="card-title"><a href="resources.php">For Care Givers</a></h2>
                <p class="fst-italic text-center"><a href="resources.php" class="btn-get-started">Get Resources</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img3.jpg" alt="...">
              </div>
              <div class="card-body">
              <h2 class="card-title"><a href="resources.php">For Parents</a></h2>
              <p class="fst-italic text-center"><a href="resources.php" class="btn-get-started">Get Resources</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/img4.jpg" alt="...">
              </div>
              <div class="card-body">
              <h2 class="card-title"><a href="resources.php">For Children</a></h2>
              <p class="fst-italic text-center"><a href="resources.php" class="btn-get-started">Get Resources</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>