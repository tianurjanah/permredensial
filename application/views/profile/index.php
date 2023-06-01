<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <a href="<?= base_url() ?>profile/ubah/<?= $this->session->userdata('login_session')['id_user'] ?>"
            class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Ubah Profil</span>
            <span class="icon text-white-50">
                <i class="fas fa-pen"></i>
            </span>
        </a>
    </div>

    <div class="row">
        <div class="col-lg-2"></div>

        <div class="col-lg-8 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4" id="profil">
                <div class="card-body">
                    <center>
                        <div class="col-lg-12 mb-4">
                            <div class="box-circle bg-primary posisi">
                                <img class="img-profile rounded-circle" id="outputImg" width="100%" height="100%"
                                    src="<?= base_url() ?>assets/upload/pengguna/<?= $this->session->userdata('login_session')['foto'] ?>">
                            </div>
                            <br>
                            <input type="hidden" name="iduser" id="iduser"
                                value="<?= $this->session->userdata('login_session')['id_user'] ?>">
                            <h1 class="h1 mb-0 text-gray-800 posisi" id="namaL">
                                <?= $this->session->userdata('login_session')['username'] ?>
                            </h1>
                        </div>
                    </center>

                    <div class="row posisi4">

                        <div class="col-lg-12">
                            <center>
                                <div class="form-group">
                                    <h3 class="h3 mb-0 text-gray-800 d-sm-flex justify-content-center">
                                        <i class="fa fa-check-circle"></i>
                                        &nbsp;
                                        <div class="div" id="status">
                                            <?= $this->session->userdata('login_session')['status'] ?>
                                        </div>
                                    </h3>
                                </div>
                                <!-- Divider -->
                                <div class="col-8 mb-4">
                                    <center>
                                        <hr class="sidebar-divider">
                                    </center>
                                </div>
                            </center>
                            <br>
                        </div>
                        <div class="col-lg-12">
                            <center>
                                <h3 class="h3 mb-0 text-gray-800 d-sm-flex justify-content-center">
                                    <i class="fa fa-user"></i>
                                    &nbsp;
                                    <div class="div" id="level">
                                        <?= $this->session->userdata('login_session')['level'] ?>
                                    </div>
                                </h3>
                                <div class="col-8 mb-4">
                                    <center>
                                        <hr class="sidebar-divider">
                                    </center>
                                </div>
                            </center>
                            <br>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="col-lg-2"></div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/profile.js"></script>

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
                $("#profil").addClass("bounceIn");
            })
        });

        function konfirmasi(nomor, lampiran, transkrip) {
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
                            window.location.href = base_url + "berkas/proses_hapus_ijazah/" + nomor + "/" + lampiran + "/" + transkrip;
                        }
                    );
                }
            });

        }
    </script>
<?php endif; ?>