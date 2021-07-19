<div class="titulo">
    Construtor e Destrutor
</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;
    
    function __construct($novoNome, $idade)
    {
        echo 'Construtor invocado! <br>';
        $this -> nome = $novoNome;
        $this -> idade = $idade;
    }

    function __destruct()
    {
        echo 'e Morreu';
    }

    public function apresentar()
    {
        echo "{$this -> nome}, {$this -> idade} anos <br>";

    }
}

$pessoa = new Pessoa('Rebeca Maria',40);
$pessoa -> apresentar();
unset($pessoa);

$pessoa2 = new Pessoa('Pedro',33);
$pessoa2 -> apresentar();
$pessoa2 = null;