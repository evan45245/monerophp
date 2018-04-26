<?php

return [
    'monero' => [
        'address'  => env('MONERO_ADDRESS'),
        'port'   => env('MONERO_PORT'),
    ],
    'monerov' => [
        'address'  => env('MONEROV_ADDRESS'),
        'port'   => env('MONEROV_PORT'),
    ],
	'stellite' => [
        'address'  => env('STELLITE_ADDRESS'),
        'port'   => env('STELLITE_PORT'),
    ],
	'pass'  => env('CRYPTONOTE_PASS'),
    'pass2' => env('CRYPTONOTE_PASS2'),
];
