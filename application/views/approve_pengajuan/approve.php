<!-- Begin Page Content -->

<div class="container-fluid">


    <div class="d-sm-flex  justify-content-between mb-0">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card border-bottom-info shadow mb-4">
                <div class="card-header py-3 bg-info">
                    <h6 class="m-0 font-weight-bold text-white">Berkas Pengajuan</h6>
                </div>

                <div class="card-body">
                    <div class="col-lg-12">
                        <p>
                            <?php if (!empty($biodata)): ?>
                            <?php foreach ($biodata as $b): ?>

                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                data-target="#Bagian1" aria-expanded="false" aria-controls="Bagian1">
                                BIODATA
                            </button>
                        </p> <br>

                        <div class="collapse mb-4" id="Bagian1">
                            <div class="card card-body">
                                <div class="table-responsive">

                                    <!-- suratlamaran -->
                                    <div class="form-group"><label><b>SURAT LAMARAN</b></label>
                                        <div class="pdf-container">
                                            <?php if ($b->surat_lamaran != ''): ?>
                                            <embed
                                                src="<?= base_url() ?>assets/upload/berkas_biodata/<?= $b->surat_lamaran ?>"
                                                type="application/pdf" width="100%" height="600px">
                                            <?php else: ?>
                                            <p>File Surat Lamaran Tidak Tersedia.</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- cv -->
                                    <div class="form-group"><label><b>CURRICULUM VITAE</b></label>
                                        <div class="pdf-container">
                                            <?php if ($b->cv != ''): ?>
                                            <embed src="<?= base_url() ?>assets/upload/berkas_biodata/<?= $b->cv ?>"
                                                type="application/pdf" width="100%" height="600px">
                                            <?php else: ?>
                                            <p>File Curriculum Vitae Tidak Tersedia.</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group"><label>Formulir Data Karyawan</label>
                                        <div class="pdf-container">
                                            <?php if ($b->formulir_data != ''): ?>
                                            <embed
                                                src="<?= base_url() ?>assets/upload/berkas_biodata/<?= $b->formulir_data ?>"
                                                type="application/pdf" width="100%" height="600px">
                                            <?php else: ?>
                                            <p>File Data Karyawan Tidak Tersedia.</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="form-group"><label>Scan KTP</label>
                                        <div class="pdf-container">
                                            <?php if ($b->ktp != ''): ?>
                                            <embed src="<?= base_url() ?>assets/upload/berkas_biodata/<?= $b->ktp ?>"
                                                type="application/pdf" width="100%" height="600px">
                                            <?php else: ?>
                                            <p>File KTP Tidak Tersedia.</p>
                                            <?php endif; ?>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <div class="card-body">
                            <div class="col-lg-12">
                                <?php endif; ?>

                                <!-- IJAZAH -->
                                <p>
                                    <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                        data-toggle="collapse" data-target="#Bagian2" aria-expanded="false"
                                        aria-controls="Bagian2">
                                        IJAZAH
                                    </button>
                                </p>
                                <br>
                                <div class="collapse mb-4" id="Bagian2">
                                    <div class="card card-body">
                                        <div class="table-responsive">
                                            <br><br>
                                            <div class="pdf-container">
                                                <embed src="<?= base_url() ?>berkas/approval_ijazah/<?= $user ?>"
                                                    type="application/pdf" width="100%" height="600px">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SURAT IZIN -->
                                <p>
                                    <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                        data-toggle="collapse" data-target="#Bagian3" aria-expanded="false"
                                        aria-controls="Bagian3">
                                        SURAT IZIN
                                    </button>
                                </p>
                                <br>
                                <div class="collapse mb-4" id="Bagian3">
                                    <div class="card card-body">
                                        <div class="table-responsive">
                                            <br><br>
                                            <div class="pdf-container">
                                                <embed src="<?= base_url() ?>SuratIzin/approval/<?= $user ?>"
                                                    type="application/pdf" width="100%" height="600px">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SERTIFIKASI PELATIHAN KERJA -->
                                <p>
                                    <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                        data-toggle="collapse" data-target="#Bagian4" aria-expanded="false"
                                        aria-controls="Bagian4">
                                        SERTIFIKASI PELATIHAN KERJA
                                    </button>
                                </p>
                                <br>
                                <div class="collapse mb-4" id="Bagian4">
                                    <div class="card card-body">
                                        <div class="table-responsive">
                                            <br><br>
                                            <div class="pdf-container">
                                                <embed src="<?= base_url() ?>Pelatihan/approval/<?= $user ?>"
                                                    type="application/pdf" width="100%" height="600px">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PENGALAMAN KERJA -->
                                <p>
                                    <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                        data-toggle="collapse" data-target="#Bagian5" aria-expanded="false"
                                        aria-controls="Bagian5">
                                        PENGALAMAN KERJA
                                    </button>
                                </p>
                                <br>
                                <div class="collapse mb-4" id="Bagian5">
                                    <div class="card card-body">
                                        <div class="table-responsive">
                                            <br><br>
                                            <div class="pdf-container">
                                                <embed src="<?= base_url() ?>Pengalaman/approval/<?= $user ?>"
                                                    type="application/pdf" width="100%" height="600px">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>
                                    <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                        data-toggle="collapse" data-target="#Bagian6" aria-expanded="false"
                                        aria-controls="Bagian6">
                                        VERIFIKASI SUMBER UTAMA <i>(PRIMARY SOURCE VERIFICATION)</i>
                                    </button>
                                </p>
                                <br>
                                <div class="collapse mb-4" id="Bagian6">
                                    <div class="card card-body">
                                        <!-- VSU PENDIDIKAN -->
                                        <p>
                                            <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                                data-toggle="collapse" data-target="#Bagian7" aria-expanded="false"
                                                aria-controls="Bagian7">
                                                PENDIDIKAN
                                            </button>
                                        </p>
                                        <br>
                                        <div class="collapse mb-4" id="Bagian7">
                                            <div class="card card-body">
                                                <div class="table-responsive">
                                                    <br><br>
                                                    <div class="pdf-container">
                                                        <embed
                                                            src="<?= base_url() ?>Vsu_pendidikan/approval/<?= $user ?>"
                                                            type="application/pdf" width="100%" height="600px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- VSU SURAT IZIN -->
                                        <p>
                                            <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                                data-toggle="collapse" data-target="#Bagian8" aria-expanded="false"
                                                aria-controls="Bagian8">
                                                SURAT IZIN
                                            </button>
                                        </p>
                                        <br>
                                        <div class="collapse mb-4" id="Bagian8">
                                            <div class="card card-body">
                                                <div class="table-responsive">
                                                    <br><br>
                                                    <div class="pdf-container">
                                                        <embed
                                                            src="<?= base_url() ?>Vsu_suratizin/approval/<?= $user ?>"
                                                            type="application/pdf" width="100%" height="600px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- VSU PENGALAMAN -->
                                        <p>
                                            <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                                data-toggle="collapse" data-target="#Bagian9" aria-expanded="false"
                                                aria-controls="Bagian9">
                                                PENGALAMAN
                                            </button>
                                        </p>
                                        <br>
                                        <div class="collapse mb-4" id="Bagian9">
                                            <div class="card card-body">
                                                <div class="table-responsive">
                                                    <br><br>
                                                    <div class="pdf-container">
                                                        <embed
                                                            src="<?= base_url() ?>Vsu_pengalaman/approval/<?= $user ?>"
                                                            type="application/pdf" width="100%" height="600px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian10" aria-expanded="false" aria-controls="Bagian8">
                                    SURAT KETERANGAN SEHAT
                                </button>
                                </p> <br>

                                <div class="collapse mb-4" id="Bagian10">
                                    <div class="card card-body">
                                        <div class="table-responsive">

                                            <?php if (!empty($sehat)): ?>
                                            <?php foreach ($sehat as $s): ?>

                                            <!-- Surat Keterangan Sehat -->
                                            <div class="form-group"><label>Formulir Data Karyawan</label>
                                                <div class="pdf-container">
                                                    <?php if ($s->surat_keterangan != ''): ?>
                                                    <embed
                                                        src="<?= base_url() ?>assets/upload/berkas_sehat/<?= $s->surat_keterangan ?>"
                                                        type="application/pdf" width="100%" height="600px">
                                                    <?php else: ?>
                                                    <p>File Surat Keterangan Tidak Tersedia.</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php else: ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php foreach ($approve as $a): ?>
                    <form id="approve-form" action="<?= base_url() ?>approve_pengajuan/proses_diterima/<?= $a->id ?>"
                        method="post">
                        <input type="hidden" name="id" value="<?= $a->id ?>">
                        <div class="form-group">
                            <label>Catatan</label>
                            <input class="form-control" name="catatan" type="text" value="<?= $a->catatan ?>">
                        </div>
                        <div class="form-group">
                            <label>Status Pengajuan</label>
                            <select name="status" class="form-control">
                                <option value="Disetujui" <?php if($a->status == "Disetujui"): ?> selected
                                    <?php endif; ?>>
                                    Disetujui
                                </option>
                                <option value="Ditolak" <?php if($a->status == "Ditolak"): ?> selected <?php endif; ?>>
                                    Ditolak
                                </option>
                            </select>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success btn-md btn-icon-split">
                                <span class="text text-white">Approve Pengajuan</span>
                                <span class="icon text-white-50">
                                    <i class="fas fa-save"></i>
                                </span>
                            </button>
                        </div>
                    </form>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/barang.js"></script>
