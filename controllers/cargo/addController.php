<?php

$cargos = $app['database']->selectAll('cargo');
var_dump($_POST);
$app['database']->insert('cargo', [
    'nome' => $_POST['nome'],
    'departamento_id' => $_POST['departamento_id']
    
]);

header('Location: /cargos');

