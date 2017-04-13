<?php

function filled_out($form_vars) {

  // test that each variable has a value
  foreach ($form_vars as $key => $value) {
     if ((!isset($key)) || ($value == '')) {
        return false;
     }
  }
  return true;
}

function valid_email($address) {
  // check an email address is possibly valid
  if (preg_match('/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $address)) {
    return true;
  } else {
    return false;
  }
}

function check_attempts($IP) {
  // echo $IP;
   $conn = db_connect();
        $result = $conn->query("select Attempts from LoginAttempts where IP='".$IP."'");
        $data = mysqli_fetch_assoc($result);
    if ($data['Attempts'] >= 3) {
      display_login_form_locked();
    }
    else {
      display_login_form();
    }
}


?>
