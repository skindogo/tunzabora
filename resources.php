<!-- =======================================================
  * Elvan Twins Enterprises
  ======================================================== -->
<?php require("db/class.php");?>
<?php $offices=$pdo->query("SELECT * FROM `childrenoffices`")?>
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
      <a href="./" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Daycare</span> <i class="bi bi-chevron-down"></i></a>
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
          <li><a href="resources.php" class="active">Resources</a></li>
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
        <h2>Tunza Bora Resources</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
              Tunza Bora offers a wide range of resources for our stakeholders to help guide in the care of our children to ensure children grow 
              in a conducive environment. These resources also include childcare policies to ensure compliance with government regulations.
            </p>
          
                <h4>1. Government Policies</h4>
                <h5>1.1 Constitution</h5>
                <p>The 2010 Constitution of Kenya (Article 53) recognise every child has the right --</p>
                <ol type="a">
                  <li>to a name and nationality from birth;</li>
                  <li>to free and compulsory basic education;</li>
                  <li>to basic nutrition, shelter and health care;</li>
                  <li>to be protected from abuse, neglect, harmful cultural practices, all forms of violence, inhuman treatment and punishment, and hazardous or exploitative labour;</li>
                  <li>to parental care and protection, which includes equal responsibility of the mother and father to provide for the child, whether they are married to each other or not; and</li>
                  <li>not to be detained, except as a measure of last resort, and when detained, to be held –
                      <ol type="i">
                        <li>for the shortest appropriate period of time; and</li>
                        <li>Separate from adults and in conditions that take account of the child’s sex and age.</li>
                      </ol>
                </ol>
              <p>A child’s best interests are of paramount importance in every matter concerning the child.</p>
              <p>Link <i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><a href="https://www.klrc.go.ke/index.php/constitution-of-kenya/113-chapter-four-the-bill-of-rights/part-3-specific-application-of-rights/219-53-children" target="_blank">
https://www.klrc.go.ke/index.php/constitution-of-kenya/113-chapter-four-the-bill-of-rights/part-3-specific-application-of-rights/219-53-children</a></p>

          <h5>1.2 Children’s Act</h5>
          <p>
            An Act of Parliament to give effect to Article 53 of the Constitution; to make provision for children rights, parental responsibility, alternative care of children including guardianship, foster care placement and adoption; to make provision for care and protection of children and children in conflict with the law; to make provision for, and regulate the administration of children services; to establish the National Council for Children’s Services and for connected purposes.
          </p>
          <p>Link <i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><a href="http://kenyalaw.org:8181/exist/kenyalex/actview.xql?actid=No.%2029%20of%202022" target="_blank">
          http://kenyalaw.org:8181/exist/kenyalex/actview.xql?actid=No.%2029%20of%202022</a></p>
      
          <h5>1.3	National Care Reform Strategy for Children in Kenya</h5>
          <p>
          Support family strengthening initiatives such as cash transfers and other prevention and response programmes to ensure that Children are not necessarily separated from their parents.
          </p>
          <p>Link <i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><a href="https://www.socialprotection.go.ke/wp-content/uploads/2022/06/The-National-Care-Reform-Strategy-for-Children-in-Kenya-2022-2032.pdf" target="_blank">
          https://www.socialprotection.go.ke/wp-content/uploads/2022/06/The-National-Care-Reform-Strategy-for-Children-in-Kenya-2022-2032.pdf</a></p>

          <h5>1.4	National Early Childhood Development Framework 2006</h5>
          <p>
          This document depicts an overarching comprehensive framework that will encompass sector policies for early childhood services and programs in Kenya for children from conception to eight years. It delineates the Early Childhood Development (ECD) policy system and provides a frame of reference for key sectors involved in the provision of services for infants and children.
          </p>
          <p>Link <i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><a href="https://planipolis.iiep.unesco.org/sites/default/files/ressources/kenyaecdpolicyframework.pdf" target="_blank">
          https://planipolis.iiep.unesco.org/sites/default/files/ressources/kenyaecdpolicyframework.pdf</a></p>

          <h4>2. County Level Resources</h4>
                <h5>2.1 Nairobi County Assembly Acts/Laws</h5>
                <p><strong>Nairobi City Childcare Facilities Act-2017</strong></p>
                <p>An act of the Nairobi city county assembly to provide for the registration of childcare facilities in the county and for connected purposes. <br>It contains;</p>
                <ol type="disc">
                  <li>Functions and powers of the department</li>
                  <li>Registration and licencing and assessment of childcare facilities</li>
                  <li>Management of childcare facilities</li>
                  <li>Miscellaneous provisions</li>
                </ol>
                <p>Link <i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><a href="https://nairobiassembly.go.ke/ncca/wp-content/uploads/acts/2017/The-Nairobi-City-County-Children-Facility-Act-2017.pdf" target="_blank">
                https://nairobiassembly.go.ke/ncca/wp-content/uploads/acts/2017/The-Nairobi-City-County-Children-Facility-Act-2017.pdf</a></p>

                <h5>2.2 Kisumu County ECD Bill/Law</h5>
          
          <h4>3. Researches and Publications</h4>
                <h5>3.1	OAY Tunza Bora Assessment</h5>
                <p>This baseline report consists of work, undertaken to determine the status of Young mother’s access to education and livelihood opportunities as well as access to affordable quality day care services.</p>

                <h5>3.2 Early Childhood Care and Development in Rural and Urban Settings in Kenya</h5>
                <p>The Early Childhood Development (ECD) research sub-unit under the Maternal and Child Wellbeing Research Unit at the African Population and Health Research Center (APHRC) seeks to optimize the health and wellbeing of children under the age of three while increasing opportunities for early learning.</p>
                <p>Link <i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><i class="bi bi-chevron-right"></i><a href="Policy-Brief-Early-Childhood-Care-and-Development-in-Rural-and ..." target="_blank">
                Policy-Brief-Early-Childhood-Care-and-Development-in-Rural-and ...</a></p>

          <h4>4.	Business Development Templates</h4>
                  <h5>4.1 Sample Contract for Staff</h5>
                  <h5>4.2 Sample Childcare Facility Policy</h5>
                  <h5>4.3 Sample Contract with Parent/Guardian</h5>
                  <h5>4.4 Sample Business Plan</h5>
          <br>
          <h4>5. Government Child Related Services/Offices</h4>
                  <table width="100%">
                    <tr>
                      <th>Name</th>
                      <th>County</th>
                      <th>Sub-County</th>
                      <th>Location</th>
                      <th>Map</th>
                    </tr>
                  <?php foreach($offices as $office){?>
                    <?php
                    $county=$pdo->prepare("SELECT * FROM `counties` WHERE `countycode`=?");
                    $county->execute([$office['countycode']]);
                    $county=$county->fetch();
                    $subcounty=$pdo->prepare("SELECT * FROM `subcounties` WHERE `subcountycode`=?");
                    $subcounty->execute([$office['subcountycode']]);
                    $subcounty=$subcounty->fetch();
                    ?>
                    <tr>
                      <td><?php print $office['name']?></td>
                      <td><?php print $county['county']?></td>
                      <td><?php print $subcounty['subcounty']?></td>
                      <td><?php print $office['location']?></td>
                      <td><a href="<?php print $office['map']?>" target="_blank"><?php print $office['map']?></a></td>
                    </tr>
                  <?php }?>
                </table>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php")?>