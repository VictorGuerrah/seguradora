<?php

$router->get('','controllers/CargoController.php');
$router->get('cargos','controllers/cargo/CargoController.php');
$router->get('tipos','controllers/tipo/TipoController.php');
$router->get('clientes','controllers/cliente/ClienteController.php');
$router->get('departamentos','controllers/departamento/DepartamentoController.php');
$router->get('funcionarios','controllers/funcionario/FuncionarioController.php');
$router->get('vendas','controllers/vendas/vendasController.php');
$router->get('seguros','controllers/seguro/seguroController.php');
$router->post('departameto_add','controlllers/add_departamento.php');