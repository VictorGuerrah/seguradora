<?php

$seguros = $app['database']->selectAll('seguro');

$app['database']->update('seguro', [
    'nome' => $_POST['nome'], 
    'tipo_seguro_id' => $_POST['tipo_seguro_id'],
    'descricao' => $_POST['descricao'],
    'preco' => $_POST['preco'],
    
]);

header('Location: /seguros');