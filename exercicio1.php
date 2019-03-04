<?php


//echo "What do you want to input? ";
//$input = rtrim(fgets(STDIN));
//echo "I got it:\n" . $input . "\n";

$qtdalunos = 10;
$contadoralunos = 1;
$somanotas = 0;



while($contadoralunos <= $qtdalunos){
    echo "Digite a nota do aluno:";
    $notaatual = rtrim(fgets (STDIN));
    $somanotas = $notaatual + $somanotas;
    $contadoralunos = $contadoralunos + 1;
}

$media = $somanotas / $qtdalunos;
echo $media;
