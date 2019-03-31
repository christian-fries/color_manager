<?php

// Define TCA modifications only for TYPO3 8+ instances
if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 8007000) {

    // Add correct renderType for color picker
    $GLOBALS['TCA']['tx_colormanager_domain_model_color']['columns']['color']['config'] = [
        'type' => 'input',
        'size' => 10,
        'eval' => 'trim,required',
        'renderType' => 'colorpicker'
    ];
}
