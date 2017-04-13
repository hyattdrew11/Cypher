<?php
  require_once('../dashboard_fns.php');
  require_once('transition.php');
  session_start();
 transition_header();
  //create short variable names
  $del_me = $_POST['del_me'];
  $valid_user = $_SESSION['valid_user'];

  check_valid_user();

  if (!filled_out($_POST)) {
    echo '<p>You have not chosen any domains to delete.<br>
          Please try again.</p>';
    exit;
  } else {
    if (count($del_me) > 0) {
      foreach($del_me as $subdomain) {
        if (delete_subdomain($valid_user, $subdomain)) {
          echo '<script>window.location = "../domains.php"</script>';
        } else {
          echo 'Could not delete '.htmlspecialchars($subdomain).'.<br>';
        }
      }
    } else {
      echo 'No subdomains selected for deletion';
    }
  }
  transition_footer();
?>