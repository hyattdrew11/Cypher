<?php
function display_user_emails($email_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $email_table;
  $email_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <form name="email_table" action="form_scripts/delete_email.php" method="post">
    <table class='service_table' cellspacing="0">
  <?php
  $color = "#cccccc";
  if ((is_array($email_array)) && (count($email_array) > 0)) {
    foreach ($email_array as $email)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr class='service_cell'><td><a style='text-align:left;' href=\"".$email."\">".htmlspecialchars($email)."</a></td>
            <td class='service_cell'><input style='float:right;' type=\"checkbox\" name=\"del_me[]\"
                value=\"".$email."\"></td>
            </tr>";
    }
  } else {
    echo "<tr><td>No bookmarks on record</td></tr>";
  }
?>
    </table>
    </form>
  </div>
</div>
<?php
}

function list_user_emails($email_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $email_table;
  $email_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <div class="dropdown">
    <button class="btn btn-services slategray dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-envelope-o' aria-hidden='true'></i> Email Addresses<span class='services_icon'><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span></button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
  if ((is_array($email_array)) && (count($email_array) > 0)) {
      foreach ($email_array as $email)  {
      //remember to call htmlspecialchars() when we are displaying user data
    echo "<a class='dropdown-item' href=\"".$email."\">".htmlspecialchars($email)."</a>";
    }
  }
  else {
    echo "<tr><td>No domains on record</td></tr>";
    }
?>
      </div>
    </div>
  </div>
</div>
<?php
}

function display_emailAddress_form() {
?>
  <form style="display:initial;" method="post" action="form_scripts/add-emailAddresses.php">
     <input style='width:250px;'type="email" name="new_email" id="emailAddress" maxlength="100" placeholder='example@email.com' required />
    <br /><br />
    <button class='btn btn-info' type="submit">Add email Address</button>
</form>
<?php
  // only offer the delete option if bookmark table is on this page
  global $email_table;
  if ($email_table == true) {
    echo "<button class='btn btn-danger'<a href=\"#\" onClick=\"email_table.submit();\">Delete email</a></button";
  } else {
    // echo "<span style=\"color: #cccccc\">Delete BM</span> &nbsp;|&nbsp;";
  }
}
?>