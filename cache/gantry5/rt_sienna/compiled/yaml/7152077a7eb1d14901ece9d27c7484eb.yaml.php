<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/rt_sienna/blueprints/styles/navigation.yaml',
    'modified' => 1517038322,
    'data' => [
        'name' => 'Navigation Styles',
        'description' => 'Navigation styles for the Sienna theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => 'rgba(0,0,0, 0)'
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
