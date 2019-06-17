<?php

$departamentos = $app['database']->selectAll('departamento');

$app['database']->update('departamento', [
    'nome' => $_POST['nome']
], $_POST['id']);

header('Location: /departamentos');