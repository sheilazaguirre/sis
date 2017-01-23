<?php
	if (isset($_POST['register'])) {
		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];
	} 
	else {
		header('location: register.php');

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Welcome</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="skin/default.css">

	</head>
	<body>
		<section id="section-header" class="appear"></section>
			<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 	<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="fa fa-bars color-white"></span>
						</button>
						<h1><a class="navbar-brand" href="#section-header" data-0="line-height:90px;" data-300="line-height:50px;">			HOME
						</a></h1>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
							<li><a href="#section-studentinfo">Student Information</a></li>
							<li><a href="#section-contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>

			<section class="featured">
				<div class="container"> 
					<div class="row mar-bot40">
						<div class="col-md-6 col-md-offset-3">
						
							<div class="align-center">
								<i class="fa fa-user fa-5x mar-bot20"></i>
								<h2 class="slogan">Welcome, <?=$lastName?> <?=$firstName?>! </h2>
								<p>
								Welcome to SIS (Student Information System)
								</p>	
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">				
						<div class="col-lg-12">
							<div class="align-center">
        						<div class="testimonial pad-top40 pad-bot40 clearfix">
        							<h5>
        								So, if you think you are standing firm, be careful that you don’t fall! No temptation has overtaken you except what is common to mankind. And God is faithful; he will not let you be tempted beyond what you can bear. But when you are tempted, he will also provide a way out so that you can endure it.
        							</h5>
        							<br/>
        							<span class="author">&mdash; 1 Corinthians 10:12-13</span>
        						</div>

							</div>
						</div>
				
					</div>	
				</div>	
			</section>

		<section id="section-studentinfo" class="section">
			<div class="container">

				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<i class="fa fa-info fa-3x mar-bot20"></i>
							<h2 class="section-heading animated" data-animation="bounceInUp">Student Information</h2>
						</div>
					</div>
				</div>

				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6"  style="text-align:left; font-size:120%;">
						<div class="well">
							Student ID: <?=$studentNo?><br/>
						</div>
						<div class="well">
							First Name: <?=$firstName?><br/>
						</div>
						<div class="well">
							Last Name: <?=$lastName?><br/>
						</div>
						<div class="well">
							Email Address: <?=$emailAddress?><br/>
						</div>
						<div class="well">
							BirthDate: <?=$birthDate?><br/>
						</div>
					</div>
				</div>
						
			</div>
		</section>

		<section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
			<div class="container">
            	<div class="align-center pad-top40 pad-bot40">
                	<blockquote class="bigquote color-white">“There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for.”</blockquote>
					<p class="color-white">-Milton Glaser</p>
            	</div>
			</div>	
		</section>

		<section id="section-contact" class="section appear clearfix">
			<div class="container">
				
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<i class="fa fa-phone fa-3x mar-bot20"></i>
							<h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
							<div id="sendmessage">
								 Your message has been sent. Thank you!
							</div>
                            <div id="errormessage"></div>
							<form action="" method="post" role="form" class="contactForm">
							  <div class="form-group">
								<label for="name">Your Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="email">Your Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="subject">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
								<div class="validation"></div>
							  </div>
							  
							  <button type="submit" class="btn btn-theme pull-left">SEND MESSAGE</button>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>
				
			</div>
		</section>

		<section id="footer" class="section footer">
			<div class="container">
				<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
					<div class="col-sm-12 align-center">
                    	<ul class="social-network social-circle">
                        	<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        	<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        	<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        	<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        	<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    	</ul>				
					</div>
				</div>

				<div class="row align-center copyright">
					<div class="col-sm-12"><p>Copyright &copy; Amoeba</p>
                    </div>
				</div>
			</div>

		</section>

	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/skrollr.min.js"></script>		
	<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.appear.js"></script>
    <script src="js/main.js"></script>
    <script src="contactform/contactform.js"></script>
    
	</body>
</html>