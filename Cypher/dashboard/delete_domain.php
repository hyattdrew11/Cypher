<?php
echo '<script>console.log("1");</script>';
  require_once('dashboard_fns.php');
echo '<script>console.log("2");</script>';
  // require_once('transition.php');
echo '<script>console.log("3");</script>';
  session_start();
echo '<script>console.log("4");</script>';
 // transition_header();
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
      foreach($del_me as $url) {
        if (delete_domain($valid_user, $url)) {
          echo '<script>console.log("5");</script>';
          echo '<script>window.location = "domains.php"</script>';
        } else {
          echo 'Could not delete '.htmlspecialchars($url).'.<br>';
        }
      }
    } else {
      echo 'No domains selected for deletion';
    }
  }
  // transition_footer();
?>