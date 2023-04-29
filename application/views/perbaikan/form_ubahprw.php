<?php foreach ($data as $d): ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>perbaikan/proses_ubahprw" name="myForm" method="POST" enctype="multipart/form-data"
        onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>perbaikan/laporan/?b" class="btn btn-md btn-circle btn-dark">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Ubah Perawatan</h1>
            </div>
            <button type="submit" class="btn btn-success btn-md btn-icon-split">
                <span class="text text-white">Simpan Ke Perbaikan</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>
        </div>

        <div class="d-sm-flex  justify-content-center mb-0">
            <div class="col-lg-8 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-dark shadow mb-4">
                    <div class="card-header py-3 bg-warning">
                        <h6 class="m-0 font-weight-bold text-white">Form Simpan Perbaikan Barang</h6>
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
                                <input class="form-control" name="kode_barangprb" type="text" value="<?= $d->id_barang ?>" readonly>
                            </div>
                            <!-- Nama Barang -->
                            <div class="form-group"><label>Nama Barang</label>
                                <input class="form-control" name="barang" type="text" value="<?= $d->nama_barang ?>" readonly>
                            </div>
                            <div class="form-group"><label>Posisi</label>
                                <input class="form-control" name="posisi" type="text" value="<?= $d->posisi ?>" readonly>
                            </div>
                            <div class="form-group"><label>Nama Pemelihara</label>
                                <input class="form-control" name="namaprb" type="text" value="<?= $this->session->userdata('login_session')['username'] ?>" readonly>
                            </div>
                            <!-- Stok -->
                            <div class="form-group"><label>Tanggal Perbaikan</label>
                                <input type="date" name="tanggal_perbaikan" value="<?=date('Y-m-d')?>" class="form-control" >
                            </div>

                            <!-- Jenis -->
                            <div class="form-group"><label>Status</label>
                                <select name="statusprb" class="form-control">
                                <option value="Perlu Diperbaiki" 
                                    <?php if($d->status == "Perlu Diperbaiki"): ?> Selected <?php endif; ?> >Perlu Diperbaiki</option>
                                    <option value="Sedang Diperbaiki" 
                                    <?php if($d->status == "Sedang Diperbaiki"): ?> Selected <?php endif; ?> >Sedang Diperbaiki</option>
                                </select>
                            </div>

                            <div class="form-group"><label>Kerusakan</label>
                                <input class="form-control" name="kerusakan" type="text" value="<?= $d->keterangan ?>" readonly>
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
<script src="<?= base_url(); ?>assets/js/perbaikan.js"></script>
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
    var status = document.forms["myForm"]["status"].$status;

    if (status == 'Perlu Diperbaiki') {
        validasi('Status belum diperbarui!', 'warning');
        return false;
    }
}
</script>