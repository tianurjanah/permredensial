<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>kompetensi/selanjutnya" name="myForm" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>barang" class="btn btn-md btn-circle btn-info">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h3 class="h3 mb-0 text-gray-800">Berkas Pengajuan Kredensial</h3>
            </div>
            <a href="<?= base_url() ?>kompetensi/selanjutnya" class="btn btn-primary btn-md btn-icon-split" onsubmit=getData()>
                <span class="text text-white">Selanjutnya</span>
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
            </a>

        </div>

        <div class="d-sm-flex  justify-content-between mb-0">
            <div class="col-lg-12 mb-4">
                <!-- Page Heading -->

        <div class="d-sm-flex  justify-content-between mb-0">
            <div class="col-lg-12 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-info shadow mb-4">
                    <div class="card-header py-3 bg-info">
                        <h6 class="m-0 font-weight-bold text-white">Form Pengajuan</h6>
                    </div>

                    <div class="card-body">
                        <div class="col-lg-12">
                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian1" aria-expanded="false" aria-controls="Bagian1">
                                BIODATA
                            </button>
                        </p> <br>
                            <div class="collapse mb-4" id="Bagian1">
                                <div class="card card-body">
                                    <table class="table table-hover" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center">Dokumen</th>
                                                <th colspan="2" class="text-center">Ceklist</th>
                                            </tr>
                                            <tr>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Surat Lamaran</label>
                                                        <input class="form-control" name="suratlamaran" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="suratlamaran" id="lamaran1">
                                                    <label class="form-check-label" for="lamaran1">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="suratlamaran" id="lamaran2">
                                                    <label class="form-check-label" for="lamaran2">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Curicullum Vitae (CV)</label>
                                                        <input class="form-control" name="cv" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="cv" id="cv1">
                                                    <label class="form-check-label" for="cv1">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="cv" id="cv2">
                                                    <label class="form-check-label" for="cv2">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Formulir Data Karyawan</label>
                                                        <input class="form-control" name="form" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="form" id="form1">
                                                    <label class="form-check-label" for="form1">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="form" id="form2">
                                                    <label class="form-check-label" for="form2">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Scan KTP</label>
                                                        <input class="form-control" name="ktp" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="ktp" id="ktp1">
                                                    <label class="form-check-label" for="ktp1">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="ktp" id="ktp2">
                                                    <label class="form-check-label" for="ktp2">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian2" aria-expanded="false" aria-controls="Bagian2">
                                IJAZAH
                            </button>
                        </p> <br>

                        <div class="collapse mb-4" id="Bagian2">
                            <div class="card card-body">
                                    <table class="table table-hover" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center">Dokumen</th>
                                                <th colspan="2" class="text-center">Ceklist</th>
                                            </tr>
                                            <tr>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Scan Ijazah Diploma</label>
                                                        <input class="form-control" name="id3" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="id3" id="id31">
                                                    <label class="form-check-label" for="id31">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="id3" id="id32">
                                                    <label class="form-check-label" for="id32">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Scan Ijazah Sarjana</label>
                                                        <input class="form-control" name="is1" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="is1" id="is11">
                                                    <label class="form-check-label" for="is11">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="is1" id="is12">
                                                    <label class="form-check-label" for="is12">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Scan Ijazah Master</label>
                                                        <input class="form-control" name="is2" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="is2" id="is21">
                                                    <label class="form-check-label" for="is21">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="is2" id="is22">
                                                    <label class="form-check-label" for="is22">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian3" aria-expanded="false" aria-controls="Bagian3">
                                TRANSKIP NILAI
                            </button>
                        </p><br>

                            <div class="collapse mb-4" id="Bagian3">
                                <div class="card card-body">
                                    <table class="table table-hover" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center">Dokumen</th>
                                                <th colspan="2" class="text-center">Ceklist</th>
                                            </tr>
                                            <tr>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Scan Transkip Nilai Diploma</label>
                                                        <input class="form-control" name="td3" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="td3" id="td31">
                                                    <label class="form-check-label" for="td31">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="td3" id="td32">
                                                    <label class="form-check-label" for="td32">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Scan Transkip Nilai Sarjana</label>
                                                        <input class="form-control" name="ts1" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="ts1" id="ts11">
                                                    <label class="form-check-label" for="ts11">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="ts1" id="ts12">
                                                    <label class="form-check-label" for="ts12">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Scan Transkip Nilai Master</label>
                                                        <input class="form-control" name="ts2" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="ts2" id="ts21">
                                                    <label class="form-check-label" for="ts21">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="ts2" id="ts22">
                                                    <label class="form-check-label" for="ts22">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian4" aria-expanded="false" aria-controls="Bagian4">
                                SURAT IJIN
                            </button>
                        </p><br>
                            <div class="collapse mb-4" id="Bagian4">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="dtHorizontalExample" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <th>Jenis Surat</th>
                                                    <th>File Surat</th>
                                                    <th>Yang Mengeluarkan</th>
                                                    <th>Masa Berlaku</th>
                                                    <th class="text-center" colspan="2">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody"> 
                                                <tr>
                                                    <td>1</td>
                                                    <td>Foto</td>
                                                    <td>Ini File</td>
                                                    <td>ini ceritanya nama barang</td>
                                                    <td>Cek posisi</td>
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="radio" name="kewenangan" id="kewenangan1">
                                                        <label class="form-check-label" for="kewenangan1">
                                                            Ada
                                                        </label>
                                                    </td>
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="radio" name="kewenangan" id="kewenangan2">
                                                        <label class="form-check-label" for="kewenangan2">
                                                            Tidak Ada
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                              
                                </div>
                            </div>
                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian5" aria-expanded="false" aria-controls="Bagian5">
                                SERTIFIKASI PELATIHAN KEAHLIAN
                            </button>
                        </p><br>
                            <div class="collapse mb-4" id="Bagian5">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                    
                                    </div>                                
                                </div>
                            </div>
                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian6" aria-expanded="false" aria-controls="Bagian6">
                                PENGALAMAN KERJA
                            </button>
                        </p><br>
                            <div class="collapse mb-4" id="Bagian6">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                    
                                    </div>                                
                                </div>
                            </div>
                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian7" aria-expanded="false" aria-controls="Bagian7">
                                VERIFIKASI SUMBER UTAMA <i>(PRIMARY SOURCE VERIFICATION)</i>
                            </button>
                        </p><br>
                            <div class="collapse mb-4" id="Bagian7">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                    
                                    </div>                                
                                </div>
                            </div>
                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian8" aria-expanded="false" aria-controls="Bagian8">
                                SURAT KETERANGAN SEHAT
                            </button>
                        </p><br>
                            <div class="collapse mb-4" id="Bagian8">
                                <div class="card card-body">
                                    <table class="table table-hover" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center">Dokumen</th>
                                                <th colspan="2" class="text-center">Ceklist</th>
                                            </tr>
                                            <tr>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Surat Keterangan Sehat</label>
                                                        <input class="form-control" name="sks" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="sks" id="sks1">
                                                    <label class="form-check-label" for="sks1">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="sks" id="sks2">
                                                    <label class="form-check-label" for="sks2">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <p>
                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse" data-target="#Bagian9" aria-expanded="false" aria-controls="Bagian9">
                                FORMULIR PENGAJUAN KEWENANGAN KLINIS
                            </button>
                        </p><br>
                            <div class="collapse" id="Bagian9">
                                <div class="card card-body">
                                    <table class="table table-hover" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="text-center">Dokumen</th>
                                                <th colspan="2" class="text-center">Ceklist</th>
                                            </tr>
                                            <tr>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-group"><label>Formulir Pengajuan Kewenangan Klinis</label>
                                                        <input class="form-control" name="kewenangan" type="text" >
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="kewenangan" id="kewenangan1">
                                                    <label class="form-check-label" for="kewenangan1">
                                                        Ada
                                                    </label>
                                                </td>
                                                <td class="text-center">
                                                    <input class="form-check-input" type="radio" name="kewenangan" id="kewenangan2">
                                                    <label class="form-check-label" for="kewenangan2">
                                                        Tidak Ada
                                                    </label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/barang.js"></script>
