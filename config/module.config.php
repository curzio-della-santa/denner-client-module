<?php

return array(
    'service_manager' => array(
        'abstract_factories' => array(
            'Denner\Client\Factory\Client\ClientFactory',
        ),
        'aliases' => array(
        ),
        'invokables' => array(
        ),
        'factories' => array(
            'Denner\Client\Options\ModuleOptions' => 'Denner\Client\Factory\Options\ModuleOptionsFactory',
        ),
        'initializers' => array(
        ),
        'shared' => array(
        ),
    ),
    'denner_client' => array(
        'clients' => array(
        ),
    ),
);
