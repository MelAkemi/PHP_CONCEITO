<?php
// -3) A ideia é, a partir de uma altura e peso definidas, calcularmos o IMC. Para isso, você precisará pesquisar a fórmula na internet (que é bastante simples). A partir dessa fórmula e da tabela de IMCs, o código deverá exibir se o usuário está abaixo, dentro ou acima do nível recomendado. 
// formula IMC= peso / altura x altura

$peso = 60;
$altura = 1.65;
$imc = $peso / $altura **2;

echo "Seu IMC é de $imc. Você está com o IMC";

if ($imc < 18){
    echo " abaixo";
} elseif ($imc < 25){
    echo " dentro";
} else {
    echo " acima";
}
echo " do recomendado.";

//  