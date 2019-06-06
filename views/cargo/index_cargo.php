<?php

$database = require 'bootstrap.php';

$cargos = $database->selectAll('cargo');