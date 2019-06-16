<?php

$departamentos = $app['database']->selectAll('departamento');

$app['database']->insert('departamento', [
    'nome' => $_POST['nome']
]);
