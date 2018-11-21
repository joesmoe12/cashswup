<?php include('register_code.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="dstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Sign Up</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label><b>Username</b></label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
      <div class="input-group">
  	  <label><b>First Name</b></label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
      <div class="input-group">
  	  <label><b>Last Name</b></label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div> 
  	<div class="input-group">
  	  <label><b>Email</b></label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label><b>Password</b></label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label><b>Confirm password</b></label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user"><b>Register</b></button>
  	</div>
  	<p>
  		Already a member? <a href="login.php"><b>Sign in</b></a>
  	</p>
  </form>
  
</body>
</html>