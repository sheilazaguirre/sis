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
		<section id="header" class="appear">
			<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 	<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="fa fa-bars color-white"></span>
						</button>
						<h1><a class="navbar-brand" href="welcome.php" data-0="line-height:90px;" data-300="line-height:50px;">			HOME
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
		</section>
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

		<section id="section-studentinfo" class="section appear clearfix">
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
	<!--<body style="height:100%">
		<div class="container">
			<div style="height:100vh; display: flex;justify-content: center;align-items: center;">
				<div class="jumbotron" style="text-align:center">
					<h1>Welcome, <?=$lastName?> <?=$firstName?>! </h1>
					<div class="row">
						<div class="col-xs-6" style="text-align:left; font-size:120%">
							<?=$studentNo?><br/>
							<?=$emailAddress?><br/>
							<?=$password?><br/>
							<?=$birthDate?><br/>
							<?=date('c')?><br/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>-->
</html>