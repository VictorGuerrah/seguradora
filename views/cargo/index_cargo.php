<?php

$database = require '../../models/database/bootstrap.php';

$cargos = $database->selectAll('cargo');

$routes = [
    '' => '../../controllers/cargo/cargo_controller.php',
    '../departamento/departamento.php' => '../../controllers/departamento/departamento_controller.php',
    '../funcionario/funcionario.php' => '../../controllers/funcionario/funcionario_controller.php',
    '../seguro/seguro.php' => '../../controllers/seguro/seguro_controller.php',
    '../tipo/tipo.php' => '../../controllers/tipo/tipoe_controller.php',
    '../vendas/vendas.php' => '../../controllers/vendas/vendas_controller.php',
];