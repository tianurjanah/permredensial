<!-- Begin Page Content -->
<div class="container-fluid">
    

<?php foreach ($user as $u) : ?>

    <form action="<?= base_url() ?>profile/proses_ubah_bio" name="myForm" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                &nbsp;
                <h3 class="h3 mb-0 text-gray-800">Formulir Pengajuan Kredensial</h3>
            </div>

            <button type="submit" class="btn btn-success btn-md btn-icon-split">
                <span class="text text-white">Simpan Perubahan</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>

        </div>

        <div class="d-sm-flex  justify-content-between mb-0">
            <div class="col-lg-8 mb-4">

        <div class="card border-bottom-info shadow mb-4">
                    <div class="card-header py-3 bg-info">
                        <h6 class="m-0 font-weight-bold text-white">Form Pengajuan</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <!-- Nama Lengkap -->
                            <div class="form-group"><label>Nama Lengkap (Termasuk Gelar)</label>
                                <input class="form-control" name="namaL" type="text" value="<?= $u->nama ?>">
                            </div>
                            <!-- NIP / NIK -->
                            <div class="form-group"><label>NIP / NIK</label>
                                <input class="form-control" name="nip" type="text" value="<?= $u->nip ?>">
                            </div>
                            <!-- Tempat Lahir -->
                            <div class="form-group"><label>Tempat Lahir</label>
                                <input class="form-control" name="tmptlahir" type="text" value="<?= $u->tmptlahir ?>">
                            </div>
                            <!-- Tanggal Lahir -->
                            <div class="form-group"><label>Tanggal Lahir</label>
                                <input class="form-control" value="<?= $u->tgllahir ?>" name="tgllahir" type="date">
                            </div>
                            <!-- Tempat Lahir -->
                            <div class="form-group"><label>Alamat</label>
                                <input class="form-control" name="alamat" type="text" value="<?= $u->alamat ?>">
                            </div>
                            <!-- Telepon / HP -->
                            <div class="form-group"><label>Telepon / HP</label>
                                <input class="form-control" name="notelp" type="text" value="<?= $u->notelp ?>" >
                            </div>
                            <!-- E-mail -->
                            <div class="form-group"><label>E-mail</label>
                                <input class="form-control" name="email" type="email" value="<?= $u->email ?>" >
                            </div>
                            <!-- Nomor STR -->
                            <div class="form-group"><label>Nomor STR</label>
                                <input class="form-control" name="str" type="text" value="<?= $u->str ?>" >
                            </div>
                            <!-- Nomor SIP -->
                            <div class="form-group"><label>Nomor SIP</label>
                                <input class="form-control" name="sip" type="text" value="<?= $u->sip ?>" >
                            </div>
                            <!-- Tanggal Mulai Bekerja -->
                            <div class="form-group"><label>Tanggal Mulai Bekerja</label>
                                <input class="form-control" value="<?= $u->tglmbekerja ?>"  name="tglmbekerja" type="date" placeholder="">
                            </div>
                            
                        </div>
                        <?php endforeach; ?>
                        <br>
                    </div>
                </div>

    </div>

                    <div class="col-lg-4 mb-4">
                    <!-- file -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-info">
                            <h6 class="m-0 font-weight-bold text-white">Foto</h6>
                        </div>
                        <div class="card-body">
                            <div class="card bg-warning text-white shadow">
                                <div class="card-body">
                                    Format
                                    <div class="text-white-45 small">.png .jpeg .jpg .tiff .gif .tif</div>
                                </div>
                            </div>
                            <br>
                            <center>
                                <div>
                                    <img src="<?= base_url() ?>assets/upload/pengguna/<?= $u->foto ?>" id="outputImg" width="200" maxheight="300">
                                </div>
                            </center>
                            <br>
                            <span class="text-danger">*kosongkan jika tidak ingin merubah</span>
                            <!-- foto -->
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="hidden" name="fotoLama" value="<?= $u->foto ?>">
                                    <input class="custom-file-input" type="file" id="GetFile" name="photo" onchange="VerifyFileNameAndFileSize()" accept=".png,.gif,.jpeg,.tiff,.jpg">
                                    <label class="custom-file-label" for="customFile">Pilih File</label>
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
                    suratijinbarisbaru();
                    pendidikanbarisbaru();
                    verifikasisuratijinbarisbaru();
                    verifikasipengalamankerjabarisbaru();
                    pelatihanbarisbaru();
                    kerjabarisbaru();
                }
                    $('#Barisbaru').click(function(e){
                        e.preventDefault();
                        BarisBaru();
                    });
                    $('#Suratijinbarisbaru').click(function(e){
                        e.preventDefault();
                        suratijinbarisbaru();
                    });
                    $('#Pendidikanbarisbaru').click(function(e){
                        e.preventDefault();
                        pendidikanbarisbaru();
                    });
                        $('#Pelatihanbarisbaru').click(function(e){
                        e.preventDefault();
                        pelatihanbarisbaru();
                    });
                    $('#Verifikasisuratijinbarisbaru').click(function(e){
                        e.preventDefault();
                        verifikasisuratijinbarisbaru();
                    });
                    $('#Verifikasipengalamankerjabarisbaru').click(function(e){
                        e.preventDefault();
                        verifikasipengalamankerjabarisbaru();
                    });
                    
                    $('#Kerjabarisbaru').click(function(e){
                        e.preventDefault();
                        kerjabarisbaru();
                    });
        });
    });
        
        function BarisBaru(){
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var Nomor = $("#tableloop tbody tr").length + 1;
        var Baris = '<tr>';
                Baris += '<td class ="text-center">'+Nomor+'</td>';
                Baris += '<td>';
                    Baris += '<div class="form-group"><label>Nomor Ijazah</label>';
                    Baris += '<input class="form-control" name="nomor_ijazah[]" type="text" required="">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Gelar</label>';
                    Baris += '<input class="form-control" name="gelar[]" type="text">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Lampiran Ijazah</label>';
                    Baris += '<br>';
                    Baris += '<div class="custom-file">';
                    Baris += '<input class="custom-file-input mb-3" type="file" id="lampiran_ijazah[] name="lampiran_ijazah[]" onchange="VerifyLampiran(event)" accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">';
                    Baris += '<label class="custom-file-label" for="customFile" id="file_ijazah[] name="file_ijazah[]"">Pilih File</label>';
                    Baris += '</div>';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Transkrip Nilai</label>';
                    Baris += '<br>';
                    Baris += '<div class="custom-file">';
                    Baris += '<input class="custom-file-input mb-3" type="file" id="transkrip_nilai[] name="lampiran_ijazah[]" onchange="VerifyLampiran(event)" accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">';
                    Baris += '<label class="custom-file-label" for="customFile" id="file_nilai[]">Pilih File</label>';
                    Baris += '</div>';
                    Baris += '</div>';
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

        function suratijinbarisbaru(){
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var Nomor = $("#suratijintableloop tbody tr").length + 1;
        var Baris = '<tr>';
                Baris += '<td class ="text-center">'+Nomor+'</td>';
                Baris += '<td>';
                    Baris += '<div class="form-group"><label>Jenis Surat Ijin</label>';
                    Baris += '<input class="form-control" name="jenissurat[]" type="text">';
                    Baris += '</div>';
                    Baris += '<div class="form-group">';
                    Baris += '<input class="form-control" name="jenissurat[]" type="text" placeholder="Yang Mengeluarkan">';
                    Baris += '</div>';
                    Baris += '<div class="form-group">';
                    Baris += '<input class="form-control" name="jenissurat[]" type="text" placeholder="Masa Berlaku">';
                    Baris += '</div>';
                    Baris += '</div>';
                Baris +='</td>';
                Baris += '<td class="text-center">';
                    Baris += '<a class="btn btn-sm btn-danger align-center col-lg-12 p-3" data-toggle="tooltip" title"Hapus Baris" id="suratijinhapusbaris"><i class="fas fa-times" ></i></a>';
                Baris +='</td>';
            Baris += '</tr>';
        console.log(Baris);

        $("#suratijintableloop tbody").append(Baris);
        $("#suratijintableloop tbody tr").each(function() {
        });
    }
        $(document).on('click','#suratijinhapusbaris',function(e){
            e.preventDefault();
            var Nomor = 1;
            $(this).parent().parent().remove();
            $('suratijintableloop tbody tr').each(function(){
                $(this).find('td:nth-child(1)').html(Nomor);
                Nomor++;
            });
        });

        function pelatihanbarisbaru(){
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var Nomor = $("#pelatihantableloop tbody tr").length + 1;
        var Baris = '<tr>';
                Baris += '<td class ="text-center">'+Nomor+'</td>';
                Baris += '<td>';
                    Baris += '<div class="form-group"><label>Nama Pelatihan</label>';
                    Baris += '<input class="form-control" name="nama_pelatihan[]" type="text">';
                    Baris += '</div>';
                    Baris += '<div class="form-group">';
                    Baris += '<input class="form-control" name="berlaku_sertifikat[]" type="text" placeholder="Masa Berlaku Sertifikat">';
                    Baris += '</div>';
                    Baris += '<div class="form-group">';
                    Baris += '<input class="form-control" name="penyelenggara[]" type="text" placeholder="Institusi Penyelenggara">';
                    Baris += '</div>';
                    Baris += '</div>';
                Baris +='</td>';
                Baris += '<td class="text-center">';
                    Baris += '<a class="btn btn-sm btn-danger align-center col-lg-12 p-3" data-toggle="tooltip" title"Hapus Baris" id="pelatihanhapusbaris"><i class="fas fa-times" ></i></a>';
                Baris +='</td>';
            Baris += '</tr>';
        console.log(Baris);

        $("#pelatihantableloop tbody").append(Baris);
        $("#pelatihantableloop tbody tr").each(function() {
        });
    }
        $(document).on('click','#pelatihanhapusbaris',function(e){
            e.preventDefault();
            var Nomor = 1;
            $(this).parent().parent().remove();
            $('pelatihantableloop tbody tr').each(function(){
                $(this).find('td:nth-child(1)').html(Nomor);
                Nomor++;
            });
        });

        function kerjabarisbaru(){
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var Nomor = $("#kerjatableloop tbody tr").length + 1;
        var Baris = '<tr>';
                Baris += '<td class ="text-center">'+Nomor+'</td>';
                Baris += '<td>';
                    Baris += '<div class="form-group"><label>Nama Perusahaan</label>';
                    Baris += '<input class="form-control" name="nama_perusahaan[]" type="text">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Masa Kerja Dari</label>';
                    Baris += '<input class="form-control" name="kerja_dari[]" type="date">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Masa Kerja Sampai</label>';
                    Baris += '<input class="form-control" name="kerja_sampai[]" type="date">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Surat Referensi</label>';
                    Baris += '<br>';
                    Baris += '<div class="custom-file">';
                    Baris += '<input class="custom-file-input mb-3" type="file" id="lampiran_referensi[] name="lampiran_referensi[]" onchange="VerifyLampiran(event)" accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">';
                    Baris += '<label class="custom-file-label" for="customFile" id="file_referensi[] name="file_referensi[]"">Pilih File</label>';
                    Baris += '</div>';
                    Baris += '</div>';
                    Baris += '</div>';
                Baris +='</td>';
                Baris += '<td class="text-center">';
                    Baris += '<a class="btn btn-sm btn-danger align-center col-lg-12 p-3" data-toggle="tooltip" title"Hapus Baris" id="kerjahapusbaris"><i class="fas fa-times" ></i></a>';
                Baris +='</td>';
            Baris += '</tr>';
        console.log(Baris);

        $("#kerjatableloop tbody").append(Baris);
        $("#kerjatableloop tbody tr").each(function() {
        });
        }
        $(document).on('click','#kerjahapusbaris',function(e){
            e.preventDefault();
            var Nomor = 1;
            $(this).parent().parent().remove();
            $('kerjatableloop tbody tr').each(function(){
                $(this).find('td:nth-child(1)').html(Nomor);
                Nomor++;
            });
        });
        function pendidikanbarisbaru(){
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var Nomor = $("#pendidikantableloop tbody tr").length + 1;
        var Baris = '<tr>';
                Baris += '<td class ="text-center">'+Nomor+'</td>';
                Baris += '<td>';
                    Baris += '<div class="form-group"><label>Nama Institusi</label>';
                    Baris += '<input class="form-control" name="namainstitusipendidikan[]" type="text">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Tanggal Pengiriman</label>';
                    Baris += '<input class="form-control" name="tanggalpengirimanpendidikan[]" type="date">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Surat Balasan</label>';
                    Baris += '<br>';
                    Baris += '<div class="custom-file">';
                    Baris += '<input class="custom-file-input mb-3" type="file" id="surat_balasan_pendidikan[] name="surat_balasan_pendidikan[]" onchange="VerifyLampiran(event)" accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">';
                    Baris += '<label class="custom-file-label" for="customFile" id="file_balasan_pendidikan[] name="file_balasan_pendidikan[]"">Pilih File</label>';
                    Baris += '</div>';
                    Baris += '</div>';
                    Baris += '</div>';
                Baris +='</td>';
                Baris += '<td class="text-center">';
                    Baris += '<a class="btn btn-sm btn-danger align-center col-lg-12 p-3" data-toggle="tooltip" title"Hapus Baris" id="pendidikanhapusbaris"><i class="fas fa-times" ></i></a>';
                Baris +='</td>';
            Baris += '</tr>';
        console.log(Baris);

        $("#pendidikantableloop tbody").append(Baris);
        $("#pendidikantableloop tbody tr").each(function() {
        });
    }
        $(document).on('click','#pendidikanhapusbaris',function(e){
            e.preventDefault();
            var Nomor = 1;
            $(this).parent().parent().remove();
            $('pendidikantableloop tbody tr').each(function(){
                $(this).find('td:nth-child(1)').html(Nomor);
                Nomor++;
            });
        });
        function verifikasisuratijinbarisbaru(){
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var Nomor = $("#verifikasisuratijintableloop tbody tr").length + 1;
        var Baris = '<tr>';
                Baris += '<td class ="text-center">'+Nomor+'</td>';
                Baris += '<td>';
                    Baris += '<div class="form-group"><label>Nama Institusi</label>';
                    Baris += '<input class="form-control" name="namainstitusisuratijin[]" type="text">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Tanggal Pengiriman</label>';
                    Baris += '<input class="form-control" name="tanggalpengirimansuratijin[]" type="date">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Surat Balasan</label>';
                    Baris += '<br>';
                    Baris += '<div class="custom-file">';
                    Baris += '<input class="custom-file-input mb-3" type="file" id="surat_balasan_suratijin[] name="surat_balasan_suratijin[]" onchange="VerifyLampiran(event)" accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">';
                    Baris += '<label class="custom-file-label" for="customFile" id="file_balasan_suratijin[] name="file_balasan_suratijin[]"">Pilih File</label>';
                    Baris += '</div>';
                    Baris += '</div>';
                    Baris += '</div>';
                Baris +='</td>';
                Baris += '<td class="text-center">';
                    Baris += '<a class="btn btn-sm btn-danger align-center col-lg-12 p-3" data-toggle="tooltip" title"Hapus Baris" id="verifikasisuratijinhapusbaris"><i class="fas fa-times" ></i></a>';
                Baris +='</td>';
            Baris += '</tr>';
        console.log(Baris);

        $("#verifikasisuratijintableloop tbody").append(Baris);
        $("#verifikasisuratijintableloop tbody tr").each(function() {
        });
    }
        $(document).on('click','#verifikasisuratijinhapusbaris',function(e){
            e.preventDefault();
            var Nomor = 1;
            $(this).parent().parent().remove();
            $('verifikasisuratijintableloop tbody tr').each(function(){
                $(this).find('td:nth-child(1)').html(Nomor);
                Nomor++;
            });
        });
        function verifikasipengalamankerjabarisbaru(){
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var Nomor = $("#verifikasipengalamankerjatableloop tbody tr").length + 1;
        var Baris = '<tr>';
                Baris += '<td class ="text-center">'+Nomor+'</td>';
                Baris += '<td>';
                    Baris += '<div class="form-group"><label>Nama Institusi</label>';
                    Baris += '<input class="form-control" name="namainstitusipengalamankerja[]" type="text">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Tanggal Pengiriman</label>';
                    Baris += '<input class="form-control" name="tanggalpengirimanpengalamankerja[]" type="date">';
                    Baris += '</div>';
                    Baris += '<div class="form-group"><label>Surat Balasan</label>';
                    Baris += '<br>';
                    Baris += '<div class="custom-file">';
                    Baris += '<input class="custom-file-input mb-3" type="file" id="surat_balasan_pengalamankerja[] name="surat_balasan_pengalamankerja[]" onchange="VerifyLampiran(event)" accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">';
                    Baris += '<label class="custom-file-label" for="customFile" id="file_balasan_pengalamankerja[] name="file_balasan_pengalamankerja[]"">Pilih File</label>';
                    Baris += '</div>';
                    Baris += '</div>';
                    Baris += '</div>';
                Baris +='</td>';
                Baris += '<td class="text-center">';
                    Baris += '<a class="btn btn-sm btn-danger align-center col-lg-12 p-3" data-toggle="tooltip" title"Hapus Baris" id="verifikasipengalamankerjahapusbaris"><i class="fas fa-times" ></i></a>';
                Baris +='</td>';
            Baris += '</tr>';
        console.log(Baris);

        $("#verifikasipengalamankerjatableloop tbody").append(Baris);
        $("#verifikasipengalamankerjatableloop tbody tr").each(function() {
        });
    }
        $(document).on('click','#verifikasipengalamankerjahapusbaris',function(e){
            e.preventDefault();
            var Nomor = 1;
            $(this).parent().parent().remove();
            $('verifikasipengalamankerjatableloop tbody tr').each(function(){
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

<!-- Javascript pas foto -->
<script>
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

            break;
        default:
            this.value = '';
            isValid = false;
    }
    return isValid;
}
    function fileIsValidpdf(fileName) {
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
            isValid = false;
    }
    return isValid;
}

function VerifyPasFotoNameAndSize() {
    var file = document.getElementById('pasfoto').files[0];
    if (file != null) {
        var fileName = file.name;
        if (fileIsValid(fileName) == false) {
            validasi('Format bukan gambar!', 'warning');
            document.getElementById('pasfoto').value = null;
            return false;
        }
        var content;
        var size = file.size;
        if ((size != null) && ((size / (1024 * 1024)) > 3)) {
            validasi('Ukuran maximum 1024px', 'warning');
            document.getElementById('pasfoto').value = null;
            return false;
        }

        var ext = fileName.match(/\.([^\.]+)$/)[1];
        ext = ext.toLowerCase();
        $("#pasphoto").addClass("selected").html(file.name);
        document.getElementById('outputImg').src = window.URL.createObjectURL(file);
        return true;

    } else
        return false;
}

function VerifyLampiran(event) {
    var file = event.target.files[0];
    if (file != null) {
        var fileName = file.name;
        console.log(fileName);
        if (fileIsValidpdf(fileName) == false) {
            validasi('Format Salah!', 'warning');
            // document.getElementById('').value = null;
            return false;
        }
        var content;
        var size = file.size;
        if ((size != null) && ((size / (1024 * 1024)) > 3)) {
            validasi('Ukuran maximum 1024px', 'warning');
            // document.getElementById('suratlamaran').value = null;
            return false;
        }

        var ext = fileName.match(/\.([^\.]+)$/)[1];
        ext = ext.toLowerCase();
        var fileLabel = event.target.nextElementSibling;
        fileLabel.classList.add("selected");
        fileLabel.innerHTML= file.name;
        // document.getElementById('outputImg').src = window.URL.createObjectURL(file);
        return true;

    } else
        return false;
}
function logFileUpload(event) {
  var file = event.target.files[0];
  console.log("Uploaded file:", file);

}
</script>