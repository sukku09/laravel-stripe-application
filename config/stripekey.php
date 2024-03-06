<?php

return [

    /**
     * Stripe Keys
     */
    'STRIPE_KEY' => env('STRIPE_KEY', ''), //If not set in env, default value will empty
    'STRIPE_SECRET' => env('STRIPE_SECRET', '') //If not set in env, default value will empty

];
