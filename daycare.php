<!-- =======================================================
  * Elvan Twins Enterprises
  ======================================================== -->
<?php require("db/class.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daycares|Tunza Bora</title>
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
          <li class="dropdown"><a href="#" class="active"><span>Daycare</span> <i class="bi bi-chevron-down"></i></a>
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
        <h2>Find a Day Care </h2>
      </div>
    </div><!-- End Breadcrumbs -->

  <?php
  if(isset($_GET['daycare']))
  {
  $daycare=$_GET['daycare'];
  $category="101";
  $col=$daycare;
  ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/img5.jpg" class="img-fluid" alt="" width="100%">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Find the best <strong><?php print ucfirst($daycare)?> </strong>daycare in your area</h2>
            <p class="fst-italic">Enter your county, sub-county or location to find daycares in your area.</p>
            <form action="search.php" method="get" role="form" class="">
              <input type="hidden" name="col" value="<?php print $col?>">
              <input type="hidden" name="category" value="<?php print $category?>">
              <div class="row">
                <div class="col-md-6 form-group">
                <select name="age" class="form-control" id="age" required>
                <option value="">Age Bracket</option>
                <option value="0.5">0-6 Months</option>
                <option value="0.999">7-12 Months</option>
                <option value="1">1 Year</option>
                <option value="2">2 Years</option>
                <option value="3">3 Years</option>
                <option value="4">4 Years</option>
                <option value="5">5 Years</option>
                <option value="6">6 Years</option>
                <option value="7">7 Years</option>
                <option value="8">8+ Years</option>
                </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="location" id="location" placeholder="County Code or Location" required>
                </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
              <div class=""><br><button type="submit" class="get-started-btn" name="find_daycare">Find <?php print ucfirst($daycare)?> Daycare</button></div>
              </div>
              </div>
            </form>
          </div>
          
        </div>
        <hr width="100%" style="color:#0FAACD;height: 5px;" />

      </div>
    </section><!-- End About Section -->

    <!-- ======= Featured Section ======= -->
    <?php
      $rowcount=$pdo->prepare("SELECT COUNT(*) FROM `facilities` WHERE `typeoffacility` = ?");
      $rowcount->execute([$category]);
      $rowcount=$rowcount->fetchColumn();
    ?>
    <?php
    if($rowcount>0)
    {
      $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE `typeoffacility` = ?");
      $sth->execute([$category]);
      ?>
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <p></p>
          </div>
        
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Featured daycares around the country</h3>
          <?php foreach($sth as $sth)
          {
            ?> 
            <div style="border: 1px solid #0FAACD;">
            <a href="facilities.php?action=view&item=<?php print $sth['facilityid']?>" style="text-decoration:none; color:#000">
            <h3><font color="#0FAACD"><?php print $sth['facilityname']?></font></h3>
            <p class="fst-italic"><?php print ($sth['status']=="Verified")?"<i class='bi bi-check-circle' style='color:#0FAACD'></i> 
				".$sth['status']:"<i class='bi bi-x' style='color:#F00;'></i> ".$sth['status']?></p>
            <p class=""><?php print $sth['details']?></p>
            <p class="fst-italic"><?php print "Phone: ".$sth['phone']. " Email:".$sth['email']?></p>
          </a>
          </div><br>
          <?php
          }
          ?>
          </div>
        </div>
      </div>
    </section>
    <?php
    }
  
  }
    ?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>