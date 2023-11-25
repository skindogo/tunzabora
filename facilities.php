<!-- =======================================================
  * Elvan Twins Enterprises
  ======================================================== -->
<?php require("db/class.php");?>
<?php $about=$pdo->query("SELECT * FROM `about`");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Facilities|Tunza Bora</title>
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
          <li><a href="resources.php">Resources</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../users/sign-in.php" class="get-started-btn" target="_blank">Login</a>

    </div>
  </header><!-- End Header -->

  <main id="main">
   
    <?php
    if(isset($_GET['action']) && $_GET['action']=='view' && $_GET['item']!='')
    {
    $facilityid=$_GET['item'];
    $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE `facilityid`=?");
    $sth->execute([$facilityid]);
    $sth=$sth->fetch();
    $county=$pdo->prepare("SELECT * FROM `counties` WHERE `countycode`=?");
    $county->execute([$sth['countycode']]);
    $county=$county->fetch();
    $subcounty=$pdo->prepare("SELECT * FROM `subcounties` WHERE `subcountycode`=?");
    $subcounty->execute([$sth['subcountycode']]);
    $subcounty=$subcounty->fetch();
    $images=$pdo->prepare("SELECT * FROM `facilityimages` WHERE `facilityid`=? ORDER BY `id` DESC LIMIT ?");
    $images->execute([$facilityid,3]);
    $hours=$pdo->prepare("SELECT * FROM `operatinghours` WHERE `facilityid`=?");
    $hours->execute([$facilityid]);
    $operating_hours=$hours->fetch();
    $sunday24hour=($operating_hours['sundayopening']=='24 Hours')?'Open 24 Hours':NULL;
    $sundayclosed=($operating_hours['sundayopening']=='Closed')?'Closed':NULL;
    $monday24hour=($operating_hours['mondayopening']=='24 Hours')?'Open 24 Hours':NULL;
    $mondayclosed=($operating_hours['mondayopening']=='Closed')?'Closed':NULL;
    $tuesday24hour=($operating_hours['tuesdayopening']=='24 Hours')?'Open 24 Hours':NULL;
    $tuesdayclosed=($operating_hours['tuesdayopening']=='Closed')?'Closed':NULL;
    $wednesday24hour=($operating_hours['wednesdayopening']=='24 Hours')?'Open 24 Hours':NULL;
    $wednesdayclosed=($operating_hours['wednesdayopening']=='Closed')?'Closed':NULL;
    $thursday24hour=($operating_hours['thursdayopening']=='24 Hours')?'Open 24 Hours':NULL;
    $thursdayclosed=($operating_hours['thursdayopening']=='Closed')?'Closed':NULL;
    $friday24hour=($operating_hours['fridayopening']=='24 Hours')?'Open 24 Hours':NULL;
    $fridayclosed=($operating_hours['fridayopening']=='Closed')?'Closed':NULL;
    $saturday24hour=($operating_hours['saturdayopening']=='24 Hours')?'Open 24 Hours':NULL;
    $saturdayclosed=($operating_hours['saturdayopening']=='Closed')?'Closed':NULL;
    $safety=$pdo->prepare("SELECT * FROM `safety` WHERE `facilityid`=?");
    $safety->execute([$facilityid]);
    $safety=$safety->fetch();
    ?>
     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php print $sth['facilityname']?></h2>
      </div>
    </div><!-- End Breadcrumbs -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="../assets/img/facility_img/<?php print $sth['image']?>" class="img-fluid" alt="Profile Pic">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <p class="fst-italic"><?php print ($sth['status']=="Verified")?"<i class='bi bi-check-circle' style='color:#0FAACD'></i> 
				".$sth['status']:"<i class='bi bi-x' style='color:#F00;'></i> ".$sth['status']?></p>
          <p class=""><?php print $sth['details']?></p>
          <?php print ($sth['website']==true)?"<p><a href='".$sth['website']. "'target='_blank' class='get-started-btn'> Website <i class='bi bi-link'></i></a></p>":NULL;?>
            <div class="row">
            <?php 
            foreach($images as $image)
            {
            ?>
            <div class="col-lg-4" data-aos="fade-left" data-aos-delay="100">
              <img src="../assets/img/facility_img/<?php print $image['image']?>" class="img-fluid" alt="">
            </div>
            <?php
            }
            ?>
            </div>
        </div>
        </div><br>

      </div>
      <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100" style="border: 1px solid #0FAACD;">
        <h2>Location Details</h2>
        <p>
        <?php print $county['county']?> County<br>
        <?php print $subcounty['subcounty']?> Sub County<br>
        <?php print $sth['location']?>
        </p>
      </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100" style="border: 1px solid #0FAACD;">
        <p>&nbsp;</p>
        <center><p><a href="request-info.php?facility=<?php echo $sth['facilityname'] ?>" class="get-started-btn">Request Info</a></p></center>
        </div>
      </div><br>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100" style="border: 1px solid #0FAACD;">
          <h2>Services Offered</h2>
          <?php print $subcounty['subcounty']?>
          </div>
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100" style="border: 1px solid #0FAACD;">
          <h2>Business Hours</h2>
              <p>Sunday:&nbsp;<?php print $sunday24hour??$sundayclosed??$operating_hours['sundayopening']." - ".$operating_hours['sundayclosing']?></p>
              <p>Monday:&nbsp;<?php print $monday24hour??$mondayclosed??$operating_hours['mondayopening']." - ".$operating_hours['mondayclosing']?></p>
              <p>Tuesday:&nbsp;<?php print $tuesday24hour??$tuesdayclosed??$operating_hours['tuesdayopening']." - ".$operating_hours['tuesdayclosing']?></p>
              <p>Wednesday:&nbsp;<?php print $wednesday24hour??$wednesdayclosed??$operating_hours['wednesdayopening']." - ".$operating_hours['wednesdayclosing']?></p>
              <p>Thursday:&nbsp;<?php print $thursday24hour??$thursdayclosed??$operating_hours['thursdayopening']." - ".$operating_hours['thursdayclosing']?></p>
              <p>Friday:&nbsp;<?php print $friday24hour??$fridayclosed??$operating_hours['fridayopening']." - ".$operating_hours['fridayclosing']?></p>
              <p>Saturday:&nbsp;<?php print $saturday24hour??$saturdayclosed??$operating_hours['saturdayopening']." - ".$operating_hours['saturdayclosing']?></p>
          </div>
        </div>
      </div><br>
      <div class="container" style="border: 1px solid #0FAACD;">
        <h2>Quality Service Standards</h2>
        <p><?php print $safety['statement']?> </p>
      </div><br>
    </section>
    <?php
    }
    ?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>