<?php

// include function files for this application
require_once('dashboard_fns.php');
session_start();
$old_user = $_SESSION['valid_user'];

// store  to test if they *were* logged in
unset($_SESSION['valid_user']);
$result_dest = session_destroy();

// start output html
// do_html_header('Logging Out');

if (!empty($old_user)) {
  if ($result_dest)  {
    // if they were logged in and are now logged out
    // echo '<p class="logged-out">You have been logged out.<br></p>';
    // do_html_url('login.php', 'Login');
  } else {
   // they were logged in and could not be logged out
    // echo '<p class="logged-out">Could not log you out.<br></p>';
  }
} else {
  // if they weren't logged in but came to this page somehow
  // echo '<p class="logged-out">You were not logged in, please sign in below.<br></p>';
  // do_html_url('login.php', 'Login');
}
?>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="../../css/login-registration.css" type="text/css" media="screen">
<style>
@import url('https://fonts.googleapis.com/css?family=Arimo');
* {
font-family: 'Arimo', sans-serif;
}
#login-form-container {
  top:0px;
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
.logged-out {
  text-align: center;
  color: darkgrey;
  margin-top: 15px;
}
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
@media screen and (max-width: 750px) {
  #login-form-container {
    top: 350px;
  }
}
@media screen and (max-width: 414px) {
  #login-form-container {
    top: 150px;
  }
}
@media screen and (max-width: 320px) {
  #login-form-container {
    top: 30px;
  }
}
</style>
<?php

display_login_form();
do_html_footer();

?>
