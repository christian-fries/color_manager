<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:tx_colormanager_domain_model_color',
        'label' => 'name',
        'label_userFunc' => 'CHF\ColorManager\UserFunc\Tca->colorTitle',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',

        'delete' => 'deleted',

        'searchFields' => 'name,color,',
        'iconfile' => 'EXT:color_manager/Resources/Public/Icons/tx_colormanager_domain_model_color.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, name, color',
    ],
    'types' => [
        '1' => ['showitem' => 'name, color, '],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 0,
            'config' => [
                'type' => 'passthrough',
                'default' => -0,
            ],
        ],

	    'name' => [
	        'exclude' => 0,
	        'label' => 'LLL:EXT:color_manager/Resources/Private/Language/locallang_db.xlf:tx_colormanager_domain_model_color.name',
	        'config' => [
			    'type' => 'input',
                'size' => 30,
			    'eval' => 'trim,required'
			]
	        
	    ],
	    'color' => [
	        'exclude' => 0,
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
