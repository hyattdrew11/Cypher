<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
 
     <h1>Member Area</h1>
     <p>Thanks for logging in! You are <code><?=$_SESSION['Username']?></code> and your email address is <code><?=$_SESSION['EmailAddress']?></code>.</p>
      
     <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
     
    $checklogin = mysql_query("SELECT * FROM Caesura-Data  WHERE Username = '".$username."' AND Password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
         
        $_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
         
          header('Location: dashboard.php');
            exit;
        echo "<script>console.log('Successful Login redirect to dashboard or new member form')</script>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
        echo "<script>console.log('Unknown Account')</script>";
    }
}
else
{
    ?>
     <div id="service_details_wrapper">
        <!-- Modal-box -->
        <div role="dialog" tabindex="-1" id="login-modal" class="modal fade in">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <!-- modal Head start -->
                    <div class="modal_head">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </div>
                    <!-- modal body start -->
                    <div class="modal_body">
                        <div class="modal-product">
                            <!-- Service Details Content Area -->
                            <div class="service_details_content">
                                <!-- Service Details Thumb -->
                                <div class="service_details_thumb">
                                    <img src="img/services-img/service-details.jpg" alt="">
                                </div>
                                <!-- Service Details Text Area -->
                                <div class="single_part_content">
                                   <h1>Member Login</h1>
     
                               <p>Please either login below, or <a href="register.php">click here to register</a>.</p>
                                 
                                <form method="post" action="login.php" name="loginform" id="loginform">
                                <fieldset>
                                    <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
                                    <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
                                    <input type="submit" name="login" id="login" value="Login" />
                                </fieldset>
                                </form>
                                </div>
                                <div class="service_data_dl">
                                    <p><sup>*</sup>New Users will be sent to services form after registering with Caesura.</p>
                                    <a href="dummy-data/worksheet.pdf" class="pdf_dl">Login</a>
                                    <a href="dummy-data/bizpro.doc" class="doc_dl" >Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
     
   <?php
}
?>