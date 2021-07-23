<div class="titulo">
    Final
</div>

<?php

abstract class Abstrata
{
    public abstract function metodo1();

    final public function metodo2()
    {
        echo "Não vou mudar";
    }
}

class Classe extends Abstrata
{
    public function metodo1()
    {
        echo 'executando método 1 <br>';
    }

    // public function metodo2()
    // {
    //     echo "Extendendo método 2 <br>";
    // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica
{
    public $attr;
}

$unica = new Unica();

echo $unica->attr;

// class Duplicata extends Unica
// {

// }