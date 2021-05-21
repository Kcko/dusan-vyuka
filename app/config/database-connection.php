<?php

dibi::connect([
    'driver'   => 'mysqli',
    'host'     => DATABASE['host'],
    'username' => DATABASE['username'],
    'password' => DATABASE['password'],
    'database' => DATABASE['database'],
    'charset'  => 'utf8',
]);