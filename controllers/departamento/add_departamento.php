<?php

$app['database']->insert('users', [
    'nome' => $_POST['nome']
]);


headers('Location: /departamento');