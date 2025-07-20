<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Aggiungi qui eventuali endpoint personalizzati

    'allowed_methods' => ['*'], // Permetti tutti i metodi HTTP (GET, POST, PUT, DELETE, ecc.)

    //'allowed_origins' => ['*'], // Permetti tutte le origini (modifica in produzione!)

    'allowed_origins' => ['http://localhost:5174'], // In alternativa, solo il frontend React

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Permetti tutti gli header

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,
];
