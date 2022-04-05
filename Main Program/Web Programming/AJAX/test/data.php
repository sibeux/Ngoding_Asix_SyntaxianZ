<?php

require_once 'db.php';

$sql = "SELECT * FROM mahasiswa";

$result =  $db->query($sql);

while ($row = $result->fetch_assoc()) {
    var_dump($row);
    echo "<br>";
}