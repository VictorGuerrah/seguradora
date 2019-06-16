<?php

// Inicial
$router->get('','controllers/cargo/CargoController.php');

//Cargo
$router->get('cargos','controllers/cargo/CargoController.php');

//Tipo
$router->get('tipos','controllers/tipo/TipoController.php');

//Cliente
$router->get('clientes','controllers/cliente/ClienteController.php');

//Departamento
$router->get('departamentos','controllers/departamento/showController.php');
$router->post('addDepartamento','controllers/departamento/addController.php');
$router->post('deleteDepartamento','controllers/departamento/deleteController.php');

//Funcionario
$router->get('funcionarios','controllers/funcionario/FuncionarioController.php');

//Venda
$router->get('vendas','controllers/vendas/vendasController.php');

//Seguro
$router->get('seguros','controllers/seguro/seguroController.php');

//Departamento
$router->post('departameto_add','controlllers/add_departamento.php');