<?php

    $message = "0";
    //Write out all
    $dir = $_SERVER['DOCUMENT_ROOT'];
    $arrayAll = scandir($dir); //Массив всех файлов
    $j = 0;
    for ($i = 0; $i < count($arrayAll); $i++) //Ищем строки, содержащие '.txt'
    {
        if (strpos($arrayAll[$i], '.txt')) //Если находим, вписываем в значащее множество
        {
            $array[$j] = $arrayAll[$i];
            $j++;
        }
    }

    if ($array == [])        //Проверяем существование файлов регистрации
    {
        $message = "2";      //Message == 2 означает, что в директории нет файлов регистрации
        $data = json_encode(["message" => "2"]);
        echo $data;
        return;
    }

    //Формируем массивы с данными из файлов

    for ($i = 0; $i < count($array); $i++)
    {
        $file = fopen($array[$i], "r");
        $Email = str_replace(".txt", "", $array[$i]);
        $arrayEmails[$i] = $Email;
        $arrayNames[$i] = fgets($file);
        $arrayWorks[$i] = fgets($file);
    }
    $data = json_encode(["message" => $message, "emails" => $arrayEmails, "names" => $arrayNames, "works" => $arrayWorks]);
    echo $data;

?>