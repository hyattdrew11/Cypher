<?php 
require_once('dashboard_fns.php');
session_start();
// CHECK IF SESSION IS ACTIVE TO KEEP MEMBERS PAGE ACTIVE
if(!empty($_SESSION['valid_user'])) {
do_html_header();
check_valid_user();?>
<h2>Propiretary Key Terms<span style='float:right;'>Delete</span></h2>
<hr />
<?php
// get the bookmarks this user has saved
if ($term_array = get_user_terms($_SESSION['valid_user'])) {
  display_user_terms($term_array);
	}
display_term_form();
do_html_footer();
}
else {
echo '<script>window.location = "key-terms.php"</script>';
}
?>
