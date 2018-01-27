<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/rt_sienna/blueprints/styles/top.yaml',
    'modified' => 1517038322,
    'data' => [
        'name' => 'Top Styles',
        'description' => 'Top styles for the Sienna theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#58bd91'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
