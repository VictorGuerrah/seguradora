<?php

$departamentos = $app['database']->selectAll('cargo');

$app['database']->delete('cargo', $_POST['id']);

header('Location: /cargos');