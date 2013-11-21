<?php

$f3=require('lib/base.php');

$f3->config('app/config/globals.ini');
$f3->config('app/config/routes.ini');
$f3->config('app/config/maps.ini');

$f3->set('db',new \DB\SQL('mysql:host='.$f3->get('DBHOST').';port='.$f3->get('DBPORT').';dbname='.$f3->get('DBNAME'),$f3->get('DBUSER'),$f3->get('DBPASS')));

$f3->route('GET /',
    function() {
        echo "hello";
    }
);


$f3->run();
