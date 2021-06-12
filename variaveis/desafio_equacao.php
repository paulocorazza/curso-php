<div class="titulo">Equação</div>

<div>
    <h1>Resultado da Equação</h1>

</div>

<?php

$numeradorA = ( 6 * (3 + 2)) ** 2;
$denominadorA = 3 * 2;

$numeradorB = (1 - 5) * (2 - 7);
$denominadorB = 2;

$superiorParteA = $numeradorA / $denominadorA;
$superiorParteB = ($numeradorB /  $denominadorB) ** 2;

$superior = ($superiorParteA - $superiorParteB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;

echo  "O resultado final é " .  $final;

