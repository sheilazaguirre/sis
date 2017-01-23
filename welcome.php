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
		header('location: index.php');

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />

	</head>
	<body style="height:100%">
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
	</body>
</html>