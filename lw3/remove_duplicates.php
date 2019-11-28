<?php

if ($argc <> 2) {
    echo "Incorrect number of arguments!\nUsage php remove_duplicates.php <input string>";
} else {
    foreach(str_split($argv[1]) as $el)
    {
        echo $el;
    }
    echo PHP_EOL;
    echo implode(array_unique(preg_split('//u', $argv[1], null, PREG_SPLIT_NO_EMPTY)));
}