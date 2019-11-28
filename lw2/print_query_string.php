<?php

header("Content-Type: text/plain");
if ($_SERVER['QUERY_STRING']) {
    echo "Query string = '" . $_SERVER['QUERY_STRING'] . "'";
}