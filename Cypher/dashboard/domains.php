<?php 
require_once('dashboard_fns.php');
session_start();
// CHECK IF SESSION IS ACTIVE TO KEEP MEMBERS PAGE ACTIVE
if(!empty($_SESSION['valid_user'])) {
	do_html_header();
	check_valid_user();
?>
	<h2>Domains<span style='float:right;'>Delete</span></h2>
	<hr />
<?php
// get the Domains this user has saved
	if ($url_array = get_user_urls($_SESSION['valid_user'])) {
	  		display_user_urls($url_array);
		}
// Display Domain Input Form
	display_domain_form();
?>
	<h2 class='services_header'>Sub-Domains<span style='float:right;'>Delete</span></h2>
	<hr />
<?php
// get the Sub-Domains this user has saved
	if ($subdomain_array = get_user_subdomains($_SESSION['valid_user'])) {
	  		display_user_subdomains($subdomain_array);
		}
// Display Sub-Domain Input Form
	display_subdomain_form();
?>
	<h2 class='services_header'>Typo Squatted Domains<span style='float:right;'>Delete</span></h2>
	<hr />
<?php
	if ($TSdomain_array = get_user_TSdomains($_SESSION['valid_user'])) {
	  		display_user_TSdomains($TSdomain_array);
		}
// Display Typo Squatted Input Form
	display_TSdomain_form();

// Display Standard Footer
	do_html_footer();
}

else {
	echo '<script>window.location = "login.php"</script>';
}
?>
