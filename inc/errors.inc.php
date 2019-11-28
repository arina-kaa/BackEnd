<?php

const NO_ERROR = 0;
const ERROR_DIGIT_BEGIN = 1;
const ERROR_NUMBERS_ONLY = 2;
const ERROR_FORBIDDEN_SYMBOL = 3;

function getErrorText($errorStatus)
{
    $result = null;
    $errorsTexts = [
        ERROR_DIGIT_BEGIN      => "The identifier cannot begin with a digit.",
        ERROR_NUMBERS_ONLY     => "The identifier cannot consist of numbers only.",
        ERROR_FORBIDDEN_SYMBOL => "The string contains characters other than latin letters and numbers."
    ];

    if (array_key_exists($errorStatus, $errorsTexts)) {
        $result = $errorsTexts[$errorStatus];
    }
    return $result;
}   