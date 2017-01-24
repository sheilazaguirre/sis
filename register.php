<?php
	# write your comment here
	// write your comment here
	/*
	write your comment here
	*/
	$studentNo = "";
	$lastName = "";
	$firstName = "";
	$emailAddress = "";
	$password = "";
	$birthDate = null;


?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Student Registration</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<html lang="en">
<head>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <meta charset="utf-8">
    <title>Flat Login</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>

    <div class="container">
        <div class="flat-form">
            <ul class="tabs">
                <li>
                    <a href="#register" class="active">Register</a>
                </li>
                <li>
                    <a href="#login" class="active">Login</a>
                </li>
            </ul>
            <div id="register" class="form-action show">
                <h1>SIGN UP</h1>
                <form method="POST" action="welcome.php"
                  class="form-horizontal">
                    <ul>
                        <li>
                            <input type="text" name="sid" placeholder="Student ID" required/>
                        </li>
                        <li>
                            <input type="text" name="ln" placeholder="Last Name" required/>
                        </li>
                        <li>
                            <input type="text" name="fn" placeholder="First Name" required/>
                        </li>
                        <li>
                            <input type="text" name="email" placeholder="Email Address" required/>

                        </li>
                        <li>
                            <input type="password" name="pwd" placeholder="Password" required/>
                        </li>
                        <label>
                          BirthDate: 
                        </label>
                            <input type="date" name="bday" placeholder="BirthDate" required /><hr/>

                        <button type="submit" name="register" class="button button-block" />REGISTER</button>
                    </ul>
                </form>
            </div>

            <div id="login" class="form-action hide">
                <h1>Login on webapp</h1>
                <form>
                    <ul>
                        <li>
                            <input type="text" placeholder="Username" />
                        </li>
                        <li>
                            <input type="password" placeholder="Password" />
                        </li>
                        <li>
                            <input type="submit" value="Login" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>
</html>
  
    <script src="js/index.js"></script>

</body>
</html>