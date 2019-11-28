<?php

function last(?string $str = ''): string
{
    return substr($str, -1);
}

function withoutLast(?string $str = ''): string
{
    return substr($str, 0, -1);
}

function reverse(?string $str = ''): string
{
    $newArr = [];
    $strArr = str_split($str);
    $strLength = count($strArr) - 1;
    for ($i = $strLength; $i >= 0; $i--) {
        $newArr[] = $strArr[$i];
    }

    return implode('', $newArr);
}