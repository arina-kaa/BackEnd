<?php
require_once("errors.inc.php");
function mb_str_split($string)
{
    return preg_split('//u', $string, null, PREG_SPLIT_NO_EMPTY);
}

function last($string) 
{
    return (isset($string) && !empty($string)) ? mb_substr($string, -1) : "";
}   

function withoutLast($string) 
{
    return (isset($string) && !empty($string)) ? mb_substr($string, 0, -1) : "";
}

function reverse($str)
{
    $newArr = [];
    $strArr = mb_str_split(str);
    for ($i = mb_strlen($str) - 1; $i >= 0; $i--) {
        $newArr[] = $strArr[$i];
    }

    return implode('', $newArr);
}

function revers($string) 
{
    return (isset($string) && !empty($string)) ? reverse($string) : "";    
}

function checkIdentifier($string) 
{
    $status = NO_ERROR;

    if (is_numeric($string[0])) {
        $status = ERROR_DIGIT_BEGIN;                              

        if (is_numeric($string)) {  
            $status = ERROR_NUMBERS_ONLY;                                     
        }
    }

    foreach (mb_str_split($string) as $char) {
        if (!ctype_digit($char) && !ctype_alpha($char)) {
            $status = ERROR_FORBIDDEN_SYMBOL;                                              
        }
    } 

    return $status;
}