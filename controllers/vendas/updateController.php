<?php

$vendas = $app['database']->selectAll('venda');
die(var_dump($_POST));
$app['database']->update('venda', [
    'anotacoes' => $_POST['anotacoes'], 
    'cliente_id' => $_POST['cliente_id'],
    'desconto' => $_POST['desconto'],
    'funcionario_id' => $_POST['funcionario_id'],
    'preco_final' => $_POST['preco_final'],
    'quantidade' => $_POST['quantidade'],
    'seguro_id' => $_POST['seguro_id'],
], $_POST['id']);

header('Location: /vendas');