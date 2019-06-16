<?php

    $funcionarios=$app['database']->selectAll('funcionario');

    foreach($cargos as $cargo)
		{
            $funcionarios = $app['database']->select('funcionarios', "id =".$cargo->funcionarios_id );
            $cargo->funcionarios_nome = $funcionarios[0]->nome;
			$cargo->departamento_nome = $departamentos[0]->nome;
		}

require 'views/funcionario/funcionario.php';