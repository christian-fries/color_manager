<?php
defined('TYPO3_MODE') || die();

/***************
 * Add navigation layout to pages model
 */
$additional_pages_columns = [
    'tx_colormanager_color_uid' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:tx_colormanager_domain_model_color.color',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [ 'LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:tx_colormanager_domain_model_color.color.choose', '' ]
            ],
            'foreign_table' => 'tx_colormanager_domain_model_color',
            'default' => ''
        ],
    ],
    'tx_colormanager_color' => [
        'config' => [
            'type' => 'passthrough'
        ]
    ]
];

$palette = '--palette--;LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:color.palette.title;color';

$GLOBALS['TCA']['pages']['palettes']['color']['showitem'] = 'tx_colormanager_color_uid';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $additional_pages_columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', $palette, '', 'after:subtitle');
