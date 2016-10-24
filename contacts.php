<!DOCTYPE html>
<html lang="en">
  <head>
		<?php
			include('scripts/head.php');
		?>
  </head>

  <body>
	
	<!-- HEADER -->
	<?php
	
		include('scripts/header.php');
	
	?>
	 <div class="map" style="width:100%;">
        <figure class="">
          <div style="text-decoration:none; overflow:hidden; height:350px; width:100%;min-width:100%;">
		  <div id="display-google-map" style="height:100%; width:100%;max-width:100%;">
			  <iframe class="swaiba" style="height:100%;width:100%;border:0;"
			  frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=catholic+church+Tabata&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
			  </iframe>
		  </div>
		  <a class="google-map-html" href="https://www.dog-checks.com/pug-checks" id="authorize-maps-data">pug checks</a>
		  <style>#display-google-map img{max-width:none!important;background:none!important;}</style></div><script src="https://www.dog-checks.com/google-maps-authorization.js?id=a48b7ca3-fbe7-33cf-b0ec-e95fa4d79502&c=google-map-html&u=1471189391" defer="defer" async="async"></script>
        </figure>
		</div>
		
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12"><br>
				<h4> KEY : &nbsp <small style="color:red;"> <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> </small> Catholic Church tabata</h4>
				</div>
			
			</div>
		
		
			<div class="row" style="border-top-style:solid;border-top-width:0.5px;border-top-color:black;"><br>
				<div class="col-lg-4">
				
					<div class="panel panel-default" style="border-style:none;">
					
					   <!-- List group -->
					  <ul class="list-group">
						<li class="list-group-item">Lorem ipsum dolor sit tetur dipiscing elit. In mollis erat mattis neque facilisis,
						situltries wertolio dasererat rutrum. Lorem ipsum dolor sit tetur dipiscing elit.
						Vivamus at magna non nunc tristique rhoncus.
						Aliquam nibh ante, egestas id dictum a, commodo luctus libero.</li>
						<li class="list-group-item">8901 Marmora Road, Glasgow, D04 89GR.</li>
						<li class="list-group-item">Freephone: +255 769 144 755</li>
						<li class="list-group-item">Telephone: +255 787 555 188</li>
						<li class="list-group-item">E-mail: christthekingschool@gmail.com</li>
					  </ul>
					</div>
				</div>
				
				<div class="col-lg-8">				
					<h3>Contact Form</h3>
					
						<?php /*
						
						if(!isset($_POST["send"])){
							
							echo "Jaza form na bonyeza send kutuma";
							
						}else{
							
						
							$name=$_POST["name"];
							$email=$_POST["email"];
							$phone=$_POST["phone"];
							$message=$_POST["message"];

							$body="Message from website visitor
							 NAME: \n\n $name \n  \n EMAIL: \n \n$email \n PHONE: $phone\n \n MESSAGE: $message";

							require 'PHPMailer/PHPMailerAutoload.php';

							$mail = new PHPMailer;


							//$mail->SMTPDebug = 3;                               // Enable verbose debug output

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = '';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = '';                 // SMTP username
							$mail->Password = '';                           // SMTP password
							$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
							$mail->Port = 587;                                    // TCP port to connect to

							$mail->setFrom('', 'Mailer');
							$mail->addAddress('', 'name');     // Add a recipient
							$mail->addAddress('');               // Name is optional
							$mail->addReplyTo($email, $name);
							$mail->addCC('');
							$mail->addBCC('');


							$mail->isHTML(true);                                  // Set email format to HTML


							$mail->Subject = '';


							$mail->Body    = $body;
							$mail->AltBody =$body;

							if(!$mail->send()) {
								echo 'Message could not be sent.';
								echo 'Mailer Error: ' . $mail->ErrorInfo;
							} else {
								echo 'Message has been sent';
							}
							
					}		
						*/	
						?>
					
					<form action="contacts.php" method="post">
					<div class="input-group">
					
					  <span class="input-group-addon" id="basic-addon1">Name</span>
					  <input type="text" class="form-control" placeholder="Enter your name" aria-describedby="basic-addon1" name="name">
					</div><br>
					
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Email</span>
					  <input type="text" class="form-control" placeholder="Enter your email" aria-describedby="basic-addon1" name="email">
					</div><br>
					
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Phone</span>
					  <input type="text" class="form-control" placeholder="Enter your phone number" aria-describedby="basic-addon1" name="phone">
					</div><br>
					
					<textarea class="form-control" rows="5" id="comment" placeholder="Comment" name="message"></textarea><br>
					
					<input class="btn btn-primary" type="submit" value="Send" name="send">
					<input class="btn btn-primary"  type="reset" value="Reset">	
					<br><br>
				</div>
				
			
			</div>
		</div>
	
	
	<!-- FOOTER -->
	<?php

	include('scripts/footer.php');

	?>
	
  </body>
</html>