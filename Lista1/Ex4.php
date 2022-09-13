<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/
$a = 10;
$b = 1;
$c = 40;

if ($a > $b & $a > $c) {
    echo "O maior número é " . $a;
}

if ($b > $c & $b > $a) {
    echo "O maior número é " . $b;
}
if ($c > $a & $c > $b) {
    echo "O maior número é " . $c;
}
