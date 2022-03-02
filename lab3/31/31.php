<?php
header('Content-Type: text/plain');
$string = $_GET['text'];
$string = trim($string);
while(strpos($string, '  ')) 
{
    $string = str_replace('  ', ' ', $string);
}
echo $string;