<?php
header('Content-Type: text/plain');
$string = $_GET['text'];
$condition = 1;
if(!ctype_alpha($string[0]))
{
    $condition = 0;
    $message = 1;
}
for($i=1; $i < strlen($string); $i++)
{
    if(!ctype_alpha($string[$i]) && !is_numeric($string[$i]))
    {
        $condition = 0;
        $message = 2;
    }
}
if ($condition == 1)
{
    echo 'Yes';
}
else
{
    echo 'No';
}
if ($message == 1)
{
    echo "\nИдентефикатор не должен начинаться с цифры";
}
if ($message == 2)
{
    echo "\nИдентефикатор не должен содержать специальных символов";
}