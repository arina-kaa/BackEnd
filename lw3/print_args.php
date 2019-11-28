<?php

header("Content-Type: text/plain");
if ($argc > 1) {
    $number = $argc - 1;
    $args = "";
    foreach ($argv as $key => $value) {
        if ($key >= 1) {
            if ($key <> 1) $args .= " ";
            $args .= $value;
        }
    }
    echo "Number of arguments: {$number}\n";
    echo "Arguments: {$args}";
} else {
    echo "No parameters were specified!";
}