<?php
const FILE_NO_ERROR = 0;
const FILE_ERROR_NO_PARAM = 1;
const FILE_ERROR_UNDEFINED_DIR = 2;
const FILE_TYPE = "file";
const FILE_EXTENSIONS = [
    "php"  => "PHP", 
    "js"   => "JS", 
    "css"  => "CSS", 
    "twig" => "Twig"
];
function getFileErrorText($status)
{
    $result = null;
    $errorsTexts = [
        FILE_ERROR_NO_PARAM      => "TheIncorrect parameters!",
        FILE_ERROR_UNDEFINED_DIR => "Undefined dir!"
    ];
    if (array_key_exists($status, $errorsTexts)) {
        $result = $errorsTexts[$status];
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
function convertBytesToKb($size)
{
    return ($size > 0) ? $size / 1024 : 0;
}                   
function getFilesFromFolder($path)
{
    $fileSizeCounter = [
        "php"  => ["count" => 0, "size" => 0], 
        "js"   => ["count" => 0, "size" => 0], 
        "css"  => ["count" => 0, "size" => 0], 
        "twig" => ["count" => 0, "size" => 0]
    ];
    if ($dir = opendir($path)) {
        while (($file = readdir($dir)) !== false) {
            $filePath = $path . "\\" .  $file;
            if (filetype($filePath) == FILE_TYPE) {
                $fileExtension = pathinfo($filePath)["extension"];
                if (array_key_exists($fileExtension, $fileSizeCounter)) {
                    $fileSizeCounter[$fileExtension]["count"]++;
                    $fileSizeCounter[$fileExtension]["size"] += filesize($filePath);
                }                                                                                                        
            }
        }
        closedir($dir);
    }
    return $fileSizeCounter;
}
function printFileExtensionSize($fileExtensionsArray)
{    
    foreach ($fileExtensionsArray as $key => $value) {
        printf("%s - %.2fKB\n", FILE_EXTENSIONS[$key], convertBytesToKb($value["size"]));                                  
    }
}