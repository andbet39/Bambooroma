<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/rt_sienna/blueprints/styles/bottom.yaml',
    'modified' => 1517038322,
    'data' => [
        'name' => 'Bottom Styles',
        'description' => 'Bottom styles for the Sienna theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f5f5f5'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#666666'
                ]
            ]
        ]
    ]
];
