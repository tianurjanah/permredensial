function validateForm() {
    var nama_kategori = document.forms["myForm"]["nama_kategori"].value;

    if (nama_kategori == "") {
        validasi('Nama Kategori wajib di isi!', 'warning');
        return false;
    }

}

function validateFormUpdate() {
    var nama_kategori = document.forms["myFormUpdate"]["nama_kategori"].value;
    var ket = document.forms["myFormUpdate"]["ket"].value;

    if (nama_kategori == "") {
        validasi('Nama Kategori tidak boleh kosong!', 'warning');
        return false;
    } 

}

function validasi(judul, status) {
    swal.fire({
        title: judul,
        icon: status,
        confirmButtonColor: '#4e73df',
    });
}