<?php

$database = require '../../models/bootstrap.php';

$router = new Router;

require Router::load('routes.php')
    ->direct(Request::uri());

require 'routes.php';