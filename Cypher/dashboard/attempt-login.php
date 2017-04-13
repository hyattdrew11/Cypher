<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">
<style>
@import url('https://fonts.googleapis.com/css?family=Arimo');
* {
font-family: 'Arimo', sans-serif;
}
#login-form-container {
  top:50px;
  display: block;
  width: 100%;
  height: 450px;
  position: relative;
  margin: 0 auto;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  padding: 20px;
}
#login-form-container a {
  text-decoration: none;
  color: darkgrey;
  font-size: .75em;
  cursor: pointer;
}
#login-form-container input {
  width: 100%;
  outline: none;
  border: 1px solid #a0a0a0;
  height: 40px;
  font-size: 1em;
  margin-bottom: 10px;
  padding: 5px;
}
#login-img-header {
  height: 50px;
    margin: 0 auto;
    display: block;
}
.input-container {
  margin-top: 150px;
}
.btn {
  outline: none;
    display: inline-block;
    width: 100%;
    border-radius: 0px;
    height: 30px;
    background-color: #50abde;
    border: none;
    color: #FFF;
}
.btn:active {opacity: .5;}
.register-link {
  display: inline-block;
  color: darygrey;
  float: left;
  position: relative;
}
.forgot-password {
   display: inline-block;
  color: darygrey;
  float: left;
  position: relative;
}
.fa {
  font-size: .75em;
  color: darkgrey;
}
@media screen and (max-width: 414px) {
  #login-form-container {
    top: 150px;
  }
}
@media screen and (max-width: 375px) {
  #login-form-container {
    top: 75px;
  }
}
@media screen and (max-width: 320px) {
  #login-form-container {
    top: 30px;
  }
}
</style>
<?php
$IP = $_SERVER["REMOTE_ADDR"];
$Attempts = 0;
$LastLogin = date('Y-m-d');
// include function files for this application
require_once('dashboard_fns.php');
session_start();
//create short variable names
if (!isset($_POST['username']))  {
  //if not isset -> set with dummy value 
  $_POST['username'] = " "; 
}
$username = $_POST['username'];
if (!isset($_POST['passwd']))  {
  //if not isset -> set with dummy value 
  $_POST['passwd'] = " "; 
}
$passwd = $_POST['passwd'];

if ($username && $passwd) {
// they have just tried logging in
  try  {
    login($username, $passwd);
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;
      echo '<script>window.location = "member.php"</script>';
  }
  catch(Exception $e)  {
    // unsuccessful login
    add_attempts($IP, $Attempts, $LastLogin);
    echo '<div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    <div id="login-form-container">
    <form method="post" action="form_scripts/attempt-login.php">

    <div class="formblock">
      <img id="login-img-header" src="../../img/core-img/logo-blue.png" />
      <hr />
       <p style="text-align:center;">We could not recognize these credentials. Please check your username and password and try again. After three unsucessful login attempts you will be locked out for 15 minutes.</p>
      <div class="input-container">
        <button class="btn"><a style="color:#FFF;font-size:14px;" href="login.php">Return to Login</a></button>
        <p class="register-link"><i class="fa fa-user" aria-hidden="true"></i> <a href="register_form.php">User Registration</a></p>
        <p class="forgot-password">&nbsp;&nbsp;<i class="fa fa-unlock-alt" aria-hidden="true"></i> <a href="forgot_form.php">Reset Password</a></p>
      </div>
    </div>

   </form>
  </div>
</div>';
    exit;
  }
}
?>