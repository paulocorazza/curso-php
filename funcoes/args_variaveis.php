<div class="titulo">
    Argumentos Variáveis
</div>

<?php

function soma($a,$b){
    return $a + $b;
}

echo soma(14,15,6,7,8) . '<br>';

function somaCompleta(...$numeros){
  //print_r($numeros);
   $soma = 0;
    foreach($numeros as $numero){
        $soma += $numero;
    }
    return $soma;
}

echo somaCompleta(1,2,3,4,5);

$array = [6,7,8];
echo '<br>' . somaCompleta(...$array);