<?php

    $departamentos=$app['database']->selectAll('departamento');

require 'views/departamento/departamento.php';