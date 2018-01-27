<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/rt_sienna/particles/bookblock.yaml',
    'modified' => 1517038322,
    'data' => [
        'name' => 'BookBlock',
        'description' => 'Display items in BookBlock layout.',
        'type' => 'particle',
        'icon' => 'fa-book',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'overrideable' => false,
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable icon menu particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Blocks',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.category' => [
                            'type' => 'input.text',
                            'label' => 'Category',
                            'description' => 'Customize the Category.',
                            'placeholder' => 'Enter the item Category'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Customize the Title.',
                            'placeholder' => 'Enter the item Title'
                        ],
                        '.intro' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Intro',
                            'description' => 'Customize the intro.',
                            'placeholder' => 'Enter short intro'
                        ],
                        '.content' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Content',
                            'description' => 'Customize the content.',
                            'placeholder' => 'Enter content here'
                        ],
                        '.readmore' => [
                            'type' => 'input.text',
                            'label' => 'Read More Label',
                            'description' => 'Specify the Read More label.'
                        ],
                        '.readmorelink' => [
                            'type' => 'input.text',
                            'label' => 'Read More Link',
                            'description' => 'Specify the Read More link.'
                        ],
                        '.readmoretarget' => [
                            'type' => 'select.select',
                            'label' => 'Read More Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_self',
                            'options' => [
                                '_self' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.readmoreclass' => [
                            'type' => 'input.selectize',
                            'label' => 'Read More Classes',
                            'description' => 'CSS class names for the Read More button.'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.imagetitle' => [
                            'type' => 'input.text',
                            'label' => 'Image Title',
                            'description' => 'Customize the Image Title.',
                            'placeholder' => 'Enter the Image Title'
                        ],
                        '.imagedesc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Image Description',
                            'description' => 'Customize the image description.',
                            'placeholder' => 'Enter image description'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
