<?php

    $funcionarios=$app['database']->selectAll('funcionario');

require 'views/funcionario/funcionario.php';