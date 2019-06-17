<?php

$funcionarios = $app['database']->selectAll('funcionario');

$app['database']->insert('funcionario', [
    'nome' => $_POST['nome'], 
    'cargo_id' => $_POST['cargo_id'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'url_imagem' => $_POST['url_imagem'],
    
]);
header('Location: /funcionarios');
