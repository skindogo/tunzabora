<?php
require_once("../db/class.php");
  $email=$_POST['email'];
  $subscribe=$pdo->prepare("INSERT INTO `subscribers` (`email`) VALUES(?)");
  $subscribe->execute([$email]);
  ?>
  <script type="text/javascript">
    window.alert("You have subscribed to receive our newsletter");
    window.location.href="../index.php">
    </script>
    
