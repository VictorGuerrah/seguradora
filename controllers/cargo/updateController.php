<?php

$cargos = $app['database']->selectAll('cargo');

$app['database']->update('cargo', [
    'nome' => $_POST['nome'],
    'departamento_id' => $_POST['departamento_id']
], $_POST['id']);

header('Location: /cargos');
