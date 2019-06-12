<?php

$router->get('','controllers/CargoController.php');
$router->get('cargos','controllers/cargo/CargoController.php');
$router->get('tipos','controllers/tipo/TipoController.php');
$router->get('clientes','controllers/cliente/ClienteController.php');
$router->get('departamentos','controllers/departamento/DepartamentoController.php');
$router->get('funcionarios','controllers/funcionarios/FuncionarioController.php');
$router->get('vendas','controllers/vendas/vendasController.php');