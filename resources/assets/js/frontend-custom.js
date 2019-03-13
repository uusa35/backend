$(document).ready(function() {
    console.log('frontend-custom.js is ready');
    $('#ModalquickView').on('show.bs.modal', function(e) {
        console.log('showing the modal');
        //get data-id attribute of the clicked element
        var id = $(e.relatedTarget).data('id');
        var sku = $(e.relatedTarget).data('sku');
        var name = $(e.relatedTarget).data('name');
        var image = $(e.relatedTarget).data('image');
        var description = $(e.relatedTarget).data('description');
        var price = $(e.relatedTarget).data('price');
        var currency = $(e.relatedTarget).data('currency-name');
        var url = $(e.relatedTarget).data('url');
        var qty = $(e.relatedTarget).data('qty');

        //populate the textbox
        $(e.currentTarget).find('#element-id').text(id);
        $(e.currentTarget).find('#element-sku').text(sku);
        $(e.currentTarget).find('#element-image').attr('src', image);
        $(e.currentTarget).find('#element-name').text(name);
        $(e.currentTarget).find('#element-description').text(description);
        $(e.currentTarget).find('#element-price').text(price);
        $(e.currentTarget).find('#element-currency-name').text(currency);
        $(e.currentTarget).find('#element-qty').text(qty);
        $(e.currentTarget).find('#element-url').attr('href', url);
    });

    // Product Page --> add Product to Cart
    // OnChanging Size DropDown
    $('#size').on('change', function(e) {
        $('a[id^="color-id-"]').addClass('d-none');
        $('a[id^="color-id-"]').attr('qty', '');
        $('li[class^="color-id-element"]').removeClass('active');
        // reset the max-qty
        $('#max-qty').attr('size', 1);
        $('#max-qty').attr('value', 1);
        $('#add_to_cart').attr('disabled', 'disabled');
        size_id = e.target.value;
        product_id = $('#product_id').attr('value');
        $('input[name=size_id]').attr('value', size_id);
        // reset the qty input
        $('input[name=qty]').attr('value', 1);
        return axios.get('/api/qty', {params: {size_id, product_id}}).then(r => {
            if (r.data.length >= 1) {
                $('#color').removeClass('d-none');
                _.each(r.data, (e, i) => {
                    console.log('the',e);
                    color_element = $(`#color-id-${e.color_id}`);
                    color_element.removeClass('d-none');
                    color_element.attr('data-qty', e.qty);
                    color_element.attr('data-product-attribute-id', e.id);
                });
            }
        }).catch(e => console.log(e));
    });

    $('a[id^="color-id-"]').on('click', function(e) {
        color_id = $(this).data('color-id');
        qty = $(this).data('qty');
        product_attribute_id = $(this).data('product-attribute-id');
        $('input[name=color_id]').attr('value', color_id);
        $('#max-qty').attr('size', qty);
        $('input[name=size_id]').attr('value', size_id);
        $('input[name=product_attribute_id]').attr('value', product_attribute_id);
        $('#add_to_cart').attr('disabled', false);
    });

    $('.plus-btn').on('click', function() {
        let qty = $('input[name=qty]');
        currentQty = Number(qty.attr('value'));
        maxSize = Number($('#max-qty').attr('size'));
        newQty = Number(_.sum([currentQty, 1]));
        if (newQty <= maxSize) {
            qty.attr('value', newQty);
            $('#max-qty').attr('value', newQty);
        }
    })

    $('.minus-btn').on('click', function() {
        let qty = $('input[name=qty]');
        currentQty = parseInt(qty.attr('value'));
        maxSize = Number($('#max-qty').attr('size'));
        newQty = _.sum([currentQty, -1]);
        if (newQty <= maxSize  && newQty > 0) {
            qty.attr('value', newQty);
            $('#max-qty').attr('value', newQty);
        }
    })

});
