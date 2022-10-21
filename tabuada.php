<?php
// -2) A ideia agora é exibir a tabuada de determinado número. Ou seja, temos um número armazenado em uma variável qualquer, e queremos exibir o resultado da sua multiplicação de 1 até 9. 

$mult = 5;

for ($i = 1; $i < 10; $i++){
    echo "$mult x $i = " . $mult * $i . PHP_EOL;
}

// = Para ( contador com o valor de 1; contador menor que 10; incrementando){exibir tabuada variavel x contador = resltado}

// podia ser substituido por 
// $resul = $mult * $i 
// echo "$mult x $i = $resul" . PHP_EOL;