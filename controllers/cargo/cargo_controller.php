<?php

class controller{

	public function index(){
	 	$cargos = $app['database']->selectAll('cargo');


		foreach($cargos as $cargo)
		{
			$departamentos = $app['database']->select('departamento', "id =".$cargo->departamento_id );
			$cargo->departamento_nome = $departamentos[0]->nome;
		}

     	require 'views/cargo/cargo.php';
	}

	

}

 



