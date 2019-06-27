<?php

$clientes = $app['database']->selectAll('cliente');

$app['database']->delete('cliente', $_POST['id']);

header('Location: /clientes');