<?php
/*
Descrubra se $numero é :
 - Divisível por 10
 - Divisível por 3
 - Se não é divisível por nenhum destes 
Imprimir mensagem na tela do número e as condições acima.
*/
$numero = 150;

if ($numero % 10 == 0) {
    echo "O numero " . $numero . " é divisivel por 10";
} else {
    echo "O numero " . $numero . " não é divisivel por 10";
}

if ($numero % 3 == 0) {
    echo "O numero " . $numero . " é divisivel por 3";
} else {
    echo "O numero " . $numero . " não é divisivel por 3";
}
