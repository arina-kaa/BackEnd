<?php
header("Content-type: text/plain");
require_once("../inc/common.inc.php");

$checkingFileStatus = checkFilePath($argc, $argv);
if ($checkingFileStatus == FILE_NO_ERROR) {
    $path = $argv[1];
    $fileExtensionsArray = getFilesFromFolder($path);
    printFileExtensionSize($fileExtensionsArray);
} else {
    $errorText = getFileErrorText($checkingFileStatus);
    echo $errorText;
}