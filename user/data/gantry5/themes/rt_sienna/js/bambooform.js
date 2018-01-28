

jQuery('[data-bookingform-id]').each(function(index) {
    var parentContainer = jQuery( this );
    jQuery( this ).find( ".g-bookingform-button1 .button" ).click(function(){
        var empty = jQuery(".g-bookingform-visible", parentContainer).find(".g-bookingform-item-required").filter(function() {
            return this.value === "";
        });
        if(empty.length) {
            empty.addClass("g-bookingform-item-required-highlighted");
            jQuery(".g-bookingform-visible", parentContainer).find(".g-bookingform-item-required").click(function(){
                this.removeClass("g-bookingform-item-required-highlighted");
            });
        } else {
           /* jQuery(".g-bookingform-visible", parentContainer).hide();
            jQuery(".g-bookingform-hidden", parentContainer).fadeIn().css("display", "flex");
*/
            WuBook= new _WuBook(1377875938);
            var data = parentContainer.serialize().split("&");
            console.log(data);
            var obj={};
            for(var i=0;i<data.length;i++)
            {
                console.log(data[i]);
                obj[data[i].split("=")[0]] = data[i].split("=")[1];
            }
            // Then, if you want to open the booking engine using Arrival Date= 21/12 and 3 nights:
            WuBook.open(obj);
        }

    });

    
    
    jQuery("#dfrom").datepicker({
    dateFormat: "dd/mm/yy",
    prevText: '<i class="fa fa-angle-left" aria-hidden="true">'+'<' + '/i>',
    nextText: '<i class="fa fa-angle-right" aria-hidden="true">'+'<' + '/i>',
    minDate: "today",
    onSelect: function () {
        var dt2 = jQuery('#dto');
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

       
        //$(this).datepicker('option', 'minDate', minDate);
    }
});
    jQuery('#dto').datepicker({
      dateFormat: "dd/mm/yy",
      prevText: '<i class="fa fa-angle-left" aria-hidden="true">'+'<' + '/i>',
      nextText: '<i class="fa fa-angle-right" aria-hidden="true">'+'<' + '/i>'
    });



});
