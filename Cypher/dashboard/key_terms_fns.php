<?php
require_once('db_fns.php');
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

function add_term($new_term) {
  // Add new bookmark to the database
  $valid_user = $_SESSION['valid_user'];

  $conn = db_connect();

  // check not a repeat bookmark
  $result = $conn->query("select * from terms
                         where username='$valid_user'
                         and keyTerms='".$new_term."'");
  if ($result && ($result->num_rows>0)) {
    throw new Exception('<script>alert("Key term already exists.");window.location = "../key_terms.php";</script>');
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