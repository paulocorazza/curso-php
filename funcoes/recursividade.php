<div class="titulo">
    Recursividade
</div>

<?php

echo '<h3>Decrementando</h3>';

function somaUmAte($numero){
    $soma = 0;
    for(; $numero >= 1; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(5) . '<br>';


echo '<h3>Incrementando</h3>';

function somaUmAte2($numero){
    $soma = 0;
    for($i = 0; $i <= $numero; $i++){
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte2(10) . '<br>';

echo '<h3>Com Recursividade</h3>';

function somaRecursivaUmAte($numero){
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(2) . '<br>';


echo '<h3>Com Recursividade Economica</h3>';

function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';