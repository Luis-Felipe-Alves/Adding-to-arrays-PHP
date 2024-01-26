<?php

//Adicionando um novo elemento a um vetor existente:

$numeros = [1,2,3,4,5];

foreach($numeros as $indices => $elemento){
    echo 'Original '.$elemento . PHP_EOL;
}

$numeros[] = 17;

foreach($numeros as $indices => $elemento){
    echo 'Updated '.$elemento . PHP_EOL;
}