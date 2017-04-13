<?php
require_once('db_fns.php');
function get_user_urls($username) {
  //extract from the database all the URLs this user has stored

  $conn = db_connect();
  $result = $conn->query("select domain
                          from domains
                          where username = '".$username."'");
  if (!$result) {
    return false;
  }

  //create an array of the URLs
  $url_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $url_array[$count] = $row[0];
  }
  return $url_array;
}
function add_domain($new_url) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat domain
  $result = $conn->query("select * from domains
                         where username='$valid_user'
                         and domain='".$new_url."'");
  $regulate = $conn->query("select *
                          from domains
                          where username = '".$valid_user."'");
  $domain_number = mysqli_fetch_array($regulate);
  if ($domain_number->num_rows>0 ) {
    throw new Exception('<script>alert("Domain limit reached.");window.location = "../domains.php";</script>');
  }

  if ($result && ($result->num_rows>0) ) {
    throw new Exception('<script>alert("Domain already exists.");window.location = "../domains.php";</script>');
  }
  // insert the new domain
  if (!$conn->query("insert into domains values
     ('".$valid_user."', '".$new_url."')")) {
    throw new Exception('Domain could not be inserted.');
  } 
  return true;
}
function delete_domain($user, $url) {
  // delete one URL from the database
  $conn = db_connect();

  // delete the bookmark
  if (!$conn->query("delete from domains where
                     username='".$user."' 
                    and domain='".$url."'")) {
     throw new Exception('Domain could not be deleted');
  }
  return true;
}

// Subdomain Functtions

function get_user_subdomains($username) {
  //extract from the database all the URLs this user has stored

  $conn = db_connect();
  $result = $conn->query("select subdomain
                          from subdomains
                          where username = '".$username."'");
  if (!$result) {
    return false;
  }

  //create an array of the URLs
  $subdomain_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $subdomain_array[$count] = $row[0];
  }
  return $subdomain_array;
}
function add_subdomain($new_subdomain) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from subdomains
                         where username='$valid_user'
                         and subdomain='".$new_subdomain."'");

  if ($result && ($result->num_rows>0) ) {
    throw new Exception('<script>alert("Subdomain already exists.");window.location = "../domains.php";</script>');
  }
  // insert the new domain
  if (!$conn->query("insert into subdomains values
     ('".$valid_user."', '".$new_subdomain."')")) {
    throw new Exception('Subdomain could not be inserted.');
  } 
  return true;
}
function delete_subdomain($user, $subdomain) {
  // delete one URL from the database
  $conn = db_connect();

  // delete the bookmark
  if (!$conn->query("delete from subdomains where
                     username='".$user."' 
                    and subdomain='".$subdomain."'")) {
     throw new Exception('Subdomain could not be deleted');
  }
  return true;
} 

function get_user_TSdomains($username) {
  //extract from the database all the URLs this user has stored

  $conn = db_connect();
  $result = $conn->query("select TSdomain
                          from TSdomains
                          where username = '".$username."'");
  if (!$result) {
    return false;
  }

  //create an array of the URLs
  $TSdomain_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $TSdomain_array[$count] = $row[0];
  }
  return $TSdomain_array;
}
function add_TSdomain($new_TSdomain) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from TSdomains
                         where username='$valid_user'
                         and TSdomain='".$new_TSdomain."'");

  if ($result && ($result->num_rows>0) ) {
    throw new Exception('<script>alert("Domain already exists.");window.location = "../domains.php";</script>');
  }
  // insert the new domain
  if (!$conn->query("insert into TSdomains values
     ('".$valid_user."', '".$new_TSdomain."')")) {
    throw new Exception('Domain could not be inserted.');
  } 
  return true;
}
function delete_TSdomain($user, $TSdomain) {
  // delete one URL from the database
  $conn = db_connect();

  // delete the bookmark
  if (!$conn->query("delete from TSdomains where
                     username='".$user."' 
                    and TSdomain='".$TSdomain."'")) {
     throw new Exception('Domain could not be deleted');
  }
  return true;
} 
?>