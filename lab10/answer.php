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


    $valid = true;
    if ($valid) 
    {
        $status = 200;
        $message = "";
    }
    else
    {
        $status = 500;
        $message = "АшиПка";
    }

    $data = json_encode(["status" => $status, "message" => $message]);
    echo $data;
?>