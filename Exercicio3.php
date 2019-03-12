<?php



$entrada = 1000;
$juros = 0.05;
$resultado = 0;


for($tempo = 1; $tempo<=10; $tempo++){
    $resultado = $entrada * pow((1+$juros),$tempo);
    echo $resultado . "\n";
}