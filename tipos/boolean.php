<div class="titulo">Tipo booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . var_dump('true');

echo '<p>Regras;</p>';
echo '<br>' . var_dump((bool) 0);
 

