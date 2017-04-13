<?php
function display_login_form() {
?>
  <div class='col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4'>
    <div id='login-form-container'>
    <form method='post' action='attempt-login.php'>

    <div class='formblock'>
      <img id='login-img-header' src='../../img/core-img/logo-blue.png' />
      <hr />

      <div class='input-container'>
        <input type='text' name='username' id='username' placeholder='username' required />
        <input type='password' name='passwd' id='passwd' placeholder='password' required />

        <button type='submit' class='btn'>Log In</button>
        <p class='register-link'><i class='fa fa-user' aria-hidden='true'></i> <a href='register_form.php'>User Registration</a></p>
        <p class='forgot-password'>&nbsp;&nbsp;<i class='fa fa-unlock-alt' aria-hidden='true'></i> <a href='forgot_form.php'>Reset Password</a></p>
      </div>
    </div>

   </form>
  </div>
</div>
<?php
}
function display_login_form_locked() {
?>
  <div class='col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4'>
    <div id='login-form-container'>
    <form>

    <div class='formblock'>
      <img id='login-img-header' src='../../img/core-img/logo-blue.png' />
      <hr />
      <p style='color:red;text-align:center;'>You have been locked out for 30 minutes due to 3 unsuccessful login attempts.</p>

      <div class='input-container'>
        <p class='register-link'><i class='fa fa-phone' aria-hidden='true'></i> <a href='tel:+19999999'>Call Support</a></p>
        <p class='register-link'>&nbsp;&nbsp;<i class='fa fa-envelope' aria-hidden='true'></i> <a href='mailto:info@caesura.com'>E-mail Support</a></p>
      </div>
    </div>

   </form>
  </div>
</div>
<?php
}



function display_registration_form() {
?>
<div class='col-md-4 col-md-offset-4'>
  <div id='register-form-container'>
   <form method='post' action='form_scripts/register_new.php'>

   <div class='formblock'>
     <img src='../../img/core-img/logo-blue.png' id='resigter-img-header' />
     <hr />
     <p style='color:darkgrey;text-align:center;'>New User Registration</p>

      <input type='email' name='email' placeholder='Email Address' id='email' 
        size='30' maxlength='100' required />

      <input type='text' name='username'  placeholder='username' id='username' 
        size='16' maxlength='16' required />

      <input type='password' name='passwd'  placeholder='password' id='passwd' 
        size='16' maxlength='16' required />

      <input type='password' name='passwd2'  placeholder='confirm password' id='passwd2' 
        size='16' maxlength='16' required />


      <button class='btn' type='submit'>Register</button>
       <p class='register-link'><i class='fa fa-user' aria-hidden='true'></i> <a href='login.php'>User Login</a></p>
        <p class='forgot-password'>&nbsp;&nbsp;<i class='fa fa-unlock-alt' aria-hidden='true'></i> <a href='forgot_form.php'>Reset Password</a></p>

     </div>

    </form>
  </div>
</div>
<?php
}

function display_password_form() {
  // display html change password form
?>
   <br>
   <form action='form_scripts/change_passwd.php' method='post'>

 <div class='formblock'>
    <h2>Change Password</h2>

    <p><label for='old_passwd'>Old Password:</label><br/>
    <input type='password' name='old_passwd' id='old_passwd' 
      size='16' maxlength='16' required /></p>

    <p><label for='passwd2'>New Password:</label><br/>
    <input type='password' name='new_passwd' id='new_passwd' 
      size='16' maxlength='16' required /></p>

    <p><label for='passwd2'>Repeat New Password:</label><br/>
    <input type='password' name='new_passwd2' id='new_passwd2' 
      size='16' maxlength='16' required /></p>


    <button type='submit'>Change Password</button>

   </div>
   <br>
<?php
}

function display_forgot_form() {
  // display HTML form to reset and email password
?>
<div class='col-md-4 col-md-offset-4'>
  <div id='register-form-container'>
    <form action='form_scripts/forgot_passwd.php' method='post'>
      <div class='formblock'>
        <img src='../../img/core-img/logo-blue.png' id='resigter-img-header' />
        <hr />
        <div class='input-container'>
          <p style='color:darkgrey;text-align:center;'>Reset Your Password</p>
          <input type='text' name='username' id='username' size='16' maxlength='16' placeholder='Enter Your Username' required /></p>
          <button class='btn' type='submit'>Change Password</button>
          <p class='register-link'><i class='fa fa-user' aria-hidden='true'></i> <a href='login.php'>User Login</a></p>
          <p class='register-link'>&nbsp;&nbsp;<i class='fa fa-user' aria-hidden='true'></i> <a href='register_form.php'>User Registration</a></p>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
}
?>