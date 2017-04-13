<?php
require_once('db_fns.php');
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

function add_pa($new_pa) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from priviledgedAccounts
                         where username='$valid_user'
                         and accounts='".$new_pa."'");
  if ($result && ($result->num_rows>0)) {
    throw new Exception('<script>alert("Account already exists.");window.location = "../privileged-accounts.php";</script>');
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
?>