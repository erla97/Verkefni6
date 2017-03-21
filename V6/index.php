<?php

$url ="myndir.json";
$json = file_get_contents($url);
// Breytum JSON streng í php assoiative array.
$row = json_decode($json,true);

?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Verkefni 6</title>

    <body>

    <form action="form.php">
        Myndheiti:<br>
        <input type="text" name="heiti">
        <br>
        Linkur:<br>
        <input type="text" name="linkur">
        <br><br>
        <input type="submit" value="Submit">
        <br><br><br>
    </form>

    <?php
        foreach ($row as $key => $value)
        {
            echo  $key . "<br><img src='" .  $value .  "' width = 300px></img><br>";
        }
    ?>

    </body>
    </html>

