<div class="titulo">Switch</div>

<?php
$categoria = 'asdasdasd';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}


$precoFormatado = number_format($preco, 2, ',','.');

echo "<p>Carro:  $carro <br>Preço: R$ $precoFormatado</p>";


$categoria = '???';

switch(strtolower($categoria)){
    case 'Luxo':
        $carro = 'Mercedez';
        $preco = 250000;
        break;
    case 'suv básico';
    case 'suv':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan';
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',','.');
echo "<p>Carro:  $carro <br>Preço: R$ $precoFormatado</p>";