<script src="<?= base_url(); ?>assets/js/loading.js"></script>
<script src="<?= base_url(); ?>assets/js/validasi/formbarang.js"></script>
<script src="<?= base_url(); ?>assets/plugin/chosen/chosen.jquery.min.js"></script>

<script>
    $('.chosen').chosen({
        width: '100%',

    });
</script>

<?php if ($this->session->flashdata('Pesan')) : ?>

<?php else : ?>
    <script>
        $(document).ready(function() {

            let timerInterval
            Swal.fire({
                title: 'Memuat...',
                timer: 1000,
                onBeforeOpen: () => {
                    Swal.showLoading()
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                for(B=1;B<=1;B++){
                    BarisBaru();
                }
                $('#Barisbaru').click(function(e){
                    e.preventDefault();
                    BarisBaru();
                });
            })
            
        });

        function BarisBaru(){
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var Nomor = $("#tableloop tbody tr").length + 1;
        var Baris = '<tr>';
                Baris += '<td class ="text-center">'+Nomor+'</td>';
                Baris += '<td>';
                    Baris += '<label>Nomor Ijazah</label>';
                    Baris += '<input type="text" name="first_name[]" class="form-control mb-3" placeholder=" " required="">';
                    Baris += '<label>Gelar</label>';
                    Baris += '<input type="text" name="first_name[]" class="form-control mb-3" placeholder=" " required="">';
                    Baris += '<label>Lampiran Ijazah</label>';
                    Baris += '<input type="text" name="first_name[]" class="form-control mb-3" placeholder=" " required="">';
                    Baris += '<label>Transkrip Nilai</label>';
                    Baris += '<input type="text" name="first_name[]" class="form-control mb-3" placeholder=" " required="">';
                Baris +='</td>';
                Baris += '<td class="text-center">';
                    Baris += '<a class="btn btn-sm btn-danger align-center col-lg-12 p-3" data-toggle="tooltip" title"Hapus Baris" id="hapusbaris"><i class="fas fa-times" ></i></a>';
                Baris +='</td>';
            Baris += '</tr>';
        console.log(Baris);

        $("#tableloop tbody").append(Baris);
        $("#tableloop tbody tr").each(function() {
        });
    }
        $(document).on('click','#hapusbaris',function(e){
            e.preventDefault();
            var Nomor = 1;
            $(this).parent().parent().remove();
            $('tableloop tbody tr').each(function(){
                $(this).find('td:nth-child(1)').html(Nomor);
                Nomor++;
            });
        });
    </script>
<?php endif; ?>

<script>
    function validateForm() {
        var kategori = document.forms["myForm"]["kategori"].value;
        var nama_lengkap = document.forms["myForm"]["nama_lengkap"].value;
        var nip = document.forms["myForm"]["nip"].value;
        var tempat_lahir = document.forms["myForm"]["tempat_lahir"].value;
        var tanggal_lahir = document.forms["myForm"]["tanggal_lahir"].value;
        var alamat = document.forms["myForm"]["alamat"].value;
        var telepon = document.forms["myForm"]["telepon"].value;
        var email = document.forms["myForm"]["email"].value;
        var nomor_sip = document.forms["myForm"]["nomor_sip"].value;
        var nomor_str = document.forms["myForm"]["nomor_str"].value;
        var tanggal_kerja = document.forms["myForm"]["tanggal_kerja"].value;

        if (kategori == "") {
            validasi('Kategori wajib di isi!', 'warning');
            return false;
        } else if (nama_lengkap == '') {
            validasi('Nama lengkap wajib di isi!', 'warning');
            return false;
        } else if (nip == '') {
            validasi('NIP / NIK wajib di isi!', 'warning');
            return false;
        } else if (tempat_lahir == '') {
            validasi('Tempat lahir wajib di isi!', 'warning');
            return false;
        } else if (tanggal_lahir == '') {
            validasi('Tempat lahir wajib di isi!', 'warning');
            return false;
        } else if (alamat == '') {
            validasi('Alamat wajib di isi!', 'warning');
            return false;
        } else if (telepon == '') {
            validasi('Telepon wajib di isi!', 'warning');
            return false;
        } else if (email == '') {
            validasi('E-mail wajib di isi!', 'warning');
            return false;
        } else if (nomor_sip == '') {
            validasi('Nomor SIP wajib di isi!', 'warning');
            return false;
        } else if (nomor_str == '') {
            validasi('Nomor STR wajib di isi!', 'warning');
            return false;
        } else if (tanggal_kerja == '') {
            validasi('Tanggal Kerja wajib di isi!', 'warning');
            return false;
        }
    }
    function getData(){
        document.getElementById("kategori").innerHTML = localStorage.getItem("kategori_value");
        document.getElementById("nama_lengkap").innerHTML = localStorage.getItem("nama_lengkap_value");
        document.getElementById("nip").innerHTML = localStorage.getItem("nip_value"); 
        document.getElementById("tempat_lahir").innerHTML = localStorage.getItem("tempat_lahir_value");
        document.getElementById("tanggal_lahir").innerHTML = localStorage.getItem("tanggal_lahir_value");
        document.getElementById("alamat").innerHTML = localStorage.getItem("alamat_value"); 
        document.getElementById("telepon").innerHTML = localStorage.getItem("telepon_value");
        document.getElementById("email").innerHTML = localStorage.getItem("email_value");
        document.getElementById("nomor_sip").innerHTML = localStorage.getItem("nomor_sip_value");
        document.getElementById("nomor_str").innerHTML = localStorage.getItem("nomor_str_value");
        document.getElementById("tanggal_kerja").innerHTML = localStorage.getItem("tanggal_kerja_value");
        return false;
    }
</script>