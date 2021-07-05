<div class="titulo">
    Argumento Padrão
</div>

<?php


function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    echo "bem vindo, $nome $sobrenome! <br>";
}

saudacao();
saudacao(NULL);
saudacao(null,NULL);
saudacao("Meste","Supremo");

function anotarPedido($comida, $bebida = 'Agua'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = "água", $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido2('Refrigerante','Pizza2');