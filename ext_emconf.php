<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Color Manager',
    'description' => '',
    'category' => 'be',
    'author' => 'Christian Fries',
    'author_email' => 'hallo@christian-fries.ch',
    'state' => 'alpha',
    'clearCacheOnLoad' => 1,
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-7.6.99',
            'backend_module' => ''
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'classmap' => array('Classes')
    ],
];
