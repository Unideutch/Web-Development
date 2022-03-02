<?php
header('Content-Type: text/plain');
$string = $_GET['password'];
$n = 0;
function numberFact($text)
{
    $nf=0;
    for($i=0; $i<strlen($text); $i++)
    {
        if (is_numeric($text[$i]))
        {
            $nf++;
        }
    }
    return($nf);
}
function numberUpper($text)
{
    $nu=0;
    for($i=0; $i<strlen($text); $i++)
    {
        if (ctype_upper($text[$i]))
        {
            $nu++;
        }
    }
    return($nu);
}
function numberLower($text)
{
    $nlow=0;
    for($i=0; $i<strlen($text); $i++)
    {
        if (ctype_lower($text[$i]))
        {
            $nlow++;
        }
    }
    return($nlow);
}
function onlyLetters($text)
{
    if(ctype_alpha($text))
    {
        return(strlen($text));
    } 
}
function onlyNumbers($text)
{
    if(is_numeric($text))
    {
        return(strlen($text));
    }
}
function dubles($text)
{
    $nd=0;
    for($i=0; $i < strlen($text); $i++)
    {
        while(strpos($text, $text[$i]))
        {
            $nd++;
        }
    }
    return($nd);
}
echo (strlen($string)*4+ numberFact($string)*4 + (strlen($string) - numberUpper($string))*2 + (strlen($string) - numberLower($string))*2 - onlyLetters($string)- onlyNumbers($string) - dubles($string));
