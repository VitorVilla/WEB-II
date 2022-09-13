<?php

$variavel_1 = 'texto';
echo gettype($variavel_1) . '<br>' . PHP_EOL;

$variavel_2 = 123;
echo gettype($variavel_2) . '<br>' . PHP_EOL;

$variavel_3 = 1;
echo gettype($variavel_3) . '<br>' . PHP_EOL;

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo gettype($array) . '<br>' . PHP_EOL;
