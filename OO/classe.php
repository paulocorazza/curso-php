<div class="titulo">
    Classe
</div>

<?php

class Cliente
{
    public $nome = 'Anônimo';
    public $idade = 18;


    public function apresentar()
    {
        return "Nome: {$this -> nome} <br> idade: {$this -> idade} <br>";
    } 
}

$cliente1 = new Cliente();
$cliente1 -> nome = 'Paulo Corazza';
$cliente1 -> idade = 28;
$cliente1 -> apresentar();


$cliente2 = new Cliente();
$cliente2 -> nome = 'Carla';
$cliente2 -> idade = 27;
$cliente2 -> apresentar();


echo $cliente1 -> apresentar(), '<br>';
echo $cliente2 -> apresentar(), '<br>';


