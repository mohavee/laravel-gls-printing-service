<?php

return [
    'enum' => [
        'services' => [
            'T12' => 'Express Service',
            'PSS' => 'Pick&Ship Service Pickup data in format yyyy-MM-dd',
            'PRS' => 'Pick&Return Service Pickup data in format yyyy-MM-dd',
            'XS' => 'Exchange Service • it is necessary to print second label for return parcel',
            'SZL' => 'DocumentReturn Service Document number – string, max. 15 char',
            'INS' => 'DeclaredValueInsurance Service Value of the parcel',
            'SBS' => 'Standby Service',
            'DDS' => 'DayDefinite Service Date of delivery in format yyyy-MM-dd',
            'SDS' => 'ScheduledDelivery Service Time range of delivery in format HH:mm-HH:mm',
            'SAT' => 'Saturday Service',
            'AOS' => 'AddresseeOnly Service Name of the recipient / contact person can be used',
            '24H' => 'Guaranteed24 Service',
            'EXW' => 'ExWorks Service',
            'SM1' => 'SMS Service SMS Phone number and SMS text in format ”phone nr in international format|sms text”. Variable #ParcelNr# can beused for parcel number.',
            'SM2' => 'PreAdvice Service SMS Phone number in international format',
            'CS1' => 'Contact Service Recipient phone number / contact phone number can be used',
            'TGS' => 'ThinkGreen Service',
            'FDS' => 'FlexDelivery Service Email address',
            'FSS' => 'FlexDeivery SMS Service SMS phone number in international format • not available without FDS',
            'PSD' => 'ShopDelivery Service DropOffPoint ID',
            'DPV' => 'DeclaredParcelValue Used in case of HR, 20xxx zip codes, to declare value of the parcel',
        ],
        'printer_templates' => [
            'A6' => 'A6 format, blank label',
            'A6_PP' => 'A6 format, preprinted label',
            'A6_ONA4' => 'A6 format, printed on A4',
            'A4_2x2' => 'A4 format, 4 labels on layout 2x2',
            'A4_4x1' => 'A4 format, 4 labels on layout 4x1',
        ],
        'error_codes' => [
            0 => 'OK',
            1 => 'Authentication failed',
            2 => 'Invalid hash',
            3 => 'Unable to store data please try again later',
            4 => 'Invalid printer template please check documentation',
            5 => 'Missing parameters:',
            6 => 'Invalid timestamp',
            7 => 'Invalid sender country',
            8 => 'Invalid consignee country',
            9 => 'Invalid sender zipcode',
            10 => 'Invalid consignee zipcode',
            11 => 'Invalid pickup date',
            12 => 'Parcel count must be between 1 and 99',
            13 => 'Missing contact person for export parcel',
            14 => 'COD is not allowed to this export country',
            15 => 'Max value for COD is:',
            16 => 'Invalid COD rounding the smallest fraction is',
            17 => 'Invalid service code(s):',
            18 => 'Invalid service combination(s):',
            19 => 'Service(s) not available in pickup country:',
            20 => 'Service(s) not available between sender and consignee country:',
            21 => 'Service(s) not available on consignee country/zipcode:',
            22 => 'Invalid / missing parameters for service(s):',
            23 => 'FSS service is valid only with ordered FDS service',
            24 => 'For parcels to HR with zipcode 20xxx please use DPV parameter info to send declared parcel value for parcel',
            25 => 'Same request sent 5 times within last 5 minutes!',
        ],
    ],
];