<?php
require('connect.php');
//process message from main page
	if(isset($_POST['send_message']))
					{
						$name=$_POST['name'];
						$email=$_POST['email'];
						$message=$_POST['message'];
						//sanitize
						$email=filter_var($email,FILTER_SANITIZE_EMAIL);
						$email=filter_var($email,FILTER_VALIDATE_EMAIL);
						if(!$email)
						{
							?>
                            <script type="text/javascript">
							window.alert("You entered an invalid email address");
							window.location.href="../index.php";
							</script>
                            <?php
							exit;
						}
						
						//send email
						$message_body=wordwrap($message,70,"\r\n");
						mail('info@mkcdp.org',$name,$message_body,$email);
						$date=date("Y-m-d H:i:s");
						$message=[$name,$email,$message,$date];
						?>
                        <script type="text/javascript">
						window.alert("Your message has been recieved. We will contact you soon");
						window.location.href="../index.php";
						</script>
                        <?php
						
					}
					
?>