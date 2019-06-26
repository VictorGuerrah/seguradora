<?php

$cargos = $app['database']->selectAll('cargo');

$app['database']->insert('cargo', [
    'nome' => $_POST['nome'],
    'departamento_id' => $_POST['departamento_id']
    
]);

header('Location: /cargos');

