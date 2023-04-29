<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex">
            <a href="<?= base_url() ?>laporanbrg" class="btn btn-md btn-circle btn-dark">
                <i class="fas fa-arrow-left"></i>
            </a>
            &nbsp;
            <h1 class="h2 mb-0 text-gray-800">Detail Barang Inventaris</h1>
        </div>
        <!-- 
            <button type="submit" class="btn btn-primary btn-md btn-icon-split">
                <span class="text text-white">Simpan Data</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>
            -->
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
                        <!-- ID Barang -->
                        <div class="form-group"><label>ID Barang</label>
                            <h4 class="h4 text-gray-800"><b><?= $d->id_barang ?></b></h4>
                        </div>

                         <!-- Divider -->
                         <hr class="sidebar-divider">

                        <!-- Nama Barang -->
                        <div class="form-group"><label>Nama Barang</label>
                            <h4 class="h4 text-gray-800"><?= $d->nama_barang ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Posisi -->
                        <div class="form-group"><label>Posisi</label>
                            <h4 class="h4 text-gray-800"><?= $d->posisi ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Kategori -->
                        <div class="form-group"><label>Kategori</label>
                            <h4 class="h4 text-gray-800"><?= $d->nama_kategori ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Tanggal Masuk -->
                        <div class="form-group"><label>Tanggal Masuk</label>
                            <h4 class="h4 text-gray-800"><?= $d->tanggal_masuk ?></h4>
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