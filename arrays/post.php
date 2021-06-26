<div class="titulo">
$_POST
</div>

<form action="#" method="POST">

    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <br>
    <label for="sobrenome">Sobrenome:</label>
    <input type="text" name="sobrenome">
    <br>
    <label for="estado">Estado:</label>
    <select name="estado" >
        <option value="SP">SÃO PAULO</option>
        <option value="RJ">Rio de Janeiro</option>
    </select>
    <br>
    <button type="submit">Enviar</button>
</form>

<?php

print_r($_POST);
print_r($_GET);


