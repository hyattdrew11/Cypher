<?php
 require_once('dashboard_fns.php');
$IP = $_SERVER["REMOTE_ADDR"];
$Attempts = 0;
$LastLogin = date('Y-m-d');
 // do_html_header('');
?>
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
check_attempts($IP);
?>