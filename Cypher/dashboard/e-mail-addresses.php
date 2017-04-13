<?php 
require_once('dashboard_fns.php');
session_start();
// CHECK IF SESSION IS ACTIVE TO KEEP MEMBERS PAGE ACTIVE
if(!empty($_SESSION['valid_user'])) {
do_html_header();
check_valid_user();?>
<h2>Email Addresses<span style='float:right;'>Delete</span></h2>
<hr />
<?php
// get the bookmarks this user has saved
if ($email_array = get_user_emails($_SESSION['valid_user'])) {
  display_user_emails($email_array);
	}
	display_emailAddress_form();
do_html_footer();

}
else {
echo '<script>window.location = "login.php"</script>';
}
?>
