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
        <h1 class="h3 mb-0 text-gray-800">Data Pengalaman Kerja</h1>
        <a href="<?= base_url() ?>Pengalaman/tambah_pengalaman" class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Tambah Pengalaman Kerja</span>
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        </a>

    </div>

    <div class="col-lg-12 mb-4">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dtHorizontalExample" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="1%">ID Pengalaman</th>
                                <th>Perusahaan</th>
                                <th>Masa Kerja Dari</th>
                                <th>Masa Kerja Sampai</th>
                                <th>Surat Referensi</th>
                                <th width="1%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="cursor:pointer;" id="tbody">
                            <?php $no = 1;
                            foreach ($pengalaman as $p): ?>
                                <tr>
                                    <td onclick="detail('<?= $p->id_pengalaman ?>')"><?= $i->nomor_izin ?></td>
                                    <td onclick="detail('<?= $p->id_pengalaman ?>')"><?= $i->perusahaan ?></td>
                                    <td onclick="detail('<?= $p->id_pengalaman ?>')"><?= $i->kerja_dari ?></td>
                                    <td onclick="detail('<?= $p->id_pengalaman ?>')"><?= $i->kerja_sampai ?></td>
                                    <td onclick="detail('<?= $p->id_pengalaman ?>')"><?= $i->Referensi ?></td>

                                    <td>
                                        <center>
                                            <a href="<?= base_url() ?>Pengalaman/ubah_pengalaman/<?= $p->id_pengalaman ?>"
                                                class="btn btn-circle btn-success btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="<?= base_url() ?>Pengalaman/proses_hapus_pengalaman/<?= $p->id_pengalaman ?>"
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
                        window.location.href = base_url + "pengalaman/proses_hapus_pengalaman/" + nomor;
                    }
                );
            }
        });

    }
</script>