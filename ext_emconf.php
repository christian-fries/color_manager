<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Color Manager',
    'description' => '',
    'category' => 'be',
    'author' => 'Christian Fries',
    'author_email' => 'hallo@christian-fries.ch',
    'state' => 'alpha',
    'clearCacheOnLoad' => 1,
    'version' => '0.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-8.7.99',
            'backend_module' => ''
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'classmap' => array('Classes')
    ],
];
