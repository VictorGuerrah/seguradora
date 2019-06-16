<?php


	 $vendas = $app['database']->selectAll('venda');


		foreach($vendas as $venda)
		{
			$funcionarios = $app['database']->select('funcionario', "id =".$venda->funcionario_id );
            $venda->funcionario_nome = $funcionarios[0]->nome;
            $clientes = $app['database']->select('cliente', "id =".$venda->cliente_id1 );
            $venda->cliente_nome = $clientes[0]->nome;
            $seguros = $app['database']->select('seguro', "id =".$venda->seguro_id1 );
			$venda->seguro_nome = $seguros[0]->nome;
		}

require 'views/vendas/vendas.php';