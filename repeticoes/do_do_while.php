<div class="titulo">
    Do & Do While
</div>

<?php

CONST VALOR_LIMITE = 5;
$contador = 10;

while($contador < VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
}


do {
    echo "while $contador <br>";
}
while($contador < VALOR_LIMITE);

$contador = 0;

do{
    echo "do-while  $contador <br>";
    $contador++; 
}
while($contador < VALOR_LIMITE);


$contador = 0;

while(true){
    echo "while(true) $contador <br>";
    $contador++;

    if($contador >= VALOR_LIMITE) break;
}