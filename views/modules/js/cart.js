$(document).ready(function () {
    $("#checkout").click(function () {
        $.post('http://' + window.location.hostname + '/models/requests/products.php', {type: 'checkout'}, function (data) {
            alert('Gracias por su compra');

            location.href = 'http://' + window.location.hostname;
        });
    });
});