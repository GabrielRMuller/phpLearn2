<?php

require 'views/partials/head.php';

    try{

        $app['database']->insert('clientes', $_POST['nome']);

    }catch(PDOexception $e){

        $e->getMessage();

    }
require 'views/partials/footer.php';