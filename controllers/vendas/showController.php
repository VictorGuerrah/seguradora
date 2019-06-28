<?php


	 $vendas = $app['database']->selectAll('venda');


		foreach($vendas as $venda)
		{
			$funcionarios = $app['database']->select('funcionario', "id =".$venda->funcionario_id );
            $venda->funcionario_nome = $funcionarios[0]->nome;
            $clientes = $app['database']->select('cliente', "id =".$venda->cliente_id );
            $venda->cliente_nome = $clientes[0]->nome;
            $seguros = $app['database']->select('seguro', "id =".$venda->seguro_id );
			$venda->seguro_nome = $seguros[0]->nome;
		}
		$funcionarios=$app['database']->selectAll('funcionario');
		$clientes=$app['database']->selectAll('cliente');
		$seguros=$app['database']->selectAll('seguro');

require 'views/vendas/vendas.php';