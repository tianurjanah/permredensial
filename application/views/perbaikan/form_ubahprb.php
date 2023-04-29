<?php foreach ($data as $p): ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>perbaikan/proses_ubah" name="myForm" method="POST" enctype="multipart/form-data"
        onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>perbaikan/laporan/?b" class="btn btn-md btn-circle btn-dark">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Ubah Perbaikan</h1>
            </div>
            <button type="submit" class="btn btn-primary btn-md btn-icon-split">
                <span class="text text-white">Simpan Perbaikan</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>
        </div>
        <div class="d-sm-flex  justify-content-center mb-0">
            <div class="col-lg-8 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-dark shadow mb-4">
                    <div class="card-header py-3 bg-primary">
                        <h6 class="m-0 font-weight-bold text-white">Form Ubah Perbaikan Barang</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">

                            <div class="form-group">
                                <input hidden class="form-control" name="kode_perbaikan" type="text" value="<?= $p->kode_perbaikan ?>" 
                            </div>
                            <!-- ID Barang -->
                            <div class="form-group"><label>Kode Perbaikan</label>
                                <input class="form-control" name="kode_perawatan" type="text" value="<?= $p->kode_perbaikan ?>" readonly>
                            </div>
                            <!-- ID Barang -->
                            <div class="form-group"><label>Kode Perawatan</label>
                                <input class="form-control" name="kode_perawatan" type="text" value="<?= $p->kode_perawatan ?>" readonly>
                            </div>

                            <div class="form-group"><label>Kode barang</label>
                                <input class="form-control" name="idbarang" type="text" value="<?= $p->id_barang ?>" readonly>
                            </div>
                            <!-- Nama Barang -->
                            <div class="form-group"><label>Nama Barang</label>
                                <input class="form-control" name="barang" type="text" value="<?= $p->nama_barang ?>" readonly>
                            </div>
                            <div class="form-group"><label>Posisi</label>
                                <input class="form-control" name="posisi" type="text" value="<?= $p->posisi ?>" readonly>
                            </div>
                            <div class="form-group"><label>Nama Pemelihara</label>
                                <input class="form-control" name="namaprb" type="text" value="<?= $p->namaprb ?>" readonly>
                            </div>
                            <!-- Stok -->
                            <div class="form-group"><label>Tanggal Perbaikan</label>
                                <input class="form-control" name="tanggal_perbaikan" type="date" value="<?=date('Y-m-d')?>">
                            </div>
                            
                            <!-- Jenis -->
                            <div class="form-group"><label>Status</label>
                                <select name="statusprb" class="form-control">
                                    <option value="Sedang Diperbaiki" 
                                    <?php if($p->statusprb == "Sedang Diperbaiki"): ?> Selected <?php endif; ?> >Sedang Diperbaiki</option>
                                    <option value="Sudah Diperbaiki" 
                                    <?php if($p->statusprb == "Sudah Diperbaiki"): ?> Selected <?php endif; ?> >Sudah Diperbaiki</option>
                                </select>
                            </div>

                            <div class="form-group"><label>Kerusakan</label>
                                <input class="form-control" name="kerusakan" type="text" value="<?= $p->kerusakan ?>" readonly>
                            </div>

                            <div class="form-group"><label>Penanganan</label>
                                <input class="form-control" name="penanganan" type="text" value="<?= $p->penanganan ?>" >
                            </div>

                            <div class="form-group"><label>Kebutuhan Komponen</label>
                                <input class="form-control" name="kebutuhan_komponen" type="text" value="<?= $p->kebutuhan_komponen ?>">
                            </div>

                            <div class="form-group"><label>total_biaya</label>
                                <input class="form-control" name="total_biaya" type="text" value="<?= $p->total_biaya ?>">
                            </div>
                                        
                        </div>

                        <br>
                    </div>
                </div>

            </div>

        </div>
    </form>

</div>
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

<script>
    function validateForm() {
    var penanganan = document.forms["myForm"]["penanganan"].value;
    var kebutuhan_komponen = document.forms["myForm"]["kebutuhan_komponen"].value;
    var total_biaya = document.forms["myForm"]["total_biaya"].value;

    if (penanganan == "") {
        validasi('Penanganan wajib di isi!', 'warning');
        return false;
    } else if (kebutuhan_komponen == '') {
        validasi('Kebutuhan Komponen wajib di isi!', 'warning');
        return false;
    } else if (total_biaya == '') {
        validasi('Total Biaya Barang wajib di isi!', 'warning');
        return false;
    }
}
</script>
<?php endforeach; ?>