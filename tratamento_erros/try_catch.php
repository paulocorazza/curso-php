<div class="titulo">
    Try e Catch
</div>

<?php


try {
    echo intdiv(7,0);
} catch(Error $erro){
    echo 'teve um erro: ' . $erro . '<br>';
}

try {
    throw new Exception('Um erro aconteceu');
    echo intdiv(7,0);
} catch(DivisionByZeroError $erro){
    echo 'divisao por zero' . '<br>' ;
} catch(Throwable $erro){
    echo 'Erro: ' . $erro->getMessage() . '<br>';
} finally{
    echo 'sempre executado <br>';
}

