<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Legal information
    |--------------------------------------------------------------------------
    |
    | Confirm these values with the entity that acts as data controller before
    | deploying. They are deliberately kept in environment variables so that
    | the legal texts and the actual organisation never get out of sync.
    |
    */
    'controller_name' => env('LEGAL_CONTROLLER_NAME', 'Gobierno de Canarias'),
    'controller_email' => env('LEGAL_CONTROLLER_EMAIL', 'sarmesp@gobiernodecanarias.org'),
    'dpo_email' => env('LEGAL_DPO_EMAIL'),
    'site_operator_name' => env('LEGAL_SITE_OPERATOR_NAME'),
    'site_operator_tax_id' => env('LEGAL_SITE_OPERATOR_TAX_ID'),
    'site_operator_address' => env('LEGAL_SITE_OPERATOR_ADDRESS'),
    'site_operator_registry' => env('LEGAL_SITE_OPERATOR_REGISTRY'),
    'hosting_provider' => env('LEGAL_HOSTING_PROVIDER'),
    'accessibility_contact_email' => env('LEGAL_ACCESSIBILITY_CONTACT_EMAIL'),
];
