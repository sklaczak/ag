$(document).ready(function () {
    $('.addToBasketButton').click(function () {
        $.ajax({
            method: "POST",
            url: "/basket/add",
            data: {product_id: $(this).data("product_id"), quantity: 1}
        })
                .done(function (response) {
                    $('#basketResponceDialog').find('.productName').text(response.product.name);
                    $('#basketResponceDialog').find('.productPrice').text(response.product.price + ' PLN');
                    $('#basketResponceDialog').find('.productPhoto').html(
                            '<img src="'+$('#basketResponceDialog').data('server_photo')+response.product.foto+'" alt="" />'
                    );
                    $('#basketInfoPrice').text(response.basket.sum);
                    $('#basketInfoQuantity').text(response.basket.itemsQuantity);
                    $('#basketResponceDialog').modal('show');
                });
    });
});


