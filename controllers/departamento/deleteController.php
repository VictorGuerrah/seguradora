<?php

$departamentos = $app['database']->selectAll('departamento');

$app['database']->delete('departamento', $_POST['id']);

header('Location: /departamentos');