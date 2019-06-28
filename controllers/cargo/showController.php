<?php


	 $cargos = $app['database']->selectAll('cargo');


		foreach($cargos as $cargo)
		{
			$departamentos = $app['database']->select('departamento', "id =".$cargo->departamento_id );
			$cargo->departamento_nome = $departamentos[0]->nome;
		}
		$departamentos=$app['database']->selectAll('departamento');
		
     	require 'views/cargo/cargo.php';
	


 



