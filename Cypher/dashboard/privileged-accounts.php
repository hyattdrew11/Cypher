<?php 
require_once('dashboard_fns.php');
session_start();
// CHECK IF SESSION IS ACTIVE TO KEEP MEMBERS PAGE ACTIVE
if(!empty($_SESSION['valid_user'])) {
do_html_header();
check_valid_user();?>
<h2>Priviledged Accts.<span style='float:right;'>Delete</span></h2>
<hr />
<?php
// get the bookmarks this user has saved
if ($pa_array = get_user_pa($_SESSION['valid_user'])) {
  display_user_pa($pa_array);
	}
display_pa_form();
do_html_footer();
}
else {
echo '<script>window.location = "login.php"</script>';
}
?>
