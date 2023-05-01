function validasi(judul, status) {
    swal.fire({
        title: judul,
        icon: status,
        confirmButtonColor: '#4e73df',
    });
}


function fileIsValid(fileName) {
    var ext = fileName.match(/\.([^\.]+)$/)[1];
    ext = ext.toLowerCase();
    var isValid = true;
    switch (ext) {
        case 'png':
        case 'jpeg':
        case 'jpg':
        case 'tiff':
        case 'gif':
        case 'tif':
        case 'pdf':

            break;
        default:
            this.value = '';
            isValid = true;
    }
    return isValid;
}

// function VerifyFileNameAndFileSize() {
//     var file = document.getElementById('pasfoto').files[0];
//     if (file != null) {
//         var fileName = file.name;
//         if (fileIsValid(fileName) == false) {
//             validasi('Format bukan gambar!', 'warning');
//             document.getElementById('pasfoto').value = null;
//             return false;
//         }
//         var content;
//         var size = file.size;
//         if ((size != null) && ((size / (1024 * 1024)) > 3)) {
//             validasi('Ukuran maximum 1024px', 'warning');
//             document.getElementById('pasfoto').value = null;
//             return false;
//         }

//         var ext = fileName.match(/\.([^\.]+)$/)[1];
//         ext = ext.toLowerCase();
//         $(".custom-file-label").addClass("selected").html(file.name);
//         // document.getElementById('outputImg').src = window.URL.createObjectURL(file);
//         return true;

//     } else
//         return false;
// }