<?php
header("Content-Type: text/plain");

const OK                    = 200;
const UNDEFINED_WORD        = 400;
const UNDEFINED_TRANSLATION = 404;

function setHeader($code)
{
    $headers = [
        OK                    => "Status: 200 Ok!",
        UNDEFINED_WORD        => "Status: 400 Undefined word!",
        UNDEFINED_TRANSLATION => "Status: 404 Undefined translation!"
    ];
    header($headers[$code]);
}

function getTranslatedWord($word)
{
    $translation = "";
    $dictionary = [
        "keyboard"    => "клавиатура",
        "mouse"       => "мышь",
        "programming" => "программирование"
    ];
    if (array_key_exists($word, $dictionary)) {
        $translation = $dictionary[$word];
    }
    return $translation;
}

$response = OK;
$word = ($_GET["word"]) ?? "";
if (!$word) {
    $response = UNDEFINED_WORD; 
} else {     
    $translation = getTranslatedWord($word);
    if (!$translation) {
        $response = UNDEFINED_TRANSLATION;
    } else {
        echo $translation;
    }
}
setHeader($response);