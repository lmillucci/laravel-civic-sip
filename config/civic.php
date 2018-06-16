<?php

return [
    'applicationID' => env('CIVIC_APPLICATION_ID'),
    'applicationSecret' => env('CIVIC_APPLICATION_SECRET'),
    'privateSigningKey' => env('CIVIC_PRIVATE_SIGNING_KEY'),
    'environment' => env('CIVIC_ENVIRONMENT', 'prod'),
];