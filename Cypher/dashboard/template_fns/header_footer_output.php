<?php

function do_html_header($title) {
  // print an HTML header
?>
<!doctype html>
<!--[if IE 8 ]><html class='ie ie8' lang='en'> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang='en' class='no-js'> <![endif]-->
<html lang='en'>
<head>
  <title></title>
  <meta charset='utf-8'>
   <link rel='icon' type='img/ico' href='img/core-img/favicon.ico'>
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
  <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='screen'>
  <link rel='stylesheet' href='css/bootstrap.min.css' type='text/css' media='screen'>
  <link id='dashboard_style' rel='stylesheet' href='css/dashboard-style.css' type='text/css' media='screen'>
  <link rel='stylesheet' href='css/media.css' type='text/css' media='screen'>
  <link rel="stylesheet" href="css/vex.css" />
  <link rel="stylesheet" href="css/vex-theme-os.css" />
  <script type='text/javascript' src='js/jquery-2.2.4.min.js'></script>
  <script type='text/javascript' src='js/bootstrap.min.js'></script>
  <script src='https://use.typekit.net/zbk0mix.js'></script>
  <script type='text/javascript' src='js/nav-toggle.js'></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/highcharts-more.js"></script>
  <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
  <script src='https://code.highcharts.com/css/highcharts.css'></script>
  <script src="js/highcharts.js"></script>
  <script src="js/vex.combined.min.js"></script>
  <script>vex.defaultOptions.className = 'vex-theme-os'</script>
  
  <!--<script type='text/javascript' src='jquery-3.1.0.min.js'></script> -->
  <!--[if IE 8]><script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script><![endif]-->
  <!--[if lt IE 9]><script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script><![endif]-->
</head>
<body>
  <div id='preloader'>
    <div class='circle'></div>
    <div class='circle1'></div>
  </div>
  <a id='goTop'><i class='fa fa-arrow-up'></i></a>
  <div id='container'>
    <nav class='navbar navbar-default'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <img id='brand_img' src='img/core-img/logo.png' />
        </div>
        <div class='nav_bar'>
          <ul id='navigation'>
            <li class='nav_list'>
              <i title='Click to open menu' id='nav_text_toggle' class='fa fa-bars list_icon' aria-hidden='true'></i>
              <a class='nav_text'>Mobile Navigation</a>
            </li>
            <li class='nav_list'>
              <a href='member.php'><i title='Dashboard' class='fa fa-desktop' aria-hidden='true'></i></a>
              <a class='nav_text' href='member.php'>Dashboard</a>
            </li>
            <li class='nav_list'>
              <a href='domains.php'><i title='Domains / Sub-Domains' class='fa fa-sitemap' aria-hidden='true'></i></a>
              <a class='nav_text' href='domains.php'>Domains / Sub-Domains</a>
            </li>

            <li class='nav_list'>
              <a href='e-mail-addresses.php'><i title='E-Mail Addresses' class='fa fa-envelope-o' aria-hidden='true'></i></a>
              <a class='nav_text' href='e-mail-addresses.php'>E-Mail Addresses</a>
            </li>

            <li class='nav_list'>
              <a href='privileged-accounts.php'><i title='Privileged Accounts' class='fa fa-briefcase' aria-hidden='true'></i></a>
              <a class='nav_text' href='privileged-accounts.php'>Privileged Accounts</a>
            </li>

            <li class='nav_list'>
              <a title='Proprietary Key Terms' href='key_terms.php'><i class='fa fa-key' aria-hidden='true'></i></a>
              <a class='nav_text' class='nav_text' href='key_terms.php'>Proprietary Key Terms</a>
            </li>

             <li class='nav_list'>
              <a title='My Account' title='My Accounts' href='my_account.php'><i class='fa fa-user' aria-hidden='true'></i></a>
              <a class='nav_text' class='nav_text' href='my_account.php'>My Account</a>
            </li>

            <li class='nav_list'>
              <a title='Logout' href='logout.php'><i class="fa fa-sign-out" aria-hidden="true"></i></a>
              <a class='nav_text' class='nav_text' href='logout.php'>Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div id='main-content' class='container-fluid'>
<?php
  if($title) {
    do_html_heading($title);
  }
}

function do_html_footer() {
  // print an HTML footer
?>
</div>
<div id='footer'></div>
<script>
  $(window).load(function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });
  </script>
  </body>
  </html>
<?php
}
?>