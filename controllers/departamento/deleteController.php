<?php

$departamentos = $app['database']->selectAll('departamento');

$app['database']->delete('departamento', [
    'nome' => $_POST['nome']
]);