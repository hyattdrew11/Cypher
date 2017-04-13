<?php
 require_once('../dashboard_fns.php');
 require_once('transition.php');
 session_start();
  transition_header();
  //create short variable name
  $new_pa = $_POST['new_pa'];

  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('Form not completely filled out.');
    }
    // try to add account
    add_pa($new_pa);
    echo '<script>window.location = "../privileged-accounts.php"</script>';

  }
  catch (Exception $e) {
    echo $e->getMessage();
  }
  transition_footer();
?>
