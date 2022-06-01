<?php
    $email = "foq";
    $name = "";
    $work = "";
    $email = trim(strip_tags($_POST["email"]));
    $name = trim(strip_tags($_POST["name"]));
    $work = trim(strip_tags($_POST["work"]));
    $f = fopen($email . ".txt", "w");
    fwrite($f, $name . "\n");
    fwrite($f, $work);
    fclose($f);
?>