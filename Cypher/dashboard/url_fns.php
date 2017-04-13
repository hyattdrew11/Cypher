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



function get_user_emails($username) {
  //extract from the database all the URLs this user has stored

  $conn = db_connect();
  $result = $conn->query("select email
                          from emailAddresses
                          where username = '".$username."'");
  if (!$result) {
    return false;
  }

  //create an array of the URLs
  $email_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $email_array[$count] = $row[0];
  }
  return $email_array;
}

function get_user_pa($username) {
  //extract from the database all the URLs this user has stored

  $conn = db_connect();
  $result = $conn->query("select accounts
                          from priviledgedAccounts
                          where username = '".$username."'");
  if (!$result) {
    return false;
  }

  //create an array of the URLs
  $pa_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $pa_array[$count] = $row[0];
  }
  return $pa_array;
}
function get_user_terms($username) {
  //extract from the database all the URLs this user has stored

  $conn = db_connect();
  $result = $conn->query("select keyTerms
                          from terms
                          where username = '".$username."'");
  if (!$result) {
    return false;
  }

  //create an array of the URLs
  $term_array = array();
  for ($count = 1; $row = $result->fetch_row(); ++$count) {
    $term_array[$count] = $row[0];
  }
  return $term_array;
}

function add_domain($new_url) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from domain
                         where username='$valid_user'
                         and domain='".$new_url."'");
  if ($result && ($result->num_rows>0)) {
    throw new Exception('Bookmark already exists.');
  }

  // insert the new bookmark
  if (!$conn->query("insert into domains values
     ('".$valid_user."', '".$new_url."')")) {
    throw new Exception('Bookmark could not be inserted.');
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
function add_email($new_email) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from email
                         where username='$valid_user'
                         and email='".$new_url."'");
  if ($result && ($result->num_rows>0)) {
    throw new Exception('Bookmark already exists.');
  }

  // insert the new email
  if (!$conn->query("insert into emailAddresses values
     ('".$valid_user."', '".$new_email."')")) {
    throw new Exception('Bookmark could not be inserted.');
  }

  return true;
}
function delete_email($user, $email) {
  // delete one URL from the database
  $conn = db_connect();

  // delete the bookmark
  if (!$conn->query("delete from emailAddresses where
                     username='".$user."' 
                    and email='".$email."'")) {
     throw new Exception('Domain could not be deleted');
  }
  return true;
}
function add_pa($new_pa) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from priviledgedAccounts
                         where username='$valid_user'
                         and accounts='".$new_pa."'");
  if ($result && ($result->num_rows>0)) {
    throw new Exception('Account already exists.');
  }

  // insert the new email
  if (!$conn->query("insert into priviledgedAccounts values
     ('".$valid_user."', '".$new_pa."')")) {
    throw new Exception('Account could not be inserted.');
  }

  return true;
}
function delete_pa($user, $pa) {
  // delete one URL from the database
  $conn = db_connect();

  // delete the bookmark
  if (!$conn->query("delete from priviledgedAccounts where
                     username='".$user."' 
                    and accounts='".$pa."'")) {
     throw new Exception('Account could not be deleted');
  }
  return true;
}
function add_term($new_term) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from terms
                         where username='$valid_user'
                         and keyTerms='".$new_term."'");
  if ($result && ($result->num_rows>0)) {
    throw new Exception('Key term already exists.');
  }

  // insert the new email
  if (!$conn->query("insert into terms values
     ('".$valid_user."', '".$new_term."')")) {
    throw new Exception('Key Term could not be inserted.');
  }

  return true;
}
function delete_term($user, $term) {
  // delete one URL from the database
  $conn = db_connect();

  // delete the bookmark
  if (!$conn->query("delete from terms where
                     username='".$user."' 
                    and keyTerms='".$term."'")) {
     throw new Exception('Account could not be deleted');
  }
  return true;
}


?>