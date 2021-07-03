<div class="titulo">
    Argumentos e parâmetros de retorno
</div>

<?php


function obterMensagem(){
    return '<h1>Seja bem vindo!</h1>';
}

obterMensagem();
//echo obterMensagem();

$message = obterMensagem();

echo $message;

var_dump(obterMensagem());


function obterMensagemComNome($nome){
    return "Bem vindo, {$nome} !";
}

echo '<br>', obterMensagemComNome('Paulo');

function soma($a, $b){
    return $a + $b;
}

echo '<br>', soma(4,5);
echo '<br>', soma(234,432);

$x = 234;
$y = 432;

echo '<br>', soma($x,$y);

function trocarDeValor($a,$novoValor){
    $a = $novoValor;
}

$variavel = 1;

trocarDeValor($variavel, 3);

echo '<br>', $variavel;

function trocarDeValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5);

echo '<br>', $variavel;