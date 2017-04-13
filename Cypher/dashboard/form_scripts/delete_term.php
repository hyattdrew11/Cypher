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
    display_user_menu();
    do_html_footer();
    exit;
  } else {
    if (count($del_me) > 0) {
      foreach($del_me as $term) {
        if (delete_term($valid_user, $term)) {
          // echo 'Deleted '.htmlspecialchars($url).'.<br>';
          echo '<script>window.location = "../key_terms.php"</script>';
        } else {
          echo 'Could not delete '.htmlspecialchars($term).'.<br>';
        }
      }
    } else {
      echo 'No domains selected for deletion';
    }
  }
transition_footer();
?>