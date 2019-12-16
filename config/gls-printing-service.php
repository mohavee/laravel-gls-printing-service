<?php

return [
    'logger' => Webidentity\GLSPrintingService\BaseLogger::class,
    'log-http-communication' => true,
    'credentials' => [
        'username' => '...',
        'password' => '...',
        'senderid' => '...',
    ],
    'printer_templates' => [
        'A6' => 'A6 format, blank label',
        'A6_PP' => 'A6 format, preprinted label',
        'A6_ONA4' => 'A6 format, printed on A4',
        'A4_2x2' => 'A4 format, 4 labels on layout 2x2',
        'A4_4x1' => 'A4 format, 4 labels on layout 4x1',
    ],
    'url' => 'SK',
    'soap-urls' => [
        'HU' => 'https://online.gls-hungary.com/webservices/soap_server.php?wsdl',
        'SK' => 'http://online.gls-slovakia.sk/webservices/soap_server.php?wsdl',
        'CZ' => 'http://online.gls-czech.com/webservices/soap_server.php?wsdl',
        'RO' => 'http://online.gls-romania.ro/webservices/soap_server.php?wsdl',
        'SI' => 'http://connect.gls-slovenia.com/webservices/soap_server.php?wsdl',
        'HR' => 'http://online.gls-croatia.com/webservices/soap_server.php?wsdl',
    ]
];
