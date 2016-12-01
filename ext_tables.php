<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'CHF.ColorManager',
                'tools', // Make module a submodule of 'tools'
                'admin', // Submodule key
                '', // Position
                [
                    'Color' => 'list',
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:' . $extKey . '/ext_icon.gif',
                    'labels' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_admin.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Color Manager');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_colormanager_domain_model_color', 'EXT:color_manager/Resources/Private/Language/locallang_csh_tx_colormanager_domain_model_color.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_colormanager_domain_model_color');

    },
    $_EXTKEY
);
