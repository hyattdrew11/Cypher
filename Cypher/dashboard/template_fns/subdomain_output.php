<?php

function display_user_subdomains($subdomain_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $subdomain_table;
  $subdomain_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <form name="subdomain_table" action="form_scripts/delete_subdomain.php" method="post">
    <table class='service_table' cellspacing="0">
  <?php
  $color = "#cccccc";
  if ((is_array($subdomain_array)) && (count($subdomain_array) > 0)) {
    foreach ($subdomain_array as $subdomain)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr class='service_cell'><td><a style='text-align:left;' href=\"".$subdomain."\">".htmlspecialchars($subdomain)."</a></td>
            <td class='service_cell'><input style='float:right;' type=\"checkbox\" name=\"del_me[]\"
                value=\"".$subdomain."\"></td>
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

function list_user_subdomains($subdomain_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $subdomain_table;
  $subdomain_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <div class="dropdown">
    <button class="btn btn-services dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-sitemap' aria-hidden='true'></i> Sub-Domains<span class='services_icon'><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span></button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
  if ((is_array($subdomain_array)) && (count($subdomain_array) > 0)) {
      foreach ($subdomain_array as $subdomain)  {
      //remember to call htmlspecialchars() when we are displaying user data
    echo "<a class='dropdown-item' href=\"".$subdomain."\">".htmlspecialchars($subdomain)."</a>";
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

function display_subdomain_form() {
?>
  <form style="display:initial;" method="post" action="form_scripts/add-subdomain.php">
     <input style='width:250px;' type="url" name="new_subdomain" id="new_subdomain"  maxlength="100" value="http://" required />
    <br /><br />
    <button class='btn btn-info' type="submit">Add Sub-Domain</button>
    </form>

<?php
  // only offer the delete option if Domain table is on this page
  global $subdomain_table;
  if ($subdomain_table == true) {
    echo "<button class='btn btn-danger'<a href=\"#\" onClick=\"subdomain_table.submit();\">Delete Sub-Domain</a></button>";
  } else {
  }
}
?>