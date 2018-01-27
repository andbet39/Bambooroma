<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5a6c2afbea45d6.79828011',
    'content' => '<div id="bookingform-7187-particle" class="g-content g-particle">            <div class="">
        <form id="g-bookingform-bookingform-7187" data-bookingform-id="g-bookingform-bookingform-7187" data-bookingform-token="92a03920c0e21dede47fa5ebcc5adcbd" data-bookingform-requiredmessage="" class="g-bookingform" action="#" method="post">
        <fieldset>

            <div class="g-bookingform-visible">
                                <div class="g-bookingform-item  g-bookingform-calendar" >
                                        <label for="g-bookingform-item-id-1">Check in date<sup>*</sup></label>
                                        <input type="text" class="g-bookingform-datepicker g-bookingform-item-required" name="CheckInDate" required="required" id="g-bookingform-item-id-1" placeholder="Select date" >
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </div>
                                <div class="g-bookingform-item  g-bookingform-calendar" >
                                        <label for="g-bookingform-item-id-2">Check out date<sup>*</sup></label>
                                        <input type="text" class="g-bookingform-datepicker g-bookingform-item-required" name="CheckOutDate" required="required" id="g-bookingform-item-id-2" placeholder="Select date" >
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </div>
                                <div class="g-bookingform-item g-bookingform-spinner " data-trigger="spinner">
                                        <label for="g-bookingform-item-id-3">Adults</label>
                                        <input type="text" class="" name="Adults"  id="g-bookingform-item-id-3" placeholder="" data-min="1" data-max="9">
                                                            <div class="g-bookingform-spinners">
                        <a href="javascript:;" data-spin="up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                        <a href="javascript:;" data-spin="down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                                    </div>
                                <div class="g-bookingform-item g-bookingform-spinner " data-trigger="spinner">
                                        <label for="g-bookingform-item-id-4">Children</label>
                                        <input type="text" class="" name="Children"  id="g-bookingform-item-id-4" placeholder="" data-min="0" data-max="9">
                                                            <div class="g-bookingform-spinners">
                        <a href="javascript:;" data-spin="up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                        <a href="javascript:;" data-spin="down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                                    </div>
                
                <div class="g-bookingform-button1">
                    <label for="g-bookingform-submit-top">&nbsp;</label>
                    <a href="javascript:;" class="button" id="g-bookingform-submit-top"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  Check for rooms</a>
                </div>
            </div>

            <div class="g-bookingform-hidden">
                <div class="g-bookingform-buttonback">
                    <label for="g-bookingform-back">&nbsp;</label>
                    <a href="javascript:;" class="button" id="g-bookingform-back"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                </div>
                                <div class="g-bookingform-item">
                    <label for="g-bookingform-item-name">Name<sup>*</sup></label>
                    <input type="text" name="Name" id="g-bookingform-item-name" class="g-bookingform-item-required" placeholder="Please enter your name">
                </div>
                                                <div class="g-bookingform-item">
                    <label for="g-bookingform-item-email">Email<sup>*</sup></label>
                    <input type="text" name="Email" id="g-bookingform-item-email" class="g-bookingform-item-required" placeholder="Please enter your email">
                </div>
                                <div class="g-bookingform-button2">
                    <label for="g-bookingform-submit-bottom">&nbsp;</label>
                    <a href="javascript:;" class="button" id="g-bookingform-submit-bottom">Submit</a>
                </div>
            </div>
            <div class="g-bookingform-thankyou">
                <p class="alert alert-success"><i class="fa fa-check-circle" aria-hidden="true"></i>  Thank you for making your reservation. We will be contacting you soon about the details.</p>
            </div>
            <div class="g-bookingform-error">
                <p class="alert alert-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  Failed to send your reservation. Please try later or contact administrator.</p>
            </div>

        </fieldset>
    </form>
    </div>
            </div>',
    'scripts' => [
        'footer' => [
            '4460edb3c7013d1d2bcc2e71b0371958c7e542e8b729a1657f56e9e09109498f460a1efc' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/user/themes/rt_sienna/js/datepicker.js?5a6c2af2',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ],
            'ba834b5b931e1867d018b5608f40986000f144d02f665c8558cc9e955e3dc36802e423fe' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/user/themes/rt_sienna/js/spinner.js?5a6c2af2',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ],
            '4c99d03fe29b58db5f957754e502dd79dbef996a79cd7c9fbfb09b1db4cc225407e02699' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/user/themes/rt_sienna/js/bookingform.js?5a6c2af2',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ]
        ]
    ]
];
