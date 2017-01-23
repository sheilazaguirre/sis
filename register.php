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
  			<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      		<link rel="stylesheet" href="css/style.css">
		</head>

		<body>
  			<div class="form">
      
      			<ul class="tab-group">
        			<li class="tab active"><a href="#signup">Sign Up</a></li>
        			<li class="tab"><a href="#login">Log In</a></li>
      			</ul>
      
      			<div class="tab-content">
        			<div id="signup">   
          				<h1>Student Registration</h1>
          
          				<form method="POST" action="welcome.php"
            			class="form-horizontal">
            				<div class="field-wrap">
              					<label>
                					Student ID <span class="req">*</span>
              					</label>
              					<input type="text" name="sid" required />
            				</div>

          					<div class="top-row">
            					<div class="field-wrap">
              						<label>
                						Last Name<span class="req">*</span>
              						</label>
              						<input type="text" name="ln" required />
            					</div>

            					<div class="field-wrap">
              						<label>
                						First Name<span class="req">*</span>
              						</label>
              						<input type="text" name="fn" required />
            					</div>
          					</div>

          					<div class="field-wrap">
            					<label>
              						Email Address<span class="req">*</span>
            					</label>
            					<input type="email" name="email" required />
          					</div>
          
          					<div class="field-wrap">
            					<label>
              						Password<span class="req">*</span>
            					</label>
            					<input type="password" name="pwd" required />
          					</div>

          					<div class="field-wrap">
            					<label>
              						Birhtdate<span class="req">*</span>
            					</label>
            					<input type="date" name="bday" required />
          					</div>
          
          					<button type="submit" name="register" class="button button-block"/>REGISTER</button>
          
          				</form>

        			</div>

        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>