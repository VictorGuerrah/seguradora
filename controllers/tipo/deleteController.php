<?php

$departamentos = $app['database']->selectAll('tipo_seguro');

$app['database']->delete('tipo_seguro', $_POST['id']);

header('Location: /tipos');