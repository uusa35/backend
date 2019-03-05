$(document).ready(function() {
    console.log('frontend-custom.js is ready');
    $('#ModalquickView').on('show.bs.modal', function(e) {
        console.log('showing the modal');
        //get data-id attribute of the clicked element
        var id = $(e.relatedTarget).data('id');
        var name = $(e.relatedTarget).data('name');
        var image = $(e.relatedTarget).data('image');
        var description = $(e.relatedTarget).data('description');
        var price = $(e.relatedTarget).data('price');
        var currency = $(e.relatedTarget).data('currency-name');
        var url = $(e.relatedTarget).data('url');

        //populate the textbox
        console.log('the name', name);
        $(e.currentTarget).find('#element-id').text(id);
        $(e.currentTarget).find('#element-image').attr('src', image);
        $(e.currentTarget).find('#element-name').text(name);
        $(e.currentTarget).find('#element-description').text(description);
        $(e.currentTarget).find('#element-price').text(price);
        $(e.currentTarget).find('#element-currency-name').text(currency);
        $(e.currentTarget).find('#element-url').attr('href', url);
    });
});