<script src="<?= base_url(); ?>assets/js/loading.js"></script>
<script src="<?= base_url(); ?>assets/plugin/chosen/chosen.jquery.min.js"></script>

<script>
$('.chosen').chosen({
    width: '100%',

});
</script>

<!-- Javascript pas foto -->
<script>
function fileIsValid(fileName) {
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

            break;
        default:
            this.value = '';
            isValid = false;
    }
    return isValid;
}

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

function VerifyPasFotoNameAndSize() {
    var file = document.getElementById('pasfoto').files[0];
    if (file != null) {
        var fileName = file.name;
        if (fileIsValid(fileName) == false) {
            validasi('Format bukan gambar!', 'warning');
            document.getElementById('pasfoto').value = null;
            return false;
        }
        var content;
        var size = file.size;
        if ((size != null) && ((size / (1024 * 1024)) > 3)) {
            validasi('Ukuran maximum 1024px', 'warning');
            document.getElementById('pasfoto').value = null;
            return false;
        }

        var ext = fileName.match(/\.([^\.]+)$/)[1];
        ext = ext.toLowerCase();
        $("#pasphoto").addClass("selected").html(file.name);
        document.getElementById('outputImg').src = window.URL.createObjectURL(file);
        return true;

    } else
        return false;
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

function logFileUpload(event) {
    var file = event.target.files[0];
    console.log("Uploaded file:", file);

}

function submitForm(formId) {
    // Mengubah nilai status menjadi "Diterima"
    document.getElementById(formId).status.value = "Diterima";

    // Mengirimkan form
    document.getElementById(formId).submit();
}
</script>