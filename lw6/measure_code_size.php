<?php
header("Content-type: text/plain");

if (--$argc == 1) {
    $path = $argv[1];
    echo "Path: ", $path, "\n";
    if (is_dir($path)) {
        //print_r(scandir($path));
        if ($dir = opendir($path)) {
            while (($file = readdir($dir)) !== false) {
                $filePath = $path . "\\" .  $file;
                if (filetype($filePath) == "file") {
                    print "File: $file : type: " . pathinfo($filePath)["extension"] . " : " . stat($filePath)["size"] . "\n";
                }
            }
            closedir($dir);
        }
    } else {
        echo "Undefined dir!";
    }
} else {
    echo "Incorrect parameters!";
}