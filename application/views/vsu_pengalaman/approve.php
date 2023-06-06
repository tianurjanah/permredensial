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

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Verifikasi Sumber Utama Bagian Pengalaman</h1>
    </div>

    <div class="col-lg-12 mb-4">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dtHorizontalExample" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="1%">No VSU Pengalaman</th>
                                <th>Nama Perusahaan</th>
                                <th>Tanggal Pengiriman</th>
                                <th>Surat Balasan</th>
                                <th width="1%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="cursor:pointer;" id="tbody">
                            <?php $no = 1;
                            foreach ($vsu_pengalaman as $vp): ?>
                                <tr>
                                    <td onclick="detail('<?= $vp->nomor_pengalamanvsu ?>')"><?= $vp->nomor_pengalamanvsu ?>
                                    </td>
                                    <td onclick="detail('<?= $vp->nomor_pengalamanvsu ?>')"><?= $vp->nama_perusahaan ?></td>
                                    <td onclick="detail('<?= $vp->nomor_pengalamanvsu ?>')"><?= $vp->tgl_pengiriman ?></td>
                                    <td>
                                        <?php if ($vp->balasan != ''): ?> <a
                                                href="<?= base_url('assets/upload/berkas_vsu_pengalaman/' . $vp->balasan) ?>"
                                                target="_blank">
                                                <i class="fa fa-file-pdf"></i> Lihat Berkas
                                            </a>
                                        <?php else: ?>
                                            <p>File Surat Lampiran Tidak Tersedia.</p>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <center>
                                            <a href="<?= base_url() ?>Vsu_pengalaman/ubah_pengalaman/<?= $vp->nomor_pengalamanvsu ?>"
                                                class="btn btn-circle btn-success btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="<?= base_url() ?>Vsu_pengalaman/hapus_pengalaman/<?= $vp->nomor_pengalamanvsu ?>"
                                                class="btn btn-circle btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </center>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/pengguna.js"></script>
<?php if ($this->session->flashdata('Pesan')): ?>
    <?= $this->session->flashdata('Pesan') ?>
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
<script>
    function konfirmasi(nomor) {
        var base_url = $('#baseurl').val();

        swal.fire({
            title: "Hapus Data ini?",
            icon: "warning",
            closeOnClickOutside: false,
            showCancelButton: true,
            confirmButtonText: 'Iya',
            confirmButtonColor: '#4e73df',
            cancelButtonText: 'Batal',
            cancelButtonColor: '#d33',
        }).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: "Memuat...",
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    },
                    timer: 1000,
                    showConfirmButton: false,
                }).then(
                    function () {
                        window.location.href = base_url + "Vsu_pengalaman/proses_hapus_pengalaman/" + nomor;
                    }
                );
            }
        });

    }
</script>