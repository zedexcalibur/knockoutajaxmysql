<?php
$database = "staff";
$db_handle = mysql_connect("127.0.0.1", "root", "password");
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {
  $result = mysql_query("SELECT * FROM people");
  $array = array();
  while($db_field = mysql_fetch_assoc($result)){
      $array[] = $db_field;
  }
  mysql_close($db_handle);
}
print json_encode($array);
?>