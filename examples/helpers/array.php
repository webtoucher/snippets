<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/../../helpers/array.php';

echo '<pre>';

echo '<b>ТРАНСПОНИРОВАНИЕ</b>' . PHP_EOL . PHP_EOL;
$someArray = [
	['a', 'b', 'c'],
	['d', 'e', 'f'],
	['g', 'h', 'i'],
];

echo 'было:' . PHP_EOL;
print_r($someArray);
echo PHP_EOL . 'стало:' . PHP_EOL;
print_r(transpose($someArray));

echo '</pre>';
