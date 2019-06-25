<?php

// Inicial
$router->get('login', 'views/login/login.php');
$router->get('', 'controllers/cargo/showController.php');

//Cargo
$router->get('cargos', 'controllers/cargo/showController.php');
$router->post('addCargo', 'controllers/cargo/addController.php');
$router->post('deleteCargo', 'controllers/cargo/deleteController.php');
$router->post('updateCargo', 'controllers/cargo/updateController.php');

//Tipo
$router->get('tipos', 'controllers/tipo/showController.php');
$router->post('addTipo', 'controllers/tipo/addController.php');
$router->post('deleteTipo', 'controllers/tipo/deleteController.php');
$router->post('updateTipo', 'controllers/tipo/updateController.php');

//Cliente
$router->get('clientes', 'controllers/cliente/ClienteController.php');

//Departamento
$router->get('departamentos', 'controllers/departamento/showController.php');
$router->post('addDepartamento', 'controllers/departamento/addController.php');
$router->post('deleteDepartamento', 'controllers/departamento/deleteController.php');
$router->post('updateDepartamento', 'controllers/departamento/updateController.php');

//Funcionario
$router->get('funcionarios', 'controllers/funcionario/showController.php');
$router->post('addFuncionarios', 'controllers/funcionario/addController.php');

//Venda
$router->get('vendas', 'controllers/vendas/vendasController.php');

//Seguro
$router->get('seguros', 'controllers/seguro/seguroController.php');

//Departamento
$router->post('departameto_add', 'controlllers/add_departamento.php');
