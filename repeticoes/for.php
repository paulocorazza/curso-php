<div class="titulo">
    Laço For
</div>

<?php

for($cont = 1; $cont <= 5; $cont++){
    echo "$cont <br>";
}


echo "<hr>";


for(; $cont <= 10; $cont++){
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 15;){
    echo "$cont <br>";
    $cont++;
}
echo "<hr>";

$semana = ["Domingo","Segunda-feira",
            "Terça-feira","Quarta-feira",
            "Quinta-feira","Sexta-feira","Sábado"];

print_r($semana);
echo '<br>';
echo "<hr>";
for($i = 0; $i <count($semana); $i++){
    echo "{$semana[$i]} <br>";
}

echo "<hr>";

$matrix = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

for($i = 0; $i < count($matrix); $i++){
    for($j = 0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]}";
    }
    echo '<br>';
}