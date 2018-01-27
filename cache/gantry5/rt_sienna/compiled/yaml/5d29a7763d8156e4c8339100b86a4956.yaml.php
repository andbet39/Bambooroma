<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/rt_sienna/blueprints/styles/font.yaml',
    'modified' => 1517038322,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the Sienna theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'muli, sans-serif, Tahoma, Geneva, Arial'
                ],
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'muli, sans-serif, Tahoma, Geneva, Arial'
                ],
                'family-promo' => [
                    'type' => 'input.fonts',
                    'label' => 'Promo Font',
                    'default' => 'playfairdisplay'
                ],
                'family-subpromo' => [
                    'type' => 'input.fonts',
                    'label' => 'SubPromo Font',
                    'default' => 'playfairdisplay italic'
                ],
                'family-weather' => [
                    'type' => 'input.fonts',
                    'label' => 'Weather Font',
                    'default' => 'weather'
                ]
            ]
        ]
    ]
];
