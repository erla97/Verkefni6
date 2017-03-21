<?php
$file = "myndir.json";

$json_array = json_decode($file, true);

$linkur = "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRYLPN0qrXUU-KfRDoPQG6_8YCiHavD2v8rSw9SMsPYKnT_7q36";
$json_array["Björn"] = $linkur;

$jsonData = json_encode($json_array);

echo $file;

?>