<?php

$vendas = $app['database']->selectAll('venda');

$app['database']->delete('venda', $_POST['id']);

header('Location: /vendas');