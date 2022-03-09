<?php
header('Content-Type: text/plain');
$string = $_GET['text'];
$condition = 1;
if(!ctype_alpha($string[0]))
{
    $condition = 0;
    echo "No \nИдентефикатор не должен начинаться с цифры";
}
else
{
    for($i=1; $i < strlen($string); $i++)
    {
        if(!ctype_alpha($string[$i]) && !is_numeric($string[$i]))
        {
            $condition = 0;
            echo "No \n идентефикатор н е должен содержать спец. знаков";
            break;
        }
    }
}
if($condition == 1)
{
    echo "Yes";
}