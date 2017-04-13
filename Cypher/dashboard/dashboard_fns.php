<?php
  // Include this file in all our files it contain all our functions and exceptions

  //  CONNECT TO OUR SQL DATABASE
  require_once('data_valid_fns.php'); 
  require_once('db_fns.php');

  // USER AUTHENTICATION FUNCTIONS
  require_once('user_auth_fns.php');

  // HTML INJECTION FUNCTIONS
  require_once('template_fns/domain_output.php');
  require_once('template_fns/subdomain_output.php');
  require_once('template_fns/TSdomain_output.php');
  require_once('template_fns/email_output.php');
  require_once('template_fns/header_footer_output.php');
  require_once('template_fns/key_terms_output.php');
  require_once('template_fns/privileged_accounts_output.php');
  require_once('template_fns/registration_output.php');

   // ADD-REMOVE-CHECK FOR DUPLICATIES IN DATA TABLES
  require_once('domain_fns.php');
  require_once('email_fns.php');
  require_once('key_terms_fns.php');
  require_once('pa_fns.php');
?>