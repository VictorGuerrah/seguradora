<?php


	 $seguros = $app['database']->selectAll('seguro');


		foreach($seguros as $seguro)
		{
			$tipos = $app['database']->select('tipo_seguro', "id =".$seguro->tipo_seguro_id );
			$seguro->tipo_seguro_nome = $tipos[0]->nome;
		}
		$tipos=$app['database']->selectAll('tipo_seguro');

		 require 'views/seguro/seguro.php';
		 
