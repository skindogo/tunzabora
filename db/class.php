<?php
// ERROR REPORTING
require "connect.php";
$contacts=$pdo->query("SELECT * FROM `contacts`")->fetch();
//$mission=$pdo->query("SELECT * FROM `mission`");
?>