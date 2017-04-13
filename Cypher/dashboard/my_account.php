<?php 
require_once('dashboard_fns.php');
session_start();
// CHECK IF SESSION IS ACTIVE TO KEEP MEMBERS PAGE ACTIVE
if(!empty($_SESSION['valid_user'])) {
do_html_header();
check_valid_user();?>
<h2>Account Information | Basic Services</h2>
<hr />
<p style='color:#FFF;'>Please enter your information</p>
<div class="row">
  <form method='post' action='save_account_info.php'>
    <div class="col-sm-6 col-xs-12">
      <div class="form-group">
        <input class="form-control" id="firstName" name="firstName" placeholder="First Name" required="" type="text">
      </div>
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="form-group">
        <input class="form-control" id="lastName" name="lastName" placeholder="Last Name" required="" type="text">
      </div>
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="form-group">
        <input class="form-control" id="coporation" name="corporation" placeholder="Your Corporation" required="" type="text">
      </div>
    </div>
    <div class="col-sm-6 col-xs-12">
      <div class="form-group">
        <input class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Your Phone Number" required="" type="number">
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <textarea class="form-control" cols="30" id="address" name="address" placeholder="Your Address" required="" rows="5"></textarea>
      </div>
    </div>
    <div class="col-xs-12">
      <button class="btn btn-info" type="submit">Submit</button>
    </div>
  </form>
</div>
<?php

do_html_footer();
}
else {
echo '<script>window.location = "login.php"</script>';
}
?>
