<?php

    $funcionarios=$app['database']->selectAll('funcionario');

    foreach($funcionarios as $funcionario)
		{
			$cargos = $app['database']->select('cargo', "id =".$funcionario->cargo_id );
			$funcionario->cargo_nome = $cargos[0]->nome;
		}

require 'views/funcionario/funcionario.php';