<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Color Manager',
    'description' => '',
    'category' => 'be',
    'author' => 'Christian Fries',
    'author_email' => 'hallo@christian-fries.ch',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '2.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'backend_module' => '1.0.0-1.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'classmap' => ['Classes']
    ],
];
