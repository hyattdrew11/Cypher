<?php

function display_user_urls($url_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $domain_table;
  $domain_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <form name="domain_table" action="form_scripts/delete_domain.php" method="post">
    <table class='service_table' cellspacing="0">
  <?php
  $color = "#cccccc";
  if ((is_array($url_array)) && (count($url_array) > 0)) {
    foreach ($url_array as $url)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr class='service_cell'><td><a style='text-align:left;' href=\"".$url."\">".htmlspecialchars($url)."</a></td>
            <td class='service_cell'><input style='float:right;' type=\"checkbox\" name=\"del_me[]\"
                value=\"".$url."\"></td>
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

function list_user_urls($url_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $domain_table;
  $domain_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <div class="dropdown">
    <button class="btn btn-services light_green  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-sitemap' aria-hidden='true'></i> Domains<span class='services_icon'><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span></button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
  if ((is_array($url_array)) && (count($url_array) > 0)) {
      foreach ($url_array as $url)  {
      //remember to call htmlspecialchars() when we are displaying user data
    echo "<a class='dropdown-item' href=\"".$url."\">".htmlspecialchars($url)."</a>";
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

function display_domain_form() {
?>
  <form style="display:initial;" method="post" action="form_scripts/add-domain.php">
     <input style='width:250px;' type="url" name="new_url" id="new_url"  maxlength="100" value="http://" required />
    <br /><br />
    <button class='btn btn-info' type="submit">Add Domain</button>
    </form>

<?php
  // only offer the delete option if Domain table is on this page
  global $domain_table;
  if ($domain_table == true) {
    echo "<button class='btn btn-danger'<a href=\"#\" onClick=\"domain_table.submit();\">Delete Domain</a></button>";
  } else {
  }
}
?>