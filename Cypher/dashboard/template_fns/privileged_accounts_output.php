<?php
function display_user_pa($pa_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $pa_table;
  $pa_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <form name="pa_table" action="form_scripts/delete_pa.php" method="post">
    <table class='service_table' cellspacing="0">
  <?php
  $color = "#cccccc";
  if ((is_array($pa_array)) && (count($pa_array) > 0)) {
    foreach ($pa_array as $pa)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr class='service_cell'><td><a style='text-align:left;' href=\"".$pa."\">".htmlspecialchars($pa)."</a></td>
            <td class='service_cell'><input style='float:right;' type=\"checkbox\" name=\"del_me[]\"
                value=\"".$pa."\"></td>
            </tr>";
    }
  } else {
    echo "<tr><td>No accounts on record</td></tr>";
  }
?>
    </table>
    </form>
  </div>
</div>
<?php
}
function list_user_pa($pa_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $pa_table;
  $pa_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <div class="dropdown">
    <button class="btn btn-services orange dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-briefcase' aria-hidden='true'></i> Priviledged Acct<span class='services_icon'><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span></button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
  if ((is_array($pa_array)) && (count($pa_array) > 0)) {
      foreach ($pa_array as $pa)  {
      //remember to call htmlspecialchars() when we are displaying user data
    echo "<a class='dropdown-item' href=\"".$pa."\">".htmlspecialchars($pa)."</a>";
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

function display_pa_form() {
?>
  <form style="display:initial;" method="post" action="form_scripts/add_account.php">
     <input style='width:250px;' type="text" name="new_pa" id="priviledgedAccount" maxlength="100" placeholder='Account Information' required />
    <br /><br />
    <button class='btn btn-info' type="submit">Add Account</button>
</form>
<?php
  // only offer the delete option if bookmark table is on this page
  global $pa_table;
  if ($pa_table == true) {
    echo "<button class='btn btn-danger'<a href=\"#\" onClick=\"pa_table.submit();\">Delete Account</a></button";
  } else {
    // echo "<span style=\"color: #cccccc\">Delete BM</span> &nbsp;|&nbsp;";
  }
}
?>