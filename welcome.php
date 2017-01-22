<?php
	if (isset($_POST['register'])) {
		$studentNo = $_POST['sid'];
		$lastName = $_POST['ln'];
		$firstName = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthDate = $_POST['bday'];

		echo "<b>Welcome, " . $lastName . " " . $firstName . "!</b><br/><br/>" . 
		"<b>Your ID number is: </b>" . $studentNo . "!</br>" . 
		"<b>Your Email Address is: </b>" . $emailAddress . "! </br>" .
		"<b>Your Password is: </b>". $password . "! </br>" .
		"<b>Your Birthday is: </b>". $birthDate . "! </br><br/>" . 
		"<b>The Time is: </b>" . date('c');

	} 
	else {
		header('location: register.php');

	}
?>