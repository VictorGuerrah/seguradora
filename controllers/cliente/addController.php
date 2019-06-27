<?php

$clientes = $app['database']->selectAll('cliente');

$app['database']->insert('cliente', [
    'nome' => $_POST['nome'], 
    'email' => $_POST['email'],
    'cpf' => $_POST['cpf'],
    'cidade' => $_POST['cidade'],
    'bairro' => $_POST['bairro'],
    'numero' => $_POST['numero'],
    'rua' => $_POST['rua'],
    
]);
header('Location: /clientes');