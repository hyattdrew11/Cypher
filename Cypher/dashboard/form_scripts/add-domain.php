<?php
 require_once('../dashboard_fns.php');
 require_once('transition.php');
 session_start();
  transition_header();
  //create short variable name
  $new_url = $_POST['new_url'];

  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('Form not completely filled out.');
    }
    // check URL format
    if (strstr($new_url, 'http://') === false) {
       $new_url = 'http://'.$new_url;
    }
    // check URL is valid
    if (!(@fopen($new_url, 'r'))) {
      throw new Exception('');
    }
    // try to add domain
    add_domain($new_url);
    echo '<script>window.location = "../domains.php"</script>';

  }
  catch (Exception $e) {
    echo $e->getMessage();
    echo '<script>alert("Not a vaild url");window.location = "../domains.php"</script>';
  }
  transition_footer();
?>
