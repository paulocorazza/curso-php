<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;

echo '<br>' . $numero;
$numero = $numero -1 ;

echo '<br>' . $numero;

$numero = $numero + 1.5 ;
echo '<br>' . $numero;
$numero--;

echo '<br>' . $numero;

++$numero;
echo '<br>' . $numero;

$numero -=5;
echo '<br>' . $numero;

$numero +=5;
echo '<br>' . $numero; 

$texto = 'Essse é um texto qualquer';
echo '<br>' . $texto;

echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';

echo '<br>' . $valor;
