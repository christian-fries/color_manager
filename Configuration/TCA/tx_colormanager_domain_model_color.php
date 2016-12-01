<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:tx_colormanager_domain_model_color',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,

        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',

        ],
        'searchFields' => 'title,color,',
        'iconfile' => 'EXT:color_manager/Resources/Public/Icons/tx_colormanager_domain_model_color.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, color',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, color, '],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_colormanager_domain_model_color',
                'foreign_table_where' => 'AND tx_colormanager_domain_model_color.pid=###CURRENT_PID### AND tx_colormanager_domain_model_color.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],

	    'title' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:tx_colormanager_domain_model_color.title',
	        'config' => [
			    'type' => 'input',
                'size' => 30,
                'max' => 255,
			    'eval' => 'trim,required'
			]
	        
	    ],
	    'color' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:tx_colormanager_domain_model_color.color',
	        'config' => [
			    'type' => 'input',
			    'size' => 10,
			    'eval' => 'trim,required',
                'wizards' => array(
                    'colorChoice' => array(
                        'type' => 'colorbox',
                        'title' => 'LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:tx_colormanager_domain_model_color.color.choose',
                        'module' => array(
                            'name' => 'wizard_colorpicker',
                        ),
                        'JSopenParams' => 'height=600,width=380,status=0,menubar=0,scrollbars=1',
                    )
                )
			],
	        
	    ],
        
    ],
];
