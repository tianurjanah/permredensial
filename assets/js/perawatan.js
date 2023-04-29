$(document).ready(function() {
    $('#dtHorizontalExample').DataTable({
        "scrollX": true
    });
    $('.dataTables_length').addClass('bs-select');


});
function konfirmasi(id) {
    var base_url = $('#baseurl').val();

    swal.fire({
        title: "Hapus Data ini?",
        icon: "warning",
        closeOnClickOutside: false,
        showCancelButton: true,
        confirmButtonText: 'Iya',
        confirmButtonColor: '#4e73df',
        cancelButtonText: 'Batal',
        cancelButtonColor: '#d33',
    }).then((result) => {
        if (result.value) {
            Swal.fire({
                title: "Memuat...",
                onBeforeOpen: () => {
                    Swal.showLoading()
                },
                timer: 1000,
                showConfirmButton: false,
            }).then(
                function() {
                    window.location.href = base_url + "perawatan/proses_hapus/" + id;
                }
            );
        }
    });

}
function ambilData(id) {
    var link = $('#baseurl').val();
    var base_url = link + 'perawatan/getData';

    $.ajax({
        type: 'POST',
        data: 'id=' + id,
        url: base_url,
        dataType: 'json',
        success: function(hasil) {
            $('#kode_perawatan').val(hasil[0].kode_perawatan);
            $('#kode_barang').val(hasil[0].kode_barang);
            $('#tanggal_perawatan').val(hasil[0].tanggal_perawatan);
            $('#status').val(hasil[0].status);
            $('#keterangan').val(hasil[0].keterangan);
        }
    });
}
function detail(id) {
    var base_url = $('#baseurl').val();
    window.location.href = base_url + "perawatan/detail/" + id;

}
