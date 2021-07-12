<div class="titulo">
    Funções Anônimas
</div>

<?php

$soma = function($a,$b){
    return $a + $b;
};

echo $soma(4,6);
echo '<br>';

function executar($a,$b,$operacao, $funcao){
    $resultado = $funcao($a,$b);
    echo " $a $operacao $b = $resultado <br>";
}

echo '<h3>Soma</h3>';
executar(2,3,'+',$soma);
echo '<br>';

$multiplicacao = function($a, $b){
    return $a * $b ;
};

echo '<h3>Multiplicação</h3>';
executar(2,3,'*', $multiplicacao);


$divisao = function($a,$b){
    return $a / $b;
};

echo '<h3>Divisão</h3>';
executar(33,11,'/', $divisao);

$subtracao = function($a,$b){
    return $a - $b;
};

echo '<h3>Subtração</h3>';
executar(33,11,'-', $subtracao);