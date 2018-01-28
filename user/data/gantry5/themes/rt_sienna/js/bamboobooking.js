jQuery(function() {

    jQuery("#booking_dfrom").datepicker({
        dateFormat: "dd/mm/yy",
        prevText: '<i class="fa fa-angle-left" aria-hidden="true">'+'<' + '/i>',
        nextText: '<i class="fa fa-angle-right" aria-hidden="true">'+'<' + '/i>',
        minDate: "today",
        onSelect: function () {
            var dt2 = jQuery('#booking_dto');
            var dt1 = jQuery('#booking_dfrom');
            var startDate = jQuery(this).datepicker('getDate');
            //add 30 days to selected date
            startDate.setDate(startDate.getDate() + 30);
            var minDate = jQuery(this).datepicker('getDate','1d');
            var d1dt = minDate
            minDate.setDate(minDate.getDate()+1); 


            //minDate of dt2 datepicker = dt1 selected day
            dt2.datepicker('setDate', minDate);
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            //first day which can be selected in dt2 is selected date in dt1
            dt2.datepicker('option', 'minDate', minDate);
            //same for dt1
            //$(this).datepicker('option', 'minDate', d1dt);
        }
    });
        jQuery('#booking_dto').datepicker({
          dateFormat: "dd/mm/yy",
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
