<div class="titulo">
    Desafio do Palíndrono usando a função nativa do PHP strrev
</div>

<?php


function checkReversal($text){

    strrev($text);
    
    if(strrev($text) == $text){
        
        echo 'O texto digitado foi: ' . $text;
        echo '<br>'; 
        return 'As palavras são palíndromos';
        
    }
    else{
       
        echo 'O texto digitado foi: ' . $text;
        echo '<br>';
        return 'As palavras não são palíndromos';
        
    }


}

echo checkReversal('reviver');


echo '<hr>';

?>

<div class="titulo">
    Desafio do Palíndrono usando o laço for
</div>

<?php

function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('abccba') . ' ';
echo palindromo('bola') . ' ';
echo '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não';
}

echo palindromoSimples('arara') . ' ';
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('abccba') . ' ';
echo palindromoSimples('bola') . ' ';

?>


