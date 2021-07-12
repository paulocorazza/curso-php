<div class="titulo">
    Retorno de função
</div>

<?php

function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}

echo soma(3)(3);