<?php
 require_once('../dashboard_fns.php');
 require_once('transition.php');
 session_start();
  transition_header();

  //create short variable name
  $new_email = $_POST['new_email'];

  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('Form not completely filled out.');
    }

    // try to add email
    add_email($new_email);
    echo '<script>window.location = "../e-mail-addresses.php"</script>';
  }
  catch (Exception $e) {
    echo $e->getMessage();
  }
  transition_footer();
?>
