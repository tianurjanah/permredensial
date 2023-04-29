<?php foreach ($data as $d): ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>perawatan/proses_ubah" name="myForm" method="POST" enctype="multipart/form-data"
        onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>perawatan/laporan" class="btn btn-md btn-circle btn-dark">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Ubah Perawatan</h1>
            </div>
            <button type="submit" class="btn btn-success btn-md btn-icon-split">
                <span class="text text-white">Simpan Perubahan</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>
        </div>

        <div class="d-sm-flex  justify-content-center mb-0">
            <div class="col-lg-8 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-dark shadow mb-4">
                    <div class="card-header py-3 bg-dark">
                        <h6 class="m-0 font-weight-bold text-white">Form Ubah Perawatan Barang</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">

                            <div class="form-group">
                                <input hidden class="form-control" name="kode_perawatan" type="text" value="<?= $d->kode_perawatan ?>" 
                            </div>
                            <!-- ID Barang -->
                            <div class="form-group"><label>Kode Perawatan</label>
                                <input class="form-control" name="kode_perawatan" type="text" value="<?= $d->kode_perawatan ?>" readonly>
                            </div>

                            <div class="form-group"><label>Kode barang</label>
                                <input class="form-control" name="idbarang" type="text" value="<?= $d->id_barang ?>" readonly>
                            </div>
                            <!-- Nama Barang -->
                            <div class="form-group"><label>Nama Barang</label>
                                <input class="form-control" name="barang" type="text" value="<?= $d->nama_barang ?>" readonly>
                            </div>
                            <div class="form-group"><label>Posisi</label>
                                <input class="form-control" name="posisi" type="text" value="<?= $d->posisi ?>" readonly>
                            </div>
                            <div class="form-group"><label>Nama Pemelihara</label>
                                <input class="form-control" name="nama" type="text" value="<?= $d->nama ?>" readonly>
                            </div>
                            <!-- Stok -->
                            <div class="form-group"><label>Tanggal Perawatan</label>
                                <input class="form-control" name="tanggal_perawatan" type="date" value="<?= $d->tanggal_perawatan ?>">
                            </div>

                            <!-- Jenis -->
                            <div class="form-group"><label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="Aman" 
                                    <?php if($d->status == "Aman"): ?> Selected <?php endif; ?> >Aman</option>
                                    <option value="Perlu Diperbaiki" 
                                    <?php if($d->status == "Perlu Diperbaiki"): ?> Selected <?php endif; ?> >Perlu Diperbaiki</option>
                                </select>
                            </div>

                            <div class="form-group"><label>Keterangan</label>
                                <input class="form-control" name="keterangan" type="text" value="<?= $d->keterangan ?>">
                            </div>
                        </div>

                        <br>
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
<script src="<?= base_url(); ?>assets/js/perawatan.js"></script>
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
    var keterangan = document.forms["myForm"]["keterangan"].value;

    if (keterangan == "") {
        validasi('Keterangan wajib di isi!', 'warning');
        return false;
    }
}
</script>