<?php
function display_user_terms($term_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $term_table;
  $term_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <form name="term_table" action="form_scripts/delete_term.php" method="post">
    <table class='service_table' cellspacing="0">
  <?php
  $color = "#cccccc";
  if ((is_array($term_array)) && (count($term_array) > 0)) {
    foreach ($term_array as $term)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr class='service_cell'><td><a style='text-align:left;' href=\"".$term."\">".htmlspecialchars($term)."</a></td>
            <td class='service_cell'><input style='float:right;' type=\"checkbox\" name=\"del_me[]\"
                value=\"".$term."\"></td>
            </tr>";
    }
  } else {
    echo "<tr><td>No key terms on record</td></tr>";
  }
?>
    </table>
    </form>
  </div>
</div>
<?php
}

function list_user_terms($term_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $term_table;
  $term_table = true;
?>
<div class="row">
  <div class='col-md-12'>
    <div class="dropdown">
    <button class="btn btn-services brand_blue dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fa fa-key' aria-hidden='true'></i> Key Terms<span class='services_icon'><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></span></button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
  if ((is_array($term_array)) && (count($term_array) > 0)) {
      foreach ($term_array as $term)  {
      //remember to call htmlspecialchars() when we are displaying user data
    echo "<a class='dropdown-item' href=\"".$term."\">".htmlspecialchars($term)."</a>";
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

function display_term_form() {
?>
  <form style="display:initial;" method="post" action="form_scripts/add_term.php">
     <input style='width:250px;' type="text" name="new_term" id="keyTerms" maxlength="100" placeholder='Insert Key Term' required />
    <br /><br />
    <button class='btn btn-info' type="submit">Add Key Term</button>
</form>
<?php
  // only offer the delete option if bookmark table is on this page
  global $term_table;
  if ($term_table == true) {
    echo "<button class='btn btn-danger'<a href=\"#\" onClick=\"term_table.submit();\">Delete Key Term</a></button";
  } else {
    // echo "<span style=\"color: #cccccc\">Delete BM</span> &nbsp;|&nbsp;";
  }
}
?>