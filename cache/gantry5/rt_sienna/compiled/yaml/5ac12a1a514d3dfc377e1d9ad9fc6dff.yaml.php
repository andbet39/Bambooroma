<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/rt_sienna/gantry/theme.yaml',
    'modified' => 1517038322,
    'data' => [
        'details' => [
            'name' => 'Sienna',
            'version' => '1.1.4',
            'icon' => 'paper-plane',
            'date' => 'November 14, 2017',
            'author' => [
                'name' => 'RocketTheme, LLC',
                'email' => 'support@rockettheme.com',
                'link' => 'http://www.rockettheme.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/sienna.yaml'
            ],
            'copyright' => '(C) 2007 - 2016 RocketTheme, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Sienna Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'grav',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'rt_sienna',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'muli' => [
                    400 => 'gantry-theme://fonts/muli/muli-regular/muli-regular-webfont',
                    '400italic' => 'gantry-theme://fonts/muli/muli-italic/muli-italic-webfont',
                    300 => 'gantry-theme://fonts/muli/muli-light/muli-light-webfont',
                    '300italic' => 'gantry-theme://fonts/muli/muli-lightitalic/muli-lightitalic-webfont'
                ],
                'playfairdisplay' => [
                    400 => 'gantry-theme://fonts/playfairdisplay/playfairdisplay-regular/playfairdisplay-regular-webfont',
                    '400italic' => 'gantry-theme://fonts/playfairdisplay/playfairdisplay-italic/playfairdisplay-italic-webfont',
                    700 => 'gantry-theme://fonts/playfairdisplay/playfairdisplay-bold/playfairdisplay-bold-webfont',
                    '700italic' => 'gantry-theme://fonts/playfairdisplay/playfairdisplay-bolditalic/playfairdisplay-bolditalic-webfont',
                    900 => 'gantry-theme://fonts/playfairdisplay/playfairdisplay-black/playfairdisplay-black-webfont',
                    '900italic' => 'gantry-theme://fonts/playfairdisplay/playfairdisplay-blackitalic/playfairdisplay-blackitalic-webfont'
                ],
                'weather' => [
                    400 => 'gantry-theme://fonts/weather/artill_clean_icons-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'sienna',
                    1 => 'sienna-grav',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'sienna'
                ],
                'overrides' => [
                    0 => 'sienna-grav',
                    1 => 'custom'
                ]
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title3' => 'Title 3',
                    'title4' => 'Title 4',
                    'title5' => 'Title 5',
                    'title6' => 'Title 6',
                    'title-grey' => 'Title Grey',
                    'title-pink' => 'Title Pink',
                    'title-red' => 'Title Red',
                    'title-purple' => 'Title Purple',
                    'title-orange' => 'Title Orange',
                    'title-blue' => 'Title Blue',
                    'title-underline' => 'Title Underline',
                    'title-rounded' => 'Title Rounded'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4',
                    'box5' => 'Box 5',
                    'box6' => 'Box 6',
                    'box-white' => 'Box White',
                    'box-grey' => 'Box Grey',
                    'box-pink' => 'Box Pink',
                    'box-red' => 'Box Red',
                    'box-purple' => 'Box Purple',
                    'box-orange' => 'Box Orange',
                    'box-blue' => 'Box Blue'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'bordered' => 'Bordered',
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'equal-height' => 'Equal Height',
                    'g-outer-box' => 'Outer Box',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'title-center' => 'Centered Title',
                    'center' => 'Center',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'top',
                    1 => 'navigation',
                    2 => 'header',
                    3 => 'above',
                    4 => 'main',
                    5 => 'showcase',
                    6 => 'slideshow',
                    7 => 'utility',
                    8 => 'feature',
                    9 => 'expanded',
                    10 => 'extension',
                    11 => 'bottom',
                    12 => 'footer',
                    13 => 'copyright',
                    14 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints',
                    1 => 'sidecolumn'
                ]
            ]
        ]
    ]
];
