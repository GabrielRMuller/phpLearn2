<?php

$clientes = $app['database']->selectAll('clientes');

require 'views/index.view.php';