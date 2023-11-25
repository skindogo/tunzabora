<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Tunza Bora</h4>
            <p>
              <?php print $contacts['address']?><br>
              <strong>Phone:</strong> <?php print $contacts['phone1']?><br>
              <strong>Email:</strong> <?php print $contacts['email1']?><br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="./">Home</a></li>-->
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="resources.php">Resources</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="qualitystandards.php">Quality Service Standards</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy Policy</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to be the first to receive our newsletters and resources as soon as they are uploaded</p>
            <form action="forms/subscribe.php" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span><?php print date('Y')?> Tunza Bora</span></strong>. All Rights Reserved
          &nbsp;&nbsp;&nbsp;&nbsp;Powered by <a href="#">Elvan Twins Enterprises</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="<?php print $contacts['twitter']?>" class="twitter" target="blank"><i class="bx bxl-twitter"></i></a>
        <a href="<?php print $contacts['facebook']?>" class="facebook" target="blank"><i class="bx bxl-facebook"></i></a>
        <a href="<?php print $contacts['instagram']?>" class="instagram" target="blank"><i class="bx bxl-instagram"></i></a>
        <a href="<?php print $contacts['linkedin']?>" class="linkedin" target="blank"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>