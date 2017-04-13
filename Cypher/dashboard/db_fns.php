<?php

function db_connect() {
   $result = new mysqli('localhost', 'root', 'root', 'your-database');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
