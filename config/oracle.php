<?php

return [
    /*
    'oracle' => [
        'driver'         => 'oracle',
        'tns'            => env('DB_TNS', ''),
        'host'           => env('DB_HOST', '10.4.0.11'),
        'port'           => env('DB_PORT', '1521'),
        'database'       => env('DB_DATABASE', 'alifdev'),
        'username'       => env('DB_USERNAME', 'acctmgmt'),
        'password'       => env('DB_PASSWORD', 'acctmgmt'),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        'edition'        => env('DB_EDITION', 'ora$base'),
        'server_version' => env('DB_SERVER_VERSION', '10.2.0.5.0'),
    ],
    */
    'oracle' => [
        'driver'        => 'oracle',
        'host'          => '10.4.0.11',
        'port'          => '1521',
        'database'      => 'alifdev',
        'username'      => 'acctmgmt',
        'password'      => 'acctmgmt',
        'charset'       => 'utf8',
        'prefix'        => '',
        'prefix_schema' => '',
    ],
];
