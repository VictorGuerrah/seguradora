<?php

$seguros = $app['database']->selectAll('seguro');

$app['database']->delete('seguro', $_POST['id']);

header('Location: /seguros');