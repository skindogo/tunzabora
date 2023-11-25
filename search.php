<!-- =======================================================
  * Elvan Twins Enterprises
  ======================================================== -->
<?php require("db/class.php");?>
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
        <h2>Find Child Care </h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <?php
    if(isset($_REQUEST['find_facility']))
    {
      $category=$_REQUEST['category'];
      $age=$_REQUEST['age'];
      $location=$_REQUEST['location'];
      //$subcountycode=$_REQUEST['subcountycode'];
      $rowcount=$pdo->prepare("SELECT COUNT(*) FROM `facilities` WHERE (`countycode` = ? OR `location` LIKE ?) AND `typeoffacility` = ? AND (`lowerage`<=? OR `upperage`>=?)");
      $rowcount->execute([$location,"%$location%",$category,$age,$age]);
      $rowcount=$rowcount->fetchColumn();
    ?>
    <?php
    if($rowcount==0)
		{
    ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/Untitled design (1).png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Search Results</h2>
            <p class="fst-italic">No facility matches your search criteria</p>
          </div>
        </div>
      </div>
    </section>
    <?php    
    //include("footer.php");
    //exit;
    }
    else
    {
      $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE (`countycode` = ? OR `location` LIKE ?) AND `typeoffacility` = ? AND (`lowerage`<=? OR `upperage`>=?)");
      $sth->execute([$location,"%$location%",$category,$age,$age]);
      ?>
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div>
        
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Search Results (<?php print $rowcount ." Facilities Found"?>)</h3>
          <?php foreach($sth as $sth){?> 
            <div style="border: 1px solid #0FAACD;">
            <a href="facilities.php?action=view&item=<?php print $sth['facilityid']?>" style="text-decoration:none; color:#000">
            <h3><font color="#0FAACD"><?php print $sth['facilityname']?></font></h3>
            <p class="fst-italic"><?php print ($sth['status']=="Verified")?"<i class='bi bi-check-circle' style='color:#0FAACD'></i> 
				".$sth['status']:"<i class='bi bi-x' style='color:#F00;'></i> ".$sth['status']?></p>
            <p class=""><?php print $sth['details']?></p>
            <p class="fst-italic"><?php print "Phone: ".$sth['phone']. " Email:".$sth['email']?></p>
          </a>
            <!--<p><a href="facilities.php?action=view&item=<?php print $sth['facilityid']?>" class="get-started-btn">View Details</a></p>-->
           <!-- <hr width="100%" height="500px" style="color:#0FAACD; height: 50px;">-->
          </div><br>
          <?php }?>
          </div>
        </div>
      </div>
    </section>
    <?php
    }
      /*[FEATURED SECTION]*/
      $featuredcount=$pdo->prepare("SELECT COUNT(*) FROM `facilities` WHERE `typeoffacility` = ?");
      $featuredcount->execute([$category]);
      $featuredcount=$featuredcount->fetchColumn();
      
      if($featuredcount>0)
      {
        $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE `typeoffacility` = ? LIMIT ?");
        $sth->execute([$category,10]);
        ?>
        <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <p></p>
            </div>
          
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Featured childcares around the country</h3>
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


<?php
/********************************************************************************* */
/*FIND DAYCARES*/
/********************************************************************************* */
    if(isset($_REQUEST['find_daycare']))
    {
      $col=$_REQUEST['col'];
      $category=$_REQUEST['category'];
      $age=$_REQUEST['age'];
      $location=$_REQUEST['location'];
      $rowcount=$pdo->prepare("SELECT COUNT(*) FROM `facilities` WHERE `$col` = ? AND `typeoffacility`=? AND (`countycode`=? OR `location` LIKE ?) AND (`lowerage`<=? OR `upperage`>=?)");
      $rowcount->execute(["yes",$category,$location,"%$location%",$age,$age]);
      $rowcount=$rowcount->fetchColumn();
    ?>
    <?php
    if($rowcount==0)
		{
    ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/Untitled design (1).png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Search Results</h2>
            <p class="fst-italic">No daycare matches your search criteria</p>
          </div>
        </div>
      </div>
    </section>
    <?php
    include("footer.php");
    exit;
    }
    $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE `$col` = ? AND `typeoffacility`=? AND (`countycode`=? OR `location` LIKE ?) AND (`lowerage`<=? OR `upperage`>=?)");
    $sth->execute(["yes",$category,$location,"%$location%",$age,$age]);
      ?>
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div>
        
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Search Results (<?php print $rowcount ." Facilities Found"?>)</h3>
          <?php foreach($sth as $sth)
          {
            ?> 
            <div style="border: 1px solid #0FAACD;">
            <a href="facilities.php?action=view&item=<?php print $sth['facilityid']?>" style="text-decoration:none; color:#000">
            <h3><font color="#0FAACD"><?php print $sth['facilityname']?></font></h3>
            <p class="fst-italic">
              <?php 
                print ($sth['status']=="Verified")?"<i class='bi bi-check-circle' style='color:#0FAACD'></i> 
				        ".$sth['status']:"<i class='bi bi-x' style='color:#F00;'></i> ".$sth['status']
              ?>
            </p>
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
    ?>

<?php
/********************************************************************************* */
/*FIND Kindergarten*/
/********************************************************************************* */
    if(isset($_REQUEST['find_kindergarten']))
    {
      $col=$_REQUEST['col'];
      $category=$_REQUEST['category'];
      $age=$_REQUEST['age'];
      $location=$_REQUEST['location'];
      $rowcount=$pdo->prepare("SELECT COUNT(*) FROM `facilities` WHERE `$col` = ? AND `typeoffacility`=? AND (`countycode`=? OR `location` LIKE ?) AND (`lowerage`<=? OR `upperage`>=?)");
      $rowcount->execute(["yes",$category,$location,"%$location%",$age,$age]);
      $rowcount=$rowcount->fetchColumn();
    ?>
    <?php
    if($rowcount==0)
		{
    ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/Untitled design (1).png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Search Results</h2>
            <p class="fst-italic">No kindergarten matches your search criteria</p>
          </div>
        </div>
      </div>
    </section>
    <?php
    include("footer.php");
    exit;
    }
      $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE `$col` = ? AND `typeoffacility`=? AND (`countycode`=? OR `location` LIKE ?) AND (`lowerage`<=? OR `upperage`>=?)");
      $sth->execute(["yes",$category,$location,"%$location%",$age,$age]);
      ?>
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div>
        
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Search Results (<?php print $rowcount ." Kindergartens Found"?>)</h3>
          <?php foreach($sth as $sth)
          {
            ?> 
            <div style="border: 1px solid #0FAACD;">
            <a href="facilities.php?action=view&item=<?php print $sth['facilityid']?>" style="text-decoration:none; color:#000">
            <h3><font color="#0FAACD"><?php print $sth['facilityname']?></font></h3>
            <p class="fst-italic">
              <?php print ($sth['status']=="Verified")?"<i class='bi bi-check-circle' style='color:#0FAACD'></i> 
				      ".$sth['status']:"<i class='bi bi-x' style='color:#F00;'></i> ".$sth['status']?>
            </p>
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
    ?>

<?php
/********************************************************************************* */
/*FIND Childcares*/
/********************************************************************************* */
    if(isset($_REQUEST['find_childcare']))
    {
      $col=$_REQUEST['col'];
      $category=$_REQUEST['category'];
      $age=$_REQUEST['age'];
      $location=$_REQUEST['location'];
      $rowcount=$pdo->prepare("SELECT COUNT(*) FROM `facilities` WHERE `$col` = ? AND `typeoffacility`=? AND (`countycode`=? OR `location` LIKE ?) AND (`lowerage`<=? OR `upperage`>=?)");
      $rowcount->execute(["yes",$category,$location,"%$location%",$age,$age]);
      $rowcount=$rowcount->fetchColumn();
    ?>
    <?php
    if($rowcount==0)
		{
    ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/Untitled design (1).png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Search Results</h2>
            <p class="fst-italic">No childcare matches your search criteria</p>
          </div>
        </div>
      </div>
    </section>
    <?php
    include("footer.php");
    exit;
    }
    $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE `$col` = ? AND `typeoffacility`=? AND (`countycode`=? OR `location` LIKE ?) AND (`lowerage`<=? OR `upperage`>=?)");
    $sth->execute(["yes",$category,$location,"%$location%",$age,$age]);
      ?>
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div>
        
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Search Results (<?php print $rowcount ." Childcares Found"?>)</h3>
          <?php foreach($sth as $sth)
          {
            ?> 
            <div style="border: 1px solid #0FAACD;">
            <a href="facilities.php?action=view&item=<?php print $sth['facilityid']?>" style="text-decoration:none; color:#000">
            <h3><font color="#0FAACD"><?php print $sth['facilityname']?></font></h3>
            <p class="fst-italic">
              <?php print ($sth['status']=="Verified")?"<i class='bi bi-check-circle' style='color:#0FAACD'></i> 
				      ".$sth['status']:"<i class='bi bi-x' style='color:#F00;'></i> ".$sth['status']?>
            </p>
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
    ?>

<?php
/********************************************************************************* */
/*FIND Online Kids Sch*/
/********************************************************************************* */
    if(isset($_REQUEST['find_onlinekidsch']))
    {
      $category=$_REQUEST['category'];
      $age=$_REQUEST['age'];
      $rowcount=$pdo->prepare("SELECT COUNT(*) FROM `facilities` WHERE `typeoffacility`=? AND (`lowerage`<=? OR `upperage`>=?)");
      $rowcount->execute([$category,$age,$age]);
      $rowcount=$rowcount->fetchColumn();
    ?>
    <?php
    if($rowcount==0)
		{
    ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/Untitled design (1).png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Search Results</h2>
            <p class="fst-italic">No online school for kids matches your search criteria</p>
          </div>
        </div>
      </div>
    </section>
    <?php
    include("footer.php");
    exit;
    }
    $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE `typeoffacility`=? AND (`lowerage`<=? OR `upperage`>=?)");
    $sth->execute([$category,$age,$age]);
      ?>
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div>
        
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Search Results (<?php print $rowcount ." Online Kids Schools Found"?>)</h3>
          <?php foreach($sth as $sth)
          {
            ?> 
            <div style="border: 1px solid #0FAACD;">
            <a href="facilities.php?action=view&item=<?php print $sth['facilityid']?>" style="text-decoration:none; color:#000">
            <h3><font color="#0FAACD"><?php print $sth['facilityname']?></font></h3>
            <p class="fst-italic">
              <?php print ($sth['status']=="Verified")?"<i class='bi bi-check-circle' style='color:#0FAACD'></i> 
				      ".$sth['status']:"<i class='bi bi-x' style='color:#F00;'></i> ".$sth['status']?>
            </p>
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
    ?>

<?php
/********************************************************************************* */
/*FIND Special needs Sch*/
/********************************************************************************* */
    if(isset($_REQUEST['find_special']))
    {
      $col=$_REQUEST['col'];
      $category=$_REQUEST['category'];
      $age=$_REQUEST['age'];
      $location=$_REQUEST['location'];
      $rowcount=$pdo->prepare("SELECT COUNT(*) FROM `facilities` WHERE `$col` = ? AND `typeoffacility`=? AND (`countycode`=? OR `location` LIKE ?) AND (`lowerage`<=? OR `upperage`>=?)");
      $rowcount->execute(["yes",$category,$location,"%$location%",$age,$age]);
      $rowcount=$rowcount->fetchColumn();
    ?>
    <?php
    if($rowcount==0)
		{
    ?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/img1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2>Search Results</h2>
            <p class="fst-italic">No Special Needs Centre matches your search criteria</p>
          </div>
        </div>
      </div>
    </section>
    <?php
    include("footer.php");
    exit;
    }
      $sth=$pdo->prepare("SELECT * FROM `facilities` WHERE `$col` = ? AND `typeoffacility`=? AND (`countycode`=? OR `location` LIKE ?) AND (`lowerage`<=? OR `upperage`>=?)");
      $sth->execute(["yes",$category,$location,"%$location%",$age,$age]);
      ?>
      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div>
        
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Search Results (<?php print $rowcount ." Special Needs Centre Found"?>)</h3>
          <?php foreach($sth as $sth)
          {
            ?> 
            <div style="border: 1px solid #0FAACD;">
            <a href="facilities.php?action=view&item=<?php print $sth['facilityid']?>" style="text-decoration:none; color:#000">
            <h3><font color="#0FAACD"><?php print $sth['facilityname']?></font></h3>
            <p class="fst-italic">
              <?php print ($sth['status']=="Verified")?"<i class='bi bi-check-circle' style='color:#0FAACD'></i> 
				      ".$sth['status']:"<i class='bi bi-x' style='color:#F00;'></i> ".$sth['status']?>
            </p>
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
    ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>