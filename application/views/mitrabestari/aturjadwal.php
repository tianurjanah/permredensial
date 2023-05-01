<?php foreach ($data as $d): ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>barang/proses_ubah" name="myForm" method="POST" enctype="multipart/form-data"
        onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>mitrabestari" class="btn btn-md btn-circle btn-info">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Atur Jadwal</h1>
            </div>
            <button type="submit" class="btn btn-success btn-md btn-icon-split">
                <span class="text text-white">Simpan Jadwal</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>

        </div>

        <div class="d-sm-flex  justify-content-between mb-0">
            <div class="col-lg-8 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-secondary shadow mb-4">
                    <div class="card-header py-3 bg-info">
                        <h6 class="m-0 font-weight-bold text-white">FORM PENGAJUAN</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">

                            <!-- ID Barang -->
                            <div class="form-group"><label>ID Barang</label>
                                <input class="form-control" name="idpengajuan" type="text" value="<?= $d->id ?>" readonly>
                            </div>

                            <!-- Nama Barang -->
                            <div class="form-group"><label>ID User</label>
                                <input class="form-control" name="iduser" type="text" value="<?= $d->id_user ?>" readonly>
                            </div>

                            <!-- tanggal masuk -->
                            <div class="form-group"><label>Tanggal Pengajuan</label>
                                <input class="form-control" name="tanggal_pengajuan" type="datetime" value="<?= $d->tanggal_pengajuan ?>" readonly>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-4 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-secondary shadow mb-4">
                    <div class="card-header py-3 bg-info">
                        <h6 class="m-0 font-weight-bold text-white">JADWAL PENGUJIAN</h6>
                    </div>
                    <div class="card-body">                       
                        <!-- kategori -->
                        <?php if ($ktg > 0) : ?>
                            <div class="form-group"><label>Mitra Bestari</label>
                                <select name="kategori" class="form-control chosen" readonly>
                                    <?php foreach ($kategori as $j) : ?>

                                        <?php if ($d->kategori == $j->id_kategori) : ?>
                                            <option value="<?= $j->id_kategori ?>.<?= $j->nama_kategori ?>" selected><?= $j->nama_kategori ?></option>
                                         <?php else : ?>
                                            <option value="<?= $j->id_kategori ?>.<?= $j->nama_kategori ?>"><?= $j->nama_kategori ?></option>
                                        <?php endif; ?>

                                    <?php endforeach ?>
                                </select>
                            </div>
                        <?php else : ?>
                        <?php endif; ?>

                        <div class="form-group"><label>Tanggal Pengujian</label>
                            <input class="form-control" name="namamitra" type="date" value="<?= $d->nama_mitra ?>">
                        </div>

                        <div class="form-group"><label>Jam Pengujian</label>
                            <input class="form-control" name="namamitra" type="time" value="<?= $d->nama_mitra ?>">
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

<?php endforeach; ?>

<script>
    function validateForm() {
    var barang = document.forms["myForm"]["barang"].value;
    var posisi = document.forms["myForm"]["posisi"].value;

    if (barang == "") {
        validasi('Nama Barang wajib di isi!', 'warning');
        return false;
    } else if (posisi == ""){
        validasi('Posisi wajib di isi!', 'warning');
        return false;
    }
}
</script>