<?php

$app = [];

$app['config'] = require '../../config.php';

require '../../models/database/Connection.php';
require '../../models/database/QueryBuilder.php';
require '../../models/Router.php';
require '../../models/Request.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

