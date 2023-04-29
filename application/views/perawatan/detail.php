<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex">
            <a id="btn_back" href="<?= base_url() ?>perawatan/laporan" class="btn btn-md btn-circle btn-dark">
                <i class="fas fa-arrow-left"></i>
            </a>
            &nbsp;
            <h1 class="h2 mb-0 text-gray-800">Detail Perawatan Barang</h1>
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
                        <div class="form-group"><label>Kode Perawatan</label>
                            <h4 class="h4 text-gray-800"><b><?= $d->kode_perawatan ?></b></h4>
                        </div>

                         <!-- Divider -->
                         <hr class="sidebar-divider">

                        <!-- kode Barang -->
                        <div class="form-group"><label>Kode Barang</label>
                            <h4 class="h4 text-gray-800"><b><?= $d->kode_barang ?></h4>
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

                        <!-- Tanggal Perawatan -->
                        <div class="form-group"><label>Nama Pemelihara</label>
                            <h4 class="h4 text-gray-800"><?= $d->nama ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Tanggal Perawatan -->
                        <div class="form-group"><label>Tanggal Perawatan</label>
                            <h4 class="h4 text-gray-800"><?= $d->tanggal_perawatan ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Status -->
                        <div class="form-group"><label>Status</label>
                            <h4 class="h4 text-gray-800"><?php if($d->status == "Aman"){ ?>
                                    <span class="badge badge-success"><?php echo $d->status;?></span>
                                        <?php ;}elseif($d->status == "Perlu Diperbaiki"){ ?>
                                            <span class="badge badge-danger"><?php echo $d->status;?></span>
                                                <?php ;}else{ ?>
                                                    <span class="badge badge-warning"><?php echo $d->status;?></span>
                                                        <?php ;} ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Keterangan -->
                        <div class="form-group"><label>Keterangan</label>
                            <h4 class="h4 text-gray-800"><?= $d->keterangan ?></h4>
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