$(document).ready(function() {
    var grandTotal = $('.grandTotal').attr('value');
    console.log('grandTotal', grandTotal);
    $('.grossTotal').attr('value', grandTotal);
    $('#grossTotal').html(grandTotal);
    $('#forward').attr('disabled', 'disabled');
    $('#shipment_package').on('change', function(e) {
        var shipmentPackageId = e.target.value;
        var charge = $(this).find(':selected').data("charge");
        var is_local = $(this).find(':selected').data("is_local");
        $('#branch').html('').addClass('hidden');
        $('.branches').addClass('hidden');
        $('#branch_address').html('').addClass('hidden');
        $('#free_shipment').addClass('hidden').attr('checked', false);
        $('.free_shipment').addClass('hidden');
        if (is_local) {
            $('#free_shipment').toggleClass('hidden');
            $('.free_shipment').toggleClass('hidden');
            $('#free_shipment').click(function() {
                if ($(this).is(':checked')) {
                    $('.branches').toggleClass('hidden');
                    $('#branch').toggleClass('hidden');
                    $('#branch_address').toggleClass('hidden');
                    axios.get('/api/branch').then(r => {
                        return r.data.map(function(v) {
                            $('#branch').append(`<option value="${v.id}">${v.name}</option>`);
                        });
                    }).catch(e => console.log(e));
                    $('#chargeVal').html('0');
                    $('.charge').attr('value', 0);
                    var grandTotal = $('.grandTotal').attr('value');
                    $('.grossTotal').attr('value', grandTotal);
                    $('.grandTotal').attr('value', grandTotal);
                    $('#grossTotal').html(`<p>${grandTotal}</p>`);
                    $('#forward').removeAttr('disabled');
                } else {
                    $('.branches').toggleClass('hidden');
                    $('#branch').toggleClass('hidden');
                    $('#branch_address').toggleClass('hidden');
                    $('.charge').attr('value', charge);
                    $('#chargeVal').html(charge);
                    var grandTotal = $('.grandTotal').attr('value');
                    var grossTotal = parseFloat(grandTotal) + parseFloat(charge);
                    $('.grossTotal').attr('value', grossTotal);
                    $('.grandTotal').attr('value', grandTotal);
                    $('#grossTotal').html(`<p>${grossTotal}</p>`);
                    $('#forward').removeAttr('disabled');
                }
            });
            $('.charge').attr('value', charge);
            $('#chargeVal').html(parseFloat(!isNaN(charge) ? charge : 0));
            var grandTotal = $('.grandTotal').attr('value');
            var grossTotal = parseFloat(grandTotal) + parseFloat(charge);
            console.log('charge is', charge);
            console.log('grandTotal new', grandTotal);
            console.log('grossTotal new ', grossTotal);
            $('.grossTotal').attr('value', grossTotal);
            $('.grandTotal').attr('value', grandTotal);
            $('#grossTotal').html(`${grossTotal}`);
            $('#forward').removeAttr('disabled');
        } else {
            // old code that works with just OneCharge Price for each order
            // $('.charge').attr('value', charge);
            // var grandTotal = $('.grandTotal').attr('value');
            // console.log('isnull', isNaN(charge));
            // $('#chargeVal').html(parseFloat(!isNaN(charge) ? charge : 0));
            // var grossTotal = parseFloat(grandTotal) + parseFloat(!isNaN(charge) ? charge : 0);
            // $('.grossTotal').attr('value', grossTotal);
            // $('.grandTotal').attr('value', grandTotal);
            // $('#grossTotal').html(`${grossTotal}`);
            // $('#forward').removeAttr('disabled');


            // here we will calculate the shipment according to number of products
            var cartCount = parseFloat($('.cart_count').attr('value'));
            var finalShipment = parseFloat(cartCount * charge);
            console.log('cartCount', cartCount);
            console.log('finalShipment', finalShipment);
            console.log('isnull', isNaN(charge));
            $('.charge').attr('value', finalShipment);
            var grandTotal = $('.grandTotal').attr('value');
            $('#chargeVal').html(parseFloat(!isNaN(finalShipment) ? finalShipment : 0));
            var grossTotal = parseFloat(grandTotal) + parseFloat(!isNaN(finalShipment) ? finalShipment : 0);
            $('.grossTotal').attr('value', grossTotal);
            $('.grandTotal').attr('value', grandTotal);
            $('#grossTotal').html(`${grossTotal}`);
            $('#forward').removeAttr('disabled');
        }
        console.log('charge', charge);
        console.log('grossTotal', grossTotal);
        console.log('grandTotal', grandTotal);
    });
    $('#branch').on('change', function(e) {
        $('#branch_address').html('');
        var branchAddress = $(this).find(':selected').data('address');
        $(this).append(`<p>${branchAddress}</p>`)
    });
});