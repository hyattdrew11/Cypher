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
    echo '<p>You have not chosen any email addresses to delete.<br>
          Please try again.</p>';
    exit;
  } else {
    if (count($del_me) > 0) {
      foreach($del_me as $email) {
        if (delete_email($valid_user, $email)) {
          // echo 'Deleted '.htmlspecialchars($url).'.<br>';
          echo '<script>window.location = "../e-mail-addresses.php"</script>';
        } else {
          echo 'Could not delete '.htmlspecialchars($email).'.<br>';
        }
      }
    } else {
      echo 'No bookmarks selected for deletion';
    }
  }

  // display_user_menu();
transition_footer();
?>