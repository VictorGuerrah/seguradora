<?php

$vendas = $app['database']->selectAll('venda');
var_dump($_POST);
$app['database']->insert('venda', [
    'anotacoes' => $_POST['anotacoes'], 
    'cliente_id' => $_POST['cliente_id'],
    'desconto' => $_POST['desconto'],
    'funcionario_id' => $_POST['funcionario_id'],
    'preco_final' => $_POST['preco_final'],
    'quantidade' => $_POST['quantidade'],
    'seguro_id' => $_POST['seguro_id'],
]);

header('Location: /vendas');