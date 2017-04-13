<?php

// include function files for this application
require_once('dashboard_fns.php');
session_start();
// CHECK IF SESSION IS ACTIVE TO KEEP MEMBERS PAGE ACTIVE
if(!empty($_SESSION['valid_user'])) {
  do_html_header();
check_valid_user();
?>
<h2>Dashboard<span style='float:right;'><button style='background-color:transparent;border:none;height:30px;padding:0pc;margin-top:-5px;' type="button" data-toggle="modal" data-target="#helpModal"><i style='color:#50abde;' class="fa fa-question-circle fa-lg" aria-hidden="true"></i></button></span></h2>
<hr />
<div id="activity" style="width: 100%; height: 350px; margin: 0 auto"></div>
<hr style='margin-top:15px;' />
<!-- Modal -->
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
          <li><a href='member.php'><i style='color:#2357ab;' class='fa fa-desktop fa-2x' aria-hidden='true'></i><br />Dashboard</a></li>
          <li><a href='domains.php'><i style='color: #7daf42;' class='fa fa-sitemap fa-2x' aria-hidden='true'></i><br />Domains</a></li>
          <li><a href='e-mail-addresses.php'><i style='color:#6d6d6d;' class='fa fa-envelope-o fa-2x' aria-hidden='true'></i><br />Email Accts.</a></li>
        </ul>
        <br />
        <ul class='help_list'>
          <li><a href='privileged-accounts.php'><i style='color:#ffa500;' class='fa fa-briefcase fa-2x' aria-hidden='true'></i><br />Accounts</a></li>
          <li><a href='key_terms.php'><i style='color:#50abde;' class='fa fa-key fa-2x' aria-hidden='true'></i><br />Key Terms</a></li>
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
<?php
  if ($url_array = get_user_urls($_SESSION['valid_user'])) {
       list_user_urls($url_array);
     }
  if ($subdomain_array = get_user_subdomains($_SESSION['valid_user'])) {
       list_user_subdomains($subdomain_array);
     }
  if ($TSdomain_array = get_user_TSdomains($_SESSION['valid_user'])) {
    list_user_TSdomains($TSdomain_array);
     }
  if ($email_array = get_user_emails($_SESSION['valid_user'])) {
    list_user_emails($email_array);
     }
  if ($pa_array = get_user_pa($_SESSION['valid_user'])) {
    list_user_pa($pa_array); 
     }
  if ($term_array = get_user_terms($_SESSION['valid_user'])) {
  list_user_terms($term_array);  
     }
do_html_footer();
}
else {
  echo '<script>window.location = "login.php"</script>';
}
?>
