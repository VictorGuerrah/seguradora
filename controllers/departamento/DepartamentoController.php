<?php

    $users=$app['database']->selectAll('users');

require 'views/departamento/departamento.php';