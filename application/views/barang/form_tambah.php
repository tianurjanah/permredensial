<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>barang/proses_tambah" name="myForm" method="POST" enctype="multipart/form-data"
        onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>barang" class="btn btn-md btn-circle btn-dark">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Tambah Barang Inventaris</h1>
            </div>
            <button type="submit" class="btn btn-primary btn-md btn-icon-split">
                <span class="text text-white">Simpan Data</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>

        </div>

        <div class="d-sm-flex  justify-content-between mb-0">
            <div class="col-lg-8 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-dark shadow mb-4">
                    <div class="card-header py-3 bg-dark">
                        <h6 class="m-0 font-weight-bold text-white">Form Barang</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <!-- Nama Barang -->
                            <div class="form-group"><label>Nama Barang</label>
                                <input class="form-control" name="nama_barang" type="text" >
                            </div>

                            <!-- Posisi -->
                            <div class="form-group"><label>Posisi Barang</label>
                                <input class="form-control" name="posisi" type="text" >
                            </div>

                            <!-- Kategori -->
                            <?php if ($ktg > 0) : ?>
                                <div class="form-group"><label>Kategori</label>
                                    <select name="kategori" class="form-control chosen">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($kategori as $j) : ?>
                                            <option value="<?= $j->id_kategori ?>.<?= $j->nama_kategori ?>"><?= $j->nama_kategori ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <?php else : ?>
                            <?php endif; ?>
                            
                             <!-- tanggal masuk -->
                            <div class="form-group"><label>Tanggal masuk</label>
                                <input class="form-control" value="<?=date('Y-m-d')?>" name="tanggal_masuk" type="date" placeholder="">
                            </div>

                        </div>

                        <br>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-secondary shadow mb-4">
                    <div class="card-header py-3 bg-dark">
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
                            <div id="img">
                                <img src="<?= base_url() ?>assets/upload/barang/box.png" id="outputImg" width="200"
                                    maxheight="300">
                            </div>
                        </center>
                        <br>
                        <!-- foto -->
                        <div class="form-group">
                            <div class="custom-file">
                                <input class="custom-file-input" type="file" id="GetFile" name="photo"
                                    onchange="VerifyFileNameAndFileSize()" accept=".png,.gif,.jpeg,.tiff,.jpg">
                                <label class="custom-file-label" for="customFile">Pilih File</label>
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

<?php if($this->session->flashdata('Pesan')): ?>

<?php else: ?>
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

    })
});
</script>
<?php endif; ?>

<script>
    function validateForm() {
    var nama_barang = document.forms["myForm"]["nama_barang"].value;
    var posisi = document.forms["myForm"]["posisi"].value;
    var kategori = document.forms["myForm"]["kategori"].value;
    var tanggal_masuk = document.forms["myForm"]["tanggal_masuk"].value;

    if (nama_barang == "") {
        validasi('Nama Barang wajib di isi!', 'warning');
        return false;
    } else if (posisi == '') {
        validasi('Posisi wajib di isi!', 'warning');
        return false;
    } else if (kategori == '') {
        validasi('kategori Barang wajib di isi!', 'warning');
        return false;
    } else if (tanggal_masuk == '') {
        validasi('Tanggal Masuk wajib di isi!', 'warning');
        return false;
    }
}
</script>