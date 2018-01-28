jQuery(function() {
    jQuery( ".g-simplebooking-datepicker" ).datepicker({
        prevText: '<i class="fa fa-angle-left" aria-hidden="true">'+'<' + '/i>',
        nextText: '<i class="fa fa-angle-right" aria-hidden="true">'+'<' + '/i>'
    });
});

jQuery('[data-simplebooking-id]').each(function(index) {
    var parentContainer = jQuery( this );

  
    jQuery(".g-simplebooking-items .g-simplebooking-item", parentContainer).each(function(index) {
        var itemContainer = jQuery( this );

        jQuery( this ).find( ".g-simplebooking-item-container .g-simplebooking-item-button .button" ).click(function(){
            var formContainer  =jQuery( this );
            var empty = jQuery(".g-simplebooking-mainform", parentContainer).find(".g-simplebooking-item-required").filter(function() {
                if (this.value === "" || this.value === '0') {
                    return true;
                }
            });
            if(empty.length) {
                empty.addClass("g-simplebooking-item-required-highlighted");
                jQuery(".g-simplebooking-mainform", parentContainer).find(".g-simplebooking-item-required").click(function(){
                    this.removeClass("g-simplebooking-item-required-highlighted");
                });
            } else {

                var dfrom =  jQuery("#booking_dfrom").val();
                var dto =  jQuery("#booking_dto").val();

                WuBook= new _WuBook(1377875938);
                var obj={};
                obj.occupancies = itemContainer.find(".occupancy-field")[0].value;
                obj.dfrom = dfrom;
                obj.dto = dto;
                // Then, if you want to open the booking engine using Arrival Date= 21/12 and 3 nights:
                WuBook.open(obj);
            }
        });
        

    });


});
