<?php

			$name = $_POST['subscriberName'];
			$email = $_POST['subscriberEmail'];
			$phone = $_POST['subscriberPhone'];
			$to = "test@ezyfx.la";
			$subject = "Subscriber Joined!";
			$headers = "From: $email\n";
			$message = "A new client has subscribed to the EZYFX Mailing list.\n
			Name: $name \n
			Email Address: $email \n
			Phone: $phone";
			$user = "$email";
			$usersubject = "Thank You";
			$userheaders = "From: mailer@ezyfx.la\n";
			$usermessage = "Thank you for signing up to get the free $100 USD. We will get back to you on how to receive this bonus.";
			mail($to,$subject,$message,$headers);
			mail($user,$usersubject,$usermessage,$userheaders);
			// $dialCode = $_POST['dial-code'];
//			$result = "<div class='alert alert-success alert-dismissable' style='color: #444;'>Thank you " . $name . " signing up to get the free $100 USD. We will get back to you on how to receive this bonus.</div>";

//	echo $result;
//	header("refresh:2; url=https://ezyfx.la");

			?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>THANK YOU FOR SIGNING UP | EZYFX PROMOTIONS</title>
		<link rel="icon" href="https://www.ezyfx.la/wp-content/themes/ezyfx/img/favicon.png" type="image/gif" sizes="16x16">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

		<!-- Bootstrap CSS -->
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- <div class="embed-responsive embed-responsive-16by9">
			<iframe src="//player.vimeo.com/video/22428395"></iframe>
		</div> -->
	</head>
	<body class="landingPage">
		<div class="container">
		  <div class="row">
		    <div class="col-md-12">
					<div class="intro-text2">
						<h1 class="text-center">Hurray, <?php echo $name; ?>! </h1>
					</div>

						<div class="embed-responsive embed-responsive-16by9 myVid">
						    <!-- <iframe class="embed-responsive-item" src="ezysocio1.mp4"></iframe> -->
								<video width="100%" max-width:"100%" height="100%" autoplay loop>
								  <source src="ezysocio2.mp4" type="video/mp4" />
								  Your browser does not support the video tag.
								</video>
						</div>
					
		    </div>

				<div class="col-md-12">
					<div class="intro-text2">
						<p class="bigTxt">We will contact you and guide you on how to get your USD 100 for <span class="special">FREE</span></p>

						<p class="spaced">
							We hope this USD 100 will be  beneficial to you. <span class="spacedText">Want to stay current with the latest investment trends?</span>
						</p>

						<a href="http://www.facebook.com/ezyfxlah" target="_blank" class="btn btn-lg btn-success">VISIT US NOW &rarr;</a>
					</div>
				</div>
		  </div>
		</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>
