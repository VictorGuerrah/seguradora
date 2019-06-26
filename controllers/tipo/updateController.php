<?php

$departamentos = $app['database']->selectAll('tipo_seguro');

$app['database']->update('tipo_seguro', [
    'nome' => $_POST['nome']
], $_POST['id']);

header('Location: /tipos');