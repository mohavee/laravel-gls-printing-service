## Installation

### Step 1: Install package

Add the package in your composer.json by executing the command.

```bash
composer require webidentity/laravel-gls-printing-service
```

### Step 2: Configuration

First initialise the config file by running this command:

```bash
php artisan vendor:publish
```

With this command, initialize the configuration and modify the created file, located under `config/gls-printing-service.php`.

## Configuration
```php
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
    'soap_urls' => [
        'HU' => 'https://online.gls-hungary.com/webservices/soap_server.php?wsdl',
        'SK' => 'http://online.gls-slovakia.sk/webservices/soap_server.php?wsdl',
        'CZ' => 'http://online.gls-czech.com/webservices/soap_server.php?wsdl',
        'RO' => 'http://online.gls-romania.ro/webservices/soap_server.php?wsdl',
        'SI' => 'http://connect.gls-slovenia.com/webservices/soap_server.php?wsdl',
        'HR' => 'http://online.gls-croatia.com/webservices/soap_server.php?wsdl',
    ]
];
```

## Examples
U may call any endpoint against GLS api provided in wsdl file. You need pass array args which key is parameter name with values.
```php
GLSPrintingService::printlabel([
    'parameter_name' => 'value'
]);
```
### Print Label
```php

$data = array_merge(config('gls-printing-service.credentials'), [
        'sender_name' => '...',
        'sender_address' => '...',
        'sender_city' => '...',
        'sender_zipcode' => '...',
        'sender_country' => '...',
        'sender_contact' => '...',
        'sender_phone' => '...',
        'sender_email' => '...',
        'consig_name' => '...',
        'consig_address' => '...',
        'consig_city' => '...',
        'consig_zipcode' => '...',
        'consig_country' => '...',
        'consig_contact' => '...',
        'consig_phone' => '...',
        'consig_email' => '...',
        'pcount' => 1,
        'pickupdate' => '...',
        'content' => '',
        'clientref' => '',
        'codamount' => '',
        'codref' => '',
        'services' => [],
        'printertemplate' => 'A4_2x2',
        'printit' => true,
    ], ['timestamp' => GLSPrintingService::getTimestamp()]
);
$data['hash'] = GLSPrintingService::getglshash($data);

$response = GLSPrintingService::printlabel($data)

//pdfdata
echo base64_decode($response->pdfdata)
```

### Delete Label

```php
GLSPrintingService::deletelabels(array_merge(
    config('gls-printing-service.credentials'), ['pclids' => $pclids]
));
```

### Log Http Communication
There is enabled logging (request and response) by default. U may follow these logs by executing the command
```bash
tail -f storage/logs/laravel.log
```

### Todos

- [ ] XML serializer for endpoints which needs to work with xml
