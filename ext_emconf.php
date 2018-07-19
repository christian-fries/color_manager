<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Color Manager',
    'description' => '',
    'category' => 'be',
    'author' => 'Christian Fries',
    'author_email' => 'hallo@christian-fries.ch',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
            'backend_module' => '0.7.1-0.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'classmap' => ['Classes']
    ],
];
