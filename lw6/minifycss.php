<?php
    require_once('../inc/common.inc.php');
    $file = fopen(__DIR__ . '/' . CONFIG_FILE, 'r');
    if (!$file) {
        return;
    }

    while (!feof($file)) {
        if ($mainFileName = trim(fgets($file))) {
            $mainFile = __DIR__ . RESULT_FOLDER . $mainFileName;
            if (file_exists($mainFile)) {
                unlink($mainFile);
            }
            while ($internalFileName = trim(fgets($file))) {
                $internalFilePath = __DIR__ . SOURCE_FOLDER . $internalFileName;
                $internalFileContent = getFileContent($internalFilePath);
                file_put_contents($mainFile, $internalFileContent, FILE_APPEND);
            }
        }
    }