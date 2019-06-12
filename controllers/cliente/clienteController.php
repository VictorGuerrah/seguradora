<?php

$clientes = $app['database']->selectAll('cliente');

require 'views/cliente/cliente.php';