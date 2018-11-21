<?php include('login_code.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="dstyle.css">  
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label><b>Username</b></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label><b>Password</b></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user"><b>Login</b></button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php"><b>Sign up</b></a>
  	</p>
  </form>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <footer><center><font color ="grey" size="2">&copy; NewtonGrey Group (Pty)Ltd. (2014/226558/07)</font></center></footer>
</body>
</html>