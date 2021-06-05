$(document).ready(function() {

    $('#orderan').keypress(function(e) {
        var key = e.which;
        if (key == 13) {
            tambah_order();
        }
    });

    $('#orderan input:first').focus();
});

function tambah_order() {
    var order = document.createElement("input");
    order.setAttribute('type', 'text');
    order.setAttribute('name', 'sku[]');
    order.setAttribute('placeholder', 'Stock Keeping Unit');
    order.setAttribute('class', 'form-control sku');
    // Cek dulu kalau ada barangnya dilihat dari sku nya baru di prepend
    var sku = $('#orderan input:first').val();
    $.ajax({
        url: 'http://127.0.0.1:8000/api/inventory/track_order/product/'+sku,
        method: 'GET',
        success: function(result) {
            if (result.success == true) {
                if ($('#totalnya').text() == "-") {
                    var total = 0;
                } else {
                    var total = parseInt($('#totalnya').text());
                }
                $('#alert').css("display", "none");
                $('#orderan').prepend(order);
                $('#orderan input:first').focus();
                var nama = result.product.name;
                var harga = document.createElement("p"); 
                harga.setAttribute('class', 'form-text harga');
                harga.innerHTML = nama + "-" + result.product.price;
                total = total + parseInt(result.product.price);
                console.log(total);
                $('#totalnya').text(total);
                $('#harganya').prepend(harga);
            } else {
                $('#alert').css("display", "block");
                $('#alert').text("SKU tidak ditemukan");
            }
        }
    });
}

function hapus_terakhir() {
    if ($('.sku').length > 1) {
        $('#orderan input:first').remove();
        $('#orderan input:first').val("");
        $('#harganya p:first').remove();
    }
}
