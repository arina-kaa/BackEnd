<?php

header("Content-Type: text/plain");
$name = ($_GET["name"]) ?? "";
echo "Hello, Dear {$name}!";