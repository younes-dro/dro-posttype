$(function () {


    /**
     * Update taxonomy Type Pizza
     */
    $('#ala').click(function(){
        alert(this);
    });

    /**
     * Show / Hide promo fields text
     */
    $("#promo").click(function () {
        var c = $(this).prop('checked');
        if (c === true) {
            $('td.list-price-promo').show(500);
        } else {
            $('td.list-price-promo').hide(500);
        }

    });

})(jQuery);


