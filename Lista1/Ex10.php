<?php
/*
Faça o cálculo da média simples de 
$nota_1 e $nota_2.
Imprima a média simples.
Imprima a condição:
    Se a média menor ou igual a 4.9, reprovado.
    Se a média entre 5 e 7, recuperação.
    Se a média acima de 7, aprovado.
Crie uma função com o nome calculo_media.
*/
function mediaT($nota_1 = 9, $nota_2 = 4, $media)
{

    $media = $nota_1 + $nota_2 / 2;

    if ($media <= 4.9) {
        echo "REPROVADO!";
    } elseif (($media >= 5) & ($media <= 7)) {
        echo "RECUPERAÇÃO";
    } else {
        echo "APROVADO";
    }
};

echo mediaT($nota_1 = 9, $nota_2 = 4, $media);
