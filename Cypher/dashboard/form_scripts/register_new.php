<?php
  // include function files for this application
  require_once('../dashboard_fns.php');
  require_once('transition.php');
  //create short variable names
  $email=$_POST['email'];
  $username=$_POST['username'];
  $passwd=$_POST['passwd'];
  $passwd2=$_POST['passwd2'];
  // start session which may be needed later
  // start it now because it must go before headers
  session_start();
  try   {
    // check forms filled in

    if (!filled_out($_POST)) {
      throw new Exception('You have not filled the form out correctly - please go back and try again.');
    }

    // email address not valid
    if (!valid_email($email)) {
      throw new Exception('That is not a valid email address.  Please go back and try again.');
    }

    // passwords not the same
    if ($passwd != $passwd2) {
      throw new Exception('The passwords you entered do not match - please go back and try again.');
    }

    // check password length is ok
    // ok if username truncates, but passwords will get
    // munged if they are too long.
    if ((strlen($passwd) < 6) || (strlen($passwd) > 16)) {
      throw new Exception('Your password must be between 6 and 16 characters. Please go back and try again.');
    }

    // attempt to register
    // this function can also throw an exception
    register($username, $email, $passwd);
    // register session variable
    $_SESSION['valid_user'] = $username;
transition_header();
?>
<h2>Registration Successful</h2>
<hr />
<p style="color:#FFF;">Your account has been verifed and created. Go to the dahboard page to start setting up your security services.</p><br />
<a href="../member.php" class="btn btn-info">Dashboard</a>
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Caesura User Guide</h4>
      </div>
      <div class="modal-body">
        <h3 style='text-align:center;'><strong>Get started</strong></h3>
        <hr />
        <p style='text-align:center;'>Use the icons below to navigate through the dashboard.</p>
        <br />
        <ul class='help_list'>
          <li><a href='../member.php'><i style='color:#2357ab;' class='fa fa-desktop fa-2x' aria-hidden='true'></i><br />Dashboard</a></li>
          <li><a href='../domains.php'><i style='color: #7daf42;' class='fa fa-sitemap fa-2x' aria-hidden='true'></i><br />Domains</a></li>
          <li><a href='../e-mail-addresses.php'><i style='color:#6d6d6d;' class='fa fa-envelope-o fa-2x' aria-hidden='true'></i><br />Email Adresses</a></li>
        </ul>
        <br />
        <ul class='help_list'>
          <li><a href='../privileged-accounts.php'><i style='color:#ffa500;' class='fa fa-briefcase fa-2x' aria-hidden='true'></i><br />Accounts</a></li>
          <li><a href='../key_terms.php'><i style='color:#50abde;' class='fa fa-key fa-2x' aria-hidden='true'></i><br />Key Terms</a></li>
          <li><a title='My Account' title='My Accounts' href='account.php'><i style='color:red;' class='fa fa-user fa-2x' aria-hidden='true'></i><br />Settings</a></li>
        </ul> 
        <hr />
         <p style='text-align:center;'>You have successfully registered and paid for Caesura Digital Security Services. Use the navigaiton bar on the left hand side to or the icons above to begin inputting your Domains, Sub-Domains, Typo-Squatted Domains, Email addresses, Priviledged Accounts, and Propritary Key Terms. You can also update your account settings and contact information. Our security team recieves this information in real time we begin our discovery proccess instantly, updating you with alerts, real-time analitics, e-mail, and text messages.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(window).load(function(){
        $('#helpModal').modal('show');
    });
    $(window).load(function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });
</script>
<?php
  transition_footer();
  }
  catch (Exception $e) {
     do_html_header('Problem:');
     echo $e->getMessage();
     do_html_footer();
     exit;
  }
?>
