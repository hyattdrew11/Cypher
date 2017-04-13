<?php
 require_once('../dashboard_fns.php');
 require_once('transition.php');
 session_start();
  transition_header();
  //create short variable name
  $new_subdomain = $_POST['new_subdomain'];

  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('Form not completely filled out.');
    }
    // check URL format
    if (strstr($new_subdomain, 'http://') === false) {
       $new_subdomain = 'http://'.$new_subdomain;
    }
    // check URL is valid
    if (!(@fopen($new_subdomain, 'r'))) {
      throw new Exception('');
    }
    // try to add domain
    add_subdomain($new_subdomain);
    echo '<script>window.location = "../domains.php"</script>';

  }
  catch (Exception $e) {
    echo $e->getMessage();
    echo '<script>alert("Not a vaild subdomain");window.location = "../domains.php"</script>';
  }
  transition_footer();
?>
