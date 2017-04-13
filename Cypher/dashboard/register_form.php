<?php
require_once('dashboard_fns.php');
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
#register-form-container {
	top:50px;
	display: block;
	width: 100%;
	height: 450px;
	position: relative;
	margin: 0 auto;
	box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
	padding: 20px;
}
#register-form-container a {
	text-decoration: none;
	color: darkgrey;
	font-size: .75em;
}
#register-form-container input {
	width: 100%;
	outline: none;
	border: 1px solid #a0a0a0;
	height: 40px;
	font-size: 1em;
	margin-bottom: 10px;
	padding: 5px;
}
#resigter-img-header {
	height: 50px;
    margin: 0 auto;
    display: block;
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
.fa {
  font-size: .75em;
  color: darkgrey;
}
.register-link {
  display: inline-block;
  color: darygrey;
  float: left;
  position: relative;
}
@media screen and (max-width: 414px) {
  #register-form-container {
    top: 150px;
  }
}
@media screen and (max-width: 375px) {
  #register-form-container {
    top: 75px;
  }
}
@media screen and (max-width: 320px) {
  #register-form-container {
    top: 30px;
  }
}
</style>
<?php
 display_registration_form();

?>