<div class="titulo">
    Foreach
</div>

<?php

$semana = [1000 => "Domingo","Segunda-feira",
            "Terça-feira","Quarta-feira",
            "Quinta-feira","Sexta-feira","Sábado"];


foreach( $semana as $dia){
    echo "$dia <br>";
}

echo '<hr>';


foreach($semana as $indice => $valor){
    echo "$indice => $valor <br>";
}

echo '<hr>';

$matrix = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

foreach($matrix as $linha){
    //echo "$linha <br>";

    foreach($linha as $letra){
        echo "$letra";
    }
    echo '<br>';
}

echo '<hr>';

$numeros = [1,2,3,4,5];

foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);