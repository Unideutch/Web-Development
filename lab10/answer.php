<?php
    $email = trim(strip_tags($_POST["email"]));
    $name = trim(strip_tags($_POST["name"]));
    $work = trim(strip_tags($_POST["work"]));
    $f = @fopen($email . ".txt", "w");

    if ($f) 
    {
        $status = 200;
        $message = "";
        fwrite($f, $name . "\n");
        fwrite($f, $work);
        fclose($f);
    }
    else
    {
        $status = 500;
        $message = "АшиПка";
    }

    $data = json_encode(["status" => $status, "message" => $message]);
    echo $data;
?>