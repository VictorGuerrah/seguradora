<?php

$tios = $app['database']->selectAll('tipo_seguro');

$app['database']->insert('tipo_seguro', 
[
    'nome' => $_POST['nome'], 
    
]);

header('Location: /tipos');