<?php
$heiti = $_POST["heiti"];
$linkur = $_POST["linkur"];

$url ="myndir.json";
$json = file_get_contents($url);
$row = json_decode($json,true);

$purple = "#800080";
$row["purple"] = $purple;

$jsonData = json_encode($row);
?>