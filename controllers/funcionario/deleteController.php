<?php

$funcionarios = $app['database']->selectAll('funcionario');

$app['database']->delete('funcionario', $_POST['id']);

header('Location: /funcionarios');