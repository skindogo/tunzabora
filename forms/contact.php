<?php
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  require "PHPMailerAutoload.php";
  require 'mailer/src/PHPMailer.php';
  require 'mailer/src/Exception.php';

  try
	{
	//send  email 
	$output='<p>You have a new message from '.$name.'</p>';
	$output.='<p>=========================================================================</p>';
	$output.='<p>Sender: '.$name.'</p>';
  	$output.='<p>Contact: '.$email.'</p>';
  	$output.='<p>Subject: '.$subject.'</p>';
 	$output.='<p><strong>Message</strong></p>';
  	$output.='<p>'.$message.'</p>';
	$body=$output;
	$subject=$subject;
		
	$mail=new PHPMailer();
	$mail->SMTPOptions=array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed'=>true));
	$mail->From="no-reply@umojafoundationkenya.org";
	$mail->addReplyTo("info@umojafoundationkenya.org");
	$mail->FromName=$name;
	$mail->addAddress("ajadfinancialconsultants@gmail.com","Ajad");
	$mail->isHTML(true);
	$mail->Subject=$subject;
	$mail->Body=$output;
	$mail->AltBody="Could not read the email content. Try logging in from a supported browser.";
	$mail->send();
	print "Your message has been sent. You'll receive a feedback in the shortest time possible";
	
	}
	catch(Exception $e)
	{
		$errMsg= "The server says: ". $mail->ErrorInfo;
	}

 
?>
