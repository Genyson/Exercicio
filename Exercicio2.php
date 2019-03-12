<?php

//echo "What do you want to input? ";
//$input = rtrim(fgets(STDIN));
//echo "I got it:\n" . $input . "\n";

//Objetivo do programa = Define a Média das Notas da Classe
//  -insere as notas dos alunos - quantidade indefinida
//  -calculo a media do total de notas inseridas
//  -apresento a media das notas

//Declarar as variaveis necessarias
//  -Quantidade de notas inseridas = 0
//  -Soma das notas inseridas = 0
//  -Sentinela = "Calcular"

//Processamento
//  -insiro a nota do aluno ou sentinela
//      -se o valor for diferente do sentinela
//          -somo o valor da nota inserida as demais
//          -somo a quantidade de notas inseridas

//  se total de notas maior que 0
//      -calculo a media
        //Apresento o resultado
//  se não
//      apresentar Nenhuma nota inserida

$Contador = 1;
$somanotas = 0;
$sentinela = -1;

while ($insiranota != $sentinela){
    echo "Digite a nota do aluno:";
    $insiranota = rtrim(fgets(STDIN));
    $somanotas = $insiranota + $somanotas;
    $Contador = $Contador + 1;
}

$media = $somanotas / $Contador;

//if $Contador > 0;
    echo "Media das notas inserida = "
echo    $media;
//else
//    echo "Nenhuma nota inserida";



