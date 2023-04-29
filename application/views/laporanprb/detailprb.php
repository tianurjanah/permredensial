<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex">
            <a href="<?= base_url() ?>laporanprb/laporan" class="btn btn-md btn-circle btn-dark">
                <i class="fas fa-arrow-left"></i>
            </a>
            &nbsp;
            <h1 class="h2 mb-0 text-gray-800">Detail Perbaikan Barang</h1>
        </div>
    </div>

    <?php foreach ($data as $d): ?>

    <div class="d-sm-flex  justify-content-between mb-0">
        <div class="col-lg-12 mb-4">
            <!-- Barang -->
            <div class="card shadow border-bottom-secondary mb-4">
                <div class="card-body d-sm-flex">
                    <div class="col-lg-3">
                        <img width="100%" style="border-radius: 10px;"
                            src="<?= base_url() ?>assets/upload/barang/<?= $d->foto ?>" alt="">
                    </div>

                    <br>

                    <div class="col-lg-9">
                        <!-- Kode Perawatan -->
                        <div class="form-group"><label>Kode Perbaikan</label>
                            <h4 class="h4 text-gray-800"><b><?= $d->kode_perbaikan ?></b></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
                        
                        <!-- Kode Perawatan -->
                        <div class="form-group"><label>Kode Perawatan</label>
                            <h4 class="h4 text-gray-800"><b><?= $d->kode_perawatan ?></b></h4>
                        </div>

                         <!-- Divider -->
                         <hr class="sidebar-divider">

                        <!-- kode Barang -->
                        <div class="form-group"><label>Kode Barang</label>
                            <h4 class="h4 text-gray-800"><b><?= $d->kode_barangprb ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nama barang -->
                        <div class="form-group"><label>Nama Barang</label>
                            <h4 class="h4 text-gray-800" href="<?= $d->nama_barang ?>" ><?= $d->nama_barang ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nama barang -->
                        <div class="form-group"><label>Posisi</label>
                            <h4 class="h4 text-gray-800" href="<?= $d->posisi ?>" ><?= $d->posisi ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Status -->
                        <div class="form-group"><label>Status</label>
                            <h4 class="h4 text-gray-800"><?php if($d->statusprb == 'Sedang Diperbaiki'): ?>
                                    <span class="badge badge-info badge-md">
                                    <?php else: ?>
                                    <span class="badge badge-primary badge-md">
                                    <?php endif; ?>
                                        <?= $d->statusprb ?>
                                    </span></h4>
                        </div>
                        
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Tanggal Perawatan -->
                        <div class="form-group"><label>Tanggal Perbaikann</label>
                            <h4 class="h4 text-gray-800"><?= $d->tanggal_perbaikan ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Keterangan -->
                        <div class="form-group"><label>Kerusakan</label>
                            <h4 class="h4 text-gray-800"><?= $d->kerusakan ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Keterangan -->
                        <div class="form-group"><label>Penanganan</label>
                            <h4 class="h4 text-gray-800"><?= $d->penanganan ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Keterangan -->
                        <div class="form-group"><label>Kebutuhan Komponen</label>
                            <h4 class="h4 text-gray-800"><?= $d->kebutuhan_komponen ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Keterangan -->
                        <div class="form-group"><label>Total Biaya</label>
                            <h4 class="h4 text-gray-800"><?= $d->total_biaya ?></h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <?php endforeach; ?>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>

<?php if($this->session->flashdata('Pesan')): ?>

<?php else: ?>
<script>
$(document).ready(function() {

    $('#pdf').hide();

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