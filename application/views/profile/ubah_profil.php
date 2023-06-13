<!-- Begin Page Content -->
<div class="container-fluid">

    <?php foreach ($user as $u): ?>

    <form action="<?= base_url() ?>profile/proses_ubah_profile" name="myForm" method="POST"
        enctype="multipart/form-data" onsubmit="return validateForm()">


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>profile" class="btn btn-md btn-circle btn-info">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Ubah Pengguna</h1>
            </div>

            <button type="submit" class="btn btn-success btn-md btn-icon-split">
                <span class="text text-white">Simpan Perubahan</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>

        </div>

        <div class="d-sm-flex  justify-content-between mb-0">
            <div class="col-lg-8 mb-4">
                <!-- form -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-info">
                        <h6 class="m-0 font-weight-bold text-white">Form Pengguna</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <!-- ID User-->
                            <div class="form-group"><label>ID User</label>
                                <input class="form-control" name="iduser" type="text" value="<?= $u->id_user ?>"
                                    readonly>
                            </div>

                            <!-- Username -->
                            <div class="form-group"><label>Username</label>
                                <input class="form-control" name="user" type="text" value="<?= $u->username ?>">
                            </div>

                            <!-- Level -->
                            <div class="form-group"><label>Level</label>
                                <input class="form-control" name="level" type="email" value="<?= $u->level ?>" readonly>
                            </div>

                            <!-- Status -->
                            <div class="form-group"><label>Status</label>
                                <input class="form-control" name="status" type="email" value="<?= $u->status ?>"
                                    readonly>
                            </div>

                            <!-- Password lama -->
                            <input name="pwdLama" type="hidden" value="<?= $u->password ?>">

                            <!-- Password -->
                            <div class="form-group">
                                <label>Password
                                    <span class="text-danger">*kosongkan jika tidak ingin merubah</span>
                                </label>
                                <input class="form-control" name="pwd" type="password" value="">
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="form-group"><label>Konfirmasi Password</label>
                                <input class="form-control" name="kpwd" type="password" value="">
                            </div>

                        </div>
                        <br>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 mb-4">
                <!-- file -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-info">
                        <h6 class="m-0 font-weight-bold text-white">Foto</h6>
                    </div>
                    <div class="card-body">
                        <div class="card bg-warning text-white shadow">
                            <center>
                                <div class="card-body">
                                    Format
                                    <div class="text-white-45 small">.png .jpeg .jpg .tiff .gif .tif</div>
                                </div>
                            </center>
                        </div>
                        <br>
                        <center>
                            <div>
                                <img src="<?= base_url() ?>assets/upload/pengguna/<?= $u->foto ?>" id="outputImg"
                                    width="200" maxheight="300">
                            </div>
                        </center>
                        <br>
                        <span class="text-danger">*kosongkan jika tidak ingin diubah</span>
                        <!-- foto -->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="hidden" name="fotoLama" value="<?= $u->foto ?>">
                                <input class="custom-file-input" type="file" id="GetFile" name="photo"
                                    onchange="VerifyFileNameAndFileSize()" accept=".png,.gif,.jpeg,.tiff,.jpg">
                                <label class="custom-file-label" for="customFile">Pilih File</label>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </form>

</div>
<!-- /.container-fluid -->

<?php endforeach; ?>

</div>
<!-- End of Main Content -->

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/pengguna.js"></script>
<script src="<?= base_url(); ?>assets/js/validasi/formuser.js"></script>

<?php if ($this->session->flashdata('Pesan')): ?>

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