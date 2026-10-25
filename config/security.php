<?php

return [
    /*
    | Keep this policy in report-only mode until browser reports are reviewed
    | and every legitimate resource is covered by the external-dependency inventory.
    */
    'content_security_policy' => implode('; ', [
        "default-src 'self'",
        "base-uri 'self'",
        "object-src 'none'",
        "frame-ancestors 'self'",
        "form-action 'self'",
        "script-src 'self' https://cdn.jsdelivr.net",
        "style-src 'self' https://fonts.bunny.net https://cdn.jsdelivr.net",
        "font-src 'self' data: https://fonts.bunny.net",
        "img-src 'self' data: blob: https://www.gobiernodecanarias.org https://www.lifebeetlesazores.com https://www.rankingcyd.org https://www.iter.es https://www.itccanarias.org https://www.oipr.ci https://www.inmg.gov.cv https://encrypted-tbn0.gstatic.com",
        "connect-src 'self'",
        "frame-src 'self' https://www.youtube.com",
    ]),
];
