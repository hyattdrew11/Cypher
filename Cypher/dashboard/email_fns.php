<?php
require_once('db_fns.php');
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

function add_email($new_email) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from emailAddresses
                         where username='$valid_user'
                         and email='".$new_email."'");
  if ($result && ($result->num_rows>0)) {
    throw new Exception('<script>alert("Email address already exists.");window.location = "../e-mail-addresses.php";</script>');
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
?>