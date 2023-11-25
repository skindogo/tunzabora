<?php
// ERROR REPORTING
error_reporting(E_ALL & ~E_NOTICE);
/*[CONFIGURATION]*/
$server='localhost';
$db_user='root';
$db='tunzabora';
$db_pass='';
$charset='utf8';
$con="mysql:host=$server;dbname=$db;charset=$charset";
$options=[
		  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
		  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
		  PDO::ATTR_EMULATE_PREPARES=>false,
		  ];
/*{CONNECT}*/

try
{
$pdo=new PDO($con,$db_user,$db_pass,$options);
}
catch(PDOExceptions $e)
{
throw new PDOException($e->getMessage(), (int)$e->getCode());
}
/*
require "PHPMailerAutoload.php";
require 'mailer/src/PHPMailer.php';
require 'mailer/src/Exception.php';
require "class.phpmailer.php";
*/
?>