<!-- Begin Page Content -->
 <!-- Custom fonts for this template-->
 <link href="<?= base_url(); ?>assets/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
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
        <h1 class="h3 mb-0 text-gray-800">Data Ijazah</h1>
        <a href="<?= base_url() ?>berkas/tambah_ijazah" class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Tambah Ijazah</span>
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
                                <th width="1%">No</th>
                                <th>Foto</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th width="1%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="cursor:pointer;" id="tbody"> 
                            <?php $no=1; foreach ($user as $u): ?>
                            <tr>
                                <td onclick="detail('<?= $u->id_user ?>')"><?= $no++ ?>.</td>
                                <td onclick="detail('<?= $u->id_user ?>')"><img style="border-radius: 5px;" src="<?= base_url() ?>assets/upload/pengguna/<?= $u->foto ?>" alt=""
                                        width="50px"></td>
                                <td onclick="detail('<?= $u->id_user ?>')"><?= $u->nama ?></td>
                                <td onclick="detail('<?= $u->id_user ?>')"><?= $u->email ?></td>
                                <td onclick="detail('<?= $u->id_user ?>')">
                                
                                <?php if($u->status == 'Aktif'): ?>
                                    <span class="badge badge-success badge-md">
                                    <?php else: ?>
                                    <span class="badge badge-secondary badge-md">
                                    <?php endif; ?>
                                        <?= $u->status ?>
                                    </span>
                            
                                </td>
                                <td onclick="detail('<?= $u->id_user ?>')"><?= $u->level ?></td>
                                <td>
                                    <center>
                                        <a href="<?= base_url() ?>user/ubah/<?= $u->id_user ?>"
                                            class="btn btn-circle btn-success btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" onclick="konfirmasi('<?= $u->id_user ?>')"
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
<?php if($this->session->flashdata('Pesan')): ?>
<?= $this->session->flashdata('Pesan') ?>
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