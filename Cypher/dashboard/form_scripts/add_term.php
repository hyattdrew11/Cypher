<?php
 require_once('../dashboard_fns.php');
 require_once('transition.php');
 session_start();
  transition_header();
  //create short variable name
  $new_term = $_POST['new_term'];

  try {
    check_valid_user();
    if (!filled_out($_POST)) {
      throw new Exception('Form not completely filled out.');
    }
    // try to add term
    add_term($new_term);
    echo '<script>window.location = "../key_terms.php"</script>';

  }
  catch (Exception $e) {
    echo $e->getMessage();
  }
transition_footer();
?>
