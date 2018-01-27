<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/rt_sienna/blueprints/styles/sidecolumn.yaml',
    'modified' => 1517038322,
    'data' => [
        'name' => 'Side Column',
        'description' => 'Set the minimum width for the side column.',
        'type' => 'configuration',
        'form' => [
            'fields' => [
                'min-width' => [
                    'type' => 'input.text',
                    'label' => 'Minimum Width',
                    'description' => 'Specify the minimum width for the blocks that have g-side-column class applied to them.',
                    'default' => '150px',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                ]
            ]
        ]
    ]
];
