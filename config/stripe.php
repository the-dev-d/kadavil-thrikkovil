<?php 

    return [
        'keys' => [
            "secret" => env('STRIPE_SK'),
            "public" => env('STRIPE_PK')
        ]
    ]
?>