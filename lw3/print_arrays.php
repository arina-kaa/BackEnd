<?php

$simpleNumbersArray = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
$functionsArray = [
    "count"       => "Подсчитывает количество элементов массива.",
    "is_array"    => "Определяет, является ли переменная массивом.",
    "array_merge" => "Сливает один или большее количество массивов.",
    "empty"       => "Проверяет, пуста ли переменная.",
    "print_r"     => "Выводит удобочитаемую информацию о переменной."

];
$matrixArray = [
    [1, 0, 0, 0],
    [0, 1, 0, 0],
    [0, 0, 1, 0],
    [0, 0, 0, 1]
];

echo "Simple numbers:" . PHP_EOL;
foreach ($simpleNumbersArray as $value) {
    echo $value . " ";
}
echo PHP_EOL . PHP_EOL;

echo "Functions descriptions:" . PHP_EOL;
foreach ($functionsArray as $key => $value) {
    echo $key . ": " . $value . PHP_EOL;
}
echo PHP_EOL;

echo "Matrix:" . PHP_EOL;
foreach ($matrixArray as $row => $column) {
    foreach ($column as $key => $value) {
        echo $value . " ";
    }
    echo PHP_EOL;
}