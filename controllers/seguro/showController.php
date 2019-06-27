<?php


	 $seguros = $app['database']->selectAll('seguro');


		foreach($seguros as $seguro)
		{
			$tipos = $app['database']->select('tipo_seguro', "id =".$seguro->tipo_seguro_id );
			$seguro->tipo_nome = $tipos[0]->nome;
		}

     	require 'views/seguro/seguro.php';