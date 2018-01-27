<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/rt_sienna/particles/simplebooking.yaml',
    'modified' => 1517038322,
    'data' => [
        'name' => 'Simple Booking',
        'description' => 'Create simple reservation system.',
        'type' => 'particle',
        'icon' => 'fa-map',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable icon menu particles.',
                    'default' => true
                ],
                '_filtering' => [
                    'type' => 'separator.note',
                    'class' => 'settings-param',
                    'content' => '<h4>Filtering Form Configuration</h4>'
                ],
                'checkin' => [
                    'type' => 'input.text',
                    'label' => 'Check In Label',
                    'description' => 'Label for Check In form field.',
                    'default' => 'Check in date'
                ],
                'checkin_placeholder' => [
                    'type' => 'input.text',
                    'label' => 'Check In Placeholer',
                    'description' => 'Label for Check In form field placeholder.',
                    'default' => 'Select Date'
                ],
                'checkout' => [
                    'type' => 'input.text',
                    'label' => 'Check Out Label',
                    'description' => 'Label for Check Out form field.',
                    'default' => 'Check out date'
                ],
                'checkout_placeholder' => [
                    'type' => 'input.text',
                    'label' => 'Check Out Placeholer',
                    'description' => 'Label for Check Out form field placeholder.',
                    'default' => 'Select Date'
                ],
                'adults' => [
                    'type' => 'input.text',
                    'label' => 'Adults Label',
                    'description' => 'Label for Adults form field.',
                    'default' => 'Adults'
                ],
                'adults_min' => [
                    'type' => 'input.number',
                    'label' => 'Adults Minimum Value',
                    'description' => 'Minimum value.',
                    'default' => 1
                ],
                'adults_max' => [
                    'type' => 'input.number',
                    'label' => 'Adults Maximum Value',
                    'description' => 'Maximum value.',
                    'default' => 9
                ],
                'children' => [
                    'type' => 'input.text',
                    'label' => 'Children Label',
                    'description' => 'Label for Children form field.',
                    'default' => 'Children'
                ],
                'children_min' => [
                    'type' => 'input.number',
                    'label' => 'Children Minimum Value',
                    'description' => 'Minimum value.',
                    'default' => 0
                ],
                'children_max' => [
                    'type' => 'input.number',
                    'label' => 'Children Maximum Value',
                    'description' => 'Maximum value.',
                    'default' => 9
                ],
                '_submitform' => [
                    'type' => 'separator.note',
                    'class' => 'settings-param',
                    'content' => '<h4>Submit Form Configuration</h4>'
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Please note that you need <a href="https://getsimpleform.com/" target="_blank">Simple Form</a> token for Simple Booking particle to work. Obtaining token is easy and free. After registration, enter your token in field below.'
                ],
                'token' => [
                    'type' => 'input.text',
                    'label' => 'Simple Form token',
                    'description' => 'Please put your Simple Form token here.',
                    'placeholder' => 'Simple Form token'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'button' => [
                    'type' => 'input.text',
                    'label' => 'Submit Button 1 Text',
                    'description' => 'Label for Submit Button.',
                    'default' => 'Submit'
                ],
                'name' => [
                    'type' => 'input.text',
                    'label' => 'Name Label',
                    'description' => 'Label for Name form field.',
                    'default' => 'Name'
                ],
                'name_placeholder' => [
                    'type' => 'input.text',
                    'label' => 'Name Placeholder',
                    'description' => 'Placeholder for Name form field.',
                    'default' => 'Please enter your name'
                ],
                'email' => [
                    'type' => 'input.text',
                    'label' => 'Email Label',
                    'description' => 'Label for Email form field.',
                    'default' => 'Email'
                ],
                'email_placeholder' => [
                    'type' => 'input.text',
                    'label' => 'Email Placeholder',
                    'description' => 'Placeholder for Email form field.',
                    'default' => 'Please enter your email'
                ],
                'thankyou' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Thank You Message',
                    'description' => 'Customize your Thank You message.',
                    'default' => 'Thank you for making your reservation. We will be contacting you soon about the details.'
                ],
                'error' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Error Message',
                    'description' => 'Customize your Error message.',
                    'default' => 'Failed to send your reservation. Please try later or contact administrator.'
                ],
                '_items' => [
                    'type' => 'separator.note',
                    'class' => 'settings-param',
                    'content' => '<h4>Items</h4>'
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Simple Booking Items',
                    'description' => 'Add Simple Booking items.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.start' => [
                            'type' => 'input.date',
                            'label' => 'Available from:',
                            'description' => 'Select starting date for room availability'
                        ],
                        '.end' => [
                            'type' => 'input.date',
                            'label' => 'Available to:',
                            'description' => 'Select ending date for room availability'
                        ],
                        '.adults' => [
                            'type' => 'input.number',
                            'label' => 'Adults',
                            'description' => 'Maximum number of adults in a room.',
                            'placeholder' => 1
                        ],
                        '.children' => [
                            'type' => 'input.number',
                            'label' => 'Children',
                            'description' => 'Maximum number of children in a room.',
                            'placeholder' => 0
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Customize your title.'
                        ],
                        '.subtitle' => [
                            'type' => 'input.text',
                            'label' => 'Subtitle',
                            'description' => 'Customize your subtitle.'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Provide description for your item.'
                        ],
                        '.price' => [
                            'type' => 'input.text',
                            'label' => 'Price',
                            'description' => 'Customize your price.'
                        ],
                        '.subprice' => [
                            'type' => 'input.text',
                            'label' => 'Sub Price',
                            'description' => 'Customize your sub price.'
                        ],
                        '.pricedesc' => [
                            'type' => 'input.text',
                            'label' => 'Price Description',
                            'description' => 'Customize your price description.'
                        ],
                        '.button' => [
                            'type' => 'input.text',
                            'label' => 'Button Label',
                            'description' => 'Customize label for your button.',
                            'placeholder' => 'Book'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
