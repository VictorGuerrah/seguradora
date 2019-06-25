<?php 

    $tipos = $app['database']->selectAll('tipo_seguro');




require 'views/tipo/tipo.php';