<?php

$config = require '../../config.php';

require '../../models/database/Connection.php';
require '../../models/database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);

