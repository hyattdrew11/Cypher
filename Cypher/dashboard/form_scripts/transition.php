<?php
function transition_header($title) {
  // print an HTML header
?>
<!doctype html>
<!--[if IE 8 ]><html class='ie ie8' lang='en'> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang='en' class='no-js'> <![endif]-->
<html lang='en'>
<head>
  <title></title>
  <meta charset='utf-8'>
  <link rel='icon' type='img/ico' href='../img/core-img/favicon.ico'>
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
  <link rel='stylesheet' href='../css/bootstrap.min.css' type='text/css' media='screen'>
  <link rel='stylesheet' href='../css/font-awesome.min.css' type='text/css' media='screen'>
  <link rel='stylesheet' href='../css/dashboard-style.css' type='text/css' media='screen'>
  <link rel='stylesheet' href='../css/media.css' type='text/css' media='screen'>
  <script type='text/javascript' src='../js/jquery-2.2.4.min.js'></script>
  <script type='text/javascript' src='../js/bootstrap.min.js'></script>
  
  <!--<script type='text/javascript' src='jquery-3.1.0.min.js'></script> -->
  <!--[if IE 8]><script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script><![endif]-->
  <!--[if lt IE 9]><script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script><![endif]-->
</head>
<body>
  <a id='goTop'><i class='fa fa-arrow-up'></i></a>
  <div id='container'>
    <nav class='navbar navbar-default'>
      <div class='container-fluid'>
        <div class='navbar-header'>
          <img style='display: inline-block;float: left;height: 35px;margin-top: 7px;margin-left: -5px;' src='../img/core-img/logo-blue.png' />
          <!-- <button style='float:right;' class='btn btn-success' type='button'><a href='logout.php'>logout</a> <i class='fa fa-caret-square-o-down' aria-hidden='true'></i></button> -->
        </div>
        <div class='nav_bar'>
          <ul id='navigation'>
            <li class='nav_list' style='border-top: 1px solid rgba(255, 255, 255, 0.14);'>
              <i id='mobile_nav_icon' title='Click to open menu' id='nav_text_toggle' class='fa fa-bars list_icon' aria-hidden='true'></i>
              <a class='nav_text'>Mobile Navigation</a>
            </li>
            <li class='nav_list'>
              <a href='../member.php'><i title='Dashboard' class='fa fa-desktop' aria-hidden='true'></i></a>
              <a class='nav_text' href='../member.php'>Dashboard</a>
            </li>
            <li class='nav_list'>
              <a href='../domains.php'><i title='Domains / Sub-Domains' class='fa fa-sitemap' aria-hidden='true'></i></a>
              <a class='nav_text' href='../domains.php'>Domains / Sub-Domains</a>
            </li>

            <li class='nav_list'>
              <a href='../e-mail-addresses.php'><i title='E-Mail Addresses' class='fa fa-envelope-o' aria-hidden='true'></i></a>
              <a class='nav_text' href='../e-mail-addresses.php'>E-Mail Addresses</a>
            </li>

            <li class='nav_list'>
              <a href='../privileged-accounts.php'><i title='Privileged Accounts' class='fa fa-briefcase' aria-hidden='true'></i></a>
              <a class='nav_text' href='../privileged-accounts.php'>Privileged Accounts</a>
            </li>

            <li class='nav_list'>
              <a title='Proprietary Key Terms' href='../key_terms.php'><i class='fa fa-key' aria-hidden='true'></i></a>
              <a class='nav_text' class='nav_text' href='../key_terms.php'>Proprietary Key Terms</a>
            </li>

             <li class='nav_list'>
              <a title='My Account' title='My Accounts' href='../my_account.php'><i class='fa fa-user' aria-hidden='true'></i></a>
              <a class='nav_text' class='nav_text' href='../my_account.php'>My Account</a>
            </li>

            <li class='nav_list'>
              <a title='Logout' href='../logout.php'><i class="fa fa-sign-out" aria-hidden="true"></i></a>
              <a class='nav_text' class='nav_text' href='../logout.php'>Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div id='main-content' class='container-fluid'>
  <div id='preloader'>
  <div class='circle'></div>
  <div class='circle1'></div>
  </div>
<?php
}
function transition_footer() {
  // print an HTML footer
?>
  </div>
  </body>
  </html>
<?php
}
?>