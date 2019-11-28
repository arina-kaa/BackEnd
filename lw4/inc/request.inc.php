<?php
function getString(): string
{
    if (!isset($_GET['str'])) {
        echo 'Строка не переданна';
        return '';
    } else {
        if ($_GET['str'] == '') {
            echo 'Строка пуста';
            return '';
        } else {
            return  $_GET['str'];
        }
    }
}