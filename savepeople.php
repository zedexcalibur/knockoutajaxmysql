<?php
$json = $_GET['json'];
$array = json_decode($json,TRUE);
$conn = new mysqli("127.0.0.1", "root", "_g00dg3_l0rD", "staff");
$SQL = "DELETE FROM people";
$conn->query($SQL);
for ($i = 0; $i < count($array); $i++) {
    $SQL = 'INSERT INTO people (firstname,surname) VALUES ("' . $array[$i]["firstname"] . '","' . $array[$i]["surname"] . '");';
    $conn->query($SQL);
}
print json_encode($array);
?>