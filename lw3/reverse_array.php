<?php
header("Content-Type: text/plain");

function reverseArray($arr)
{
    $newArr = [];
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $newArr[] = $arr[$i];
    }
    return $newArr;
}

$arrParam = ($_GET["arr"]) ?? "";
if (!$arrParam) {
    header("Status: 400");
} else {
    $arr = explode(",", $arrParam);
    print_r($arr);
    print_r(reverseArray($arr));
}