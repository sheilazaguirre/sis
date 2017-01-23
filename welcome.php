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
		<section id="header" class="appear"></section>
			<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="fa fa-bars color-white"></span>
						</button>
						<h1><a class="navbar-brand" href="wel.php" data-0="line-height:90px;" data-300="line-height:50px;">			HOME
						</a></h1>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
							<li><a href="#section-about">About</a></li>
							<li><a href="#section-works">Portfolio</a></li>
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