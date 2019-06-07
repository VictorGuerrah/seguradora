<?php

$cargos = $app['database']->selectAll('cargo');

require '../../views/cargo/cargo.php';