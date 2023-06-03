<!-- Begin Page Content -->
<!-- Custom fonts for this template-->
<link href="<?= base_url(); ?>assets/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url(); ?>assets/sbadmin/css/sb-admin-biru.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/css/profileee.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/css/animate/animate.min.css" rel="stylesheet">
<!-- Select Chosen -->
<link href="<?= base_url(); ?>assets/plugin/datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
<!-- Select Chosen -->
<link href="<?= base_url(); ?>assets/plugin/chosen/dist/css/component-chosen.min.css" rel="stylesheet">
<!-- Custom styles for this page -->
<link href="<?= base_url(); ?>assets/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <?php foreach ($surat_izin as $si): ?>

        <form action="<?= base_url() ?>SuratIzin/proses_ubah_surat_izin/<?= $si->nomor_izin ?>" name="myForm" method="POST" enctype="multipart/form-data">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="d-sm-flex">
                    <a href="<?= base_url() ?>surat_izin/index" class="btn btn-md btn-circle btn-dark">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    &nbsp;
                    <h1 class="h2 mb-0 text-gray-800">Ubah Data Surat Izin</h1>
                </div>
            </div>

            <div class="d-sm-flex  justify-content-between mb-0">
                <div class="col-lg-8 mb-4">
                    <!-- Illustrations -->
                    <div class="card border-bottom-secondary shadow mb-4">
                        <div class="card-header py-3 bg-dark">
                            <h6 class="m-0 font-weight-bold text-white">Form Data Surat Izin</h6>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12">

                                <!-- Nomor Izin -->
                                <div class="form-group"><label>Nomor Izin</label>
                                    <input class="form-control" name="nomor_izin" type="text"
                                        value="<?= $si->nomor_izin ?>">
                                </div>

                                <!-- Jenis Surat -->
                                <div class="form-group"><label>Jenis Surat</label>
                                    <input class="form-control" name="jenis_surat" type="text"
                                        value="<?= $si->jenis_surat ?>">
                                </div>

                                <!-- Yang Mengeluarkan -->
                                <div class="form-group"><label>Yang Mengeluarkan</label>
                                    <input class="form-control" name="mengeluarkan" type="text"
                                        value="<?= $si->mengeluarkan ?>">
                                </div>

                                <!-- Masa Berlaku -->
                                <div class="form-group"><label>Masa Berlaku</label>
                                    <input class="form-control" name="masa_berlaku" type="date"
                                        value="<?= $si->masa_berlaku ?>">
                                </div>


                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-md btn-icon-split">
                        <span class="text text-white">Simpan Perubahan Ijazah</span>
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                    </button>

                </div>

            </div>


        </form>

</div>
    <!-- /.container-fluid -->


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

    <?php if ($this->session->flashdata('Pesan')): ?>

    <?php else: ?>
        <script>
            $(document).ready(function () {

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
