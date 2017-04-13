<?php
 require_once('../dashboard_fns.php');
 require_once('transition.php');
 session_start();
  transition_header();
  //create short variable name
  $new_TSdomain = $_POST['new_TSdomain'];

  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('Form not completely filled out.');
    }
    // check URL format
    if (strstr($new_TSdomain, 'http://') === false) {
       $new_TSdomain = 'http://'.$new_TSdomain;
    }
    // check URL is valid
    if (!(@fopen($new_TSdomain, 'r'))) {
      throw new Exception('');
    }
    // try to add domain
    add_TSdomain($new_TSdomain);
    echo '<script>window.location = "../domains.php"</script>';

  }
  catch (Exception $e) {
    echo $e->getMessage();
    echo '<script>alert("Not a vaild subdomain");window.location = "../domains.php"</script>';
  }
  transition_footer();
?>
