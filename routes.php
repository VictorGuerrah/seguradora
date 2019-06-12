<?php

$router->get('','controllers/CargoController.php');
$router->get('cargos','controllers/cargo/CargoController.php');
$router->get('tipos','controllers/tipo/TipoController.php');
$router->get('clientes','controllers/cliente/ClienteController.php');