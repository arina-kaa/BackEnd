<?php 
require_once("../inc/common.inc.php");
header("Content-Type: text/plain; charset=utf-8");
               
if (isset($_GET["str"]) && !empty($_GET["str"])) {                        
    $inputString = $_GET["str"];             
    $status = checkIdentifier($inputString);
    if ($status == NO_ERROR) {
        echo "Yes";
    } else {
        echo "No";
        $errorText = getErrorText($status);
        if ($errorText) {
            echo PHP_EOL . "Error: " . $errorText;
        }       
    }
}
