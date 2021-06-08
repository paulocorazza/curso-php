<div class="titulo">
</div>

<?php

echo 'eu sou uma string';
echo '<br>';
var_dump("Eu Também");
echo '<br>';

echo "Nós também" . " somos";
echo '<br>', "Também aceito", " vírgulas";
echo '<br>';
echo " 'Teste' " .  '" Teste "' . '\'Teste\'' . "\"Teste\"";

print("<br>Também existe a função print");

echo '<br>' . strtoupper('teste');
echo '<br>' . strtolower('TESTE');
echo '<br>' . ucfirst('teste');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu Também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7 , 6);
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso por isso');