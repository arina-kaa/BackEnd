<?php

const FILE_NO_ERROR = 0;
const FILE_ERROR_NO_PARAM = 1;
const FILE_ERROR_UNDEFINED_DIR = 2;

function getFileErrorTest($status)
{
    $result = null;
    $errorsTexts = [
        FILE_ERROR_NO_PARAM      => "TheIncorrect parameters!",
        FILE_ERROR_UNDEFINED_DIR => "Undefined dir!"
    ];

    if (array_key_exists($errorStatus, $errorsTexts)) {
        $result = $errorsTexts[$errorStatus];
    }
    return $result;
}

function checkFilePath($argc, $argv)
{
    $status = FILE_NO_ERROR;
    if (--$argc == 1) {            
        if (!is_dir($argv[1])) {
            $status = FILE_ERROR_UNDEFINED_DIR;
        }
    } else {
        $status = FILE_ERROR_NO_PARAM;
    }
    return $status;
}