<?php 
require_once("../inc/common.inc.php");

if (isset($_GET["str"]) && !empty($_GET["str"]))
{                                     
    echo revers($_GET["str"]);
}
