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

    <?php foreach ($ijazah as $i): ?>

        <form action="<?= base_url() ?>berkas/proses_ubah_ijazah" name="myForm" method="POST" enctype="multipart/form-data">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="d-sm-flex">
                    <a href="<?= base_url() ?>berkas/berkas_ijazah" class="btn btn-md btn-circle btn-info">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    &nbsp;
                    <h1 class="h2 mb-0 text-gray-800">Ubah Data Ijazah</h1>
                </div>
            </div>

            <div class="d-sm-flex  justify-content-between mb-0">
                <div class="col-lg-8 mb-4">
                    <!-- Illustrations -->
                    <div class="card border-bottom-secondary shadow mb-4">
                        <div class="card-header py-3 bg-info">
                            <h6 class="m-0 font-weight-bold text-white">Form Data Ijazah</h6>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12">

                                <!-- ID Barang -->
                                <div class="form-group"><label>Nomor Ijazah</label>
                                    <input class="form-control" name="nomor_ijazah" type="text"
                                        value="<?= $i->nomor_ijazah ?>" readonly>
                                </div>


                                <div class="form-group"><label>Gelar</label>
                                    <select name="gelar" class="form-control">
                                        <option value="D3 (Ahli Madya)" <?php if ($i->gelar == "D3 (Ahli Madya)"): ?> Selected
                                            <?php endif; ?>>
                                            D3 (Ahli Madya)</option>
                                        <option value="Sarjana Terapan (D4/S1)" <?php if ($i->gelar == "Sarjana Terapan (D4/S1)"): ?> Selected <?php endif; ?>>Sarjana Terapan (D4/S1)</option>
                                        <option value="Master(S2)" <?php if ($i->gelar == "Master(S2)"): ?> Selected <?php endif; ?>>
                                            Master(S2)</option>
                                        <option value="Doktor(S3)" <?php if ($i->gelar == "Doktor(S3)"): ?> Selected <?php endif; ?>>Doktor(S3)
                                        </option>
                                    </select>
                                </div>
                                
                                <div class="form-group"><label>Lampiran Ijazah</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" id="lampiran" name="lampiran"
                                            onchange="VerifyLampiran(event)" accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                        <label class="custom-file-label" for="customFile" id="filelampiran">Pilih
                                            File</label>
                                    </div><br><br>
                                    <div class="pdf-container">
                                        <?php if ($i->lampiran != ''): ?>
                                            <embed src="<?= base_url() ?>assets/upload/berkas_ijazah/<?= $i->lampiran ?>"
                                                type="application/pdf" width="100%" height="600px">
                                        <?php else: ?>
                                            <p>File Surat Lampiran Tidak Tersedia.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="form-group"><label>Transkip</label>
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" id="transkip" name="transkip"
                                            onchange="VerifyLampiran(event)" accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                        <label class="custom-file-label" for="customFile" id="filetranskip">Pilih
                                            File</label>
                                    </div><br><br>
                                    <div class="pdf-container">
                                        <?php if ($i->transkip != ''): ?>
                                            <embed src="<?= base_url() ?>assets/upload/berkas_ijazah/<?= $i->transkip ?>"
                                                type="application/pdf" width="100%" height="600px">
                                        <?php else: ?>
                                            <p>File Surat Transkip Tidak Tersedia.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tombol Simpan -->
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-md btn-icon-split">
                            <span class="text text-white">Simpan Perubahan Ijazah</span>
                            <span class="icon text-white-50">
                                <i class="fas fa-save"></i>
                            </span>
                        </button>
                    </div>

                </div>

            </div>


        </form>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


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

<script>
    function fileIsValidpdf(fileName) {
        var ext = fileName.match(/\.([^\.]+)$/)[1];
        ext = ext.toLowerCase();
        var isValid = true;
        switch (ext) {
            case 'png':
            case 'jpeg':
            case 'jpg':
            case 'tiff':
            case 'gif':
            case 'tif':
            case 'pdf':

                break;
            default:
                this.value = '';
                isValid = false;
        }
        return isValid;
    }

    function VerifyLampiran(event) {
        var file = event.target.files[0];
        if (file != null) {
            var fileName = file.name;
            console.log(fileName);
            if (fileIsValidpdf(fileName) == false) {
                validasi('Format Salah!', 'warning');
                // document.getElementById('').value = null;
                return false;
            }
            var content;
            var size = file.size;
            if ((size != null) && ((size / (1024 * 1024)) > 3)) {
                validasi('Ukuran maximum 1024px', 'warning');
                // document.getElementById('suratlamaran').value = null;
                return false;
            }

            var ext = fileName.match(/\.([^\.]+)$/)[1];
            ext = ext.toLowerCase();
            var fileLabel = event.target.nextElementSibling;
            fileLabel.classList.add("selected");
            fileLabel.innerHTML = file.name;
            // document.getElementById('outputImg').src = window.URL.createObjectURL(file);
            return true;

        } else
            return false;
    }
</script>