$('#tabel_stok').DataTable();

function hapus(produk_id) {
    $.ajax({
        url: "http://127.0.0.1:8000/api/inventory/stock_management/hapus?id="+produk_id,
        method: "DELETE",
        success: function(result) {
            console.log(result);
            window.location.reload();
        }
    });
}
