$(document).ready(function () {

    $("#add_button").click(function () {

        let product = $(this).data('product');

        $.post('http://' + window.location.hostname + '/models/requests/products.php', {type: 'add_to_cart', id_product: product.id_product}, function (data) {
           alert('Producto agregado al carrito');
        });
    });
});