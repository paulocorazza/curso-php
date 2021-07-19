<div class="titulo">
    Herança
</div>

<?php


class Pessoa
{
    public $nome;
    public $idade;


    function __construct($novoNome, $idade)
    {
        $this -> nome = $novoNome;
        $this -> idade = $idade;

        echo 'Pessoa criada';
    }

    function __destruct()
    {
        echo 'Tchau';
    }

    public function apresentar()
    {
        echo "{$this -> nome}, {$this -> idade} anos <br>";
    }

}

class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login)
    {
       $this -> nome = $nome;
       $this -> idade = $idade;
       $this -> login = $login;
       
       echo 'Usuário criado <br>';
    }

    function __destruct()
    {
        echo 'Usuário diz Tchau!';
    }

    
    public function apresentar()
    {
        parent::apresentar();
        echo "@{$this -> login}:  {$this -> nome}, {$this -> idade} anos";
    }

}

$usuario = new Usuario('Moisés', 21 , 'moises');
$usuario -> apresentar();

unset($usuario);

