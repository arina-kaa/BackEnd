<?php
    const SOURCE_FOLDER = '/web/css/';
    const RESULT_FOLDER = '/web/css.min/';

    const CONFIG_FILE = 'minifycss.txt';

    function getFileContent($filePath) {
        $internalFile = $filePath;
        $internalFile = file($internalFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $internalFile = ($internalFile) ? array_map('trim', $internalFile) : '';
        $internalFile = ($internalFile) ? implode($internalFile) : '';
        $internalFile = preg_replace("/\s+/"," ", $internalFile);
        $internalFile = preg_replace('/;}/','}', $internalFile);
        $internalFile = preg_replace('/ {/','{', $internalFile);
        return $internalFile;
    }