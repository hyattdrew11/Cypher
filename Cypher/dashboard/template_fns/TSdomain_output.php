<?php

function display_user_TSdomains($TSdomain_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $TSdomain_table;
  $TSdomain_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <form name="TSdomain_table" action="form_scripts/delete_TSdomain.php" method="post">
    <table class='service_table' cellspacing="0">
  <?php
  $color = "#cccccc";
  if ((is_array($TSdomain_array)) && (count($TSdomain_array) > 0)) {
    foreach ($TSdomain_array as $TSdomain)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr class='service_cell'><td><a style='text-align:left;' href=\"".$TSdomain."\">".htmlspecialchars($TSdomain)."</a></td>
            <td class='service_cell'><input style='float:right;' type=\"checkbox\" name=\"del_me[]\"
                value=\"".$TSdomain."\"></td>
            </tr>";
    }
  } else {
    echo "<tr><td>No domains on record</td></tr>";
  }
?>
    </table>
    </form>
  </div>
</div>
<?php
}

function list_user_TSdomains($TSdomain_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $TSdomain_table;
  $TSdomain_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <div class="dropdown">
    <button class="btn btn-services lt_brown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-sitemap' aria-hidden='true'></i> Typo Squatted Domains<span class='services_icon'><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span></button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
  if ((is_array($TSdomain_array)) && (count($TSdomain_array) > 0)) {
      foreach ($TSdomain_array as $TSdomain)  {
      //remember to call htmlspecialchars() when we are displaying user data
    echo "<a class='dropdown-item' href=\"".$TSdomain."\">".htmlspecialchars($TSdomain)."</a>";
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

function display_TSdomain_form() {
?>
  <form style="display:initial;" method="post" action="form_scripts/add-TSdomain.php">
     <input style='width:250px;' type="url" name="new_TSdomain" id="new_TSdomain"  maxlength="100" value="http://" required />
    <br /><br />
    <button class='btn btn-info' type="submit">Add Squatted Domain</button>
    </form>

<?php
  // only offer the delete option if Domain table is on this page
  global $TSdomain_table;
  if ($TSdomain_table == true) {
    echo "<button class='btn btn-danger'<a href=\"#\" onClick=\"TSdomain_table.submit();\">Delete Squatted Domain</a></button>";
  } else {
  }
}
?>