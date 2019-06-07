<?php

require '../../models/bootstrap.php';

$cargos = $app['database']->selectAll('cargo');

foreach($cargos as $cargo)
    {
            $departamentos = $app['database']->select('departamento', "id =".$cargo->departamento_id );
            $cargo->departamento_nome = $departamentos[0]->nome;
    }