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
                        <form action="<?= base_url() ?>berkas/biodata_sehat" name="myForm" method="POST"
                            enctype="multipart/form-data">


                            <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                data-target="#Bagian1" aria-expanded="false" aria-controls="Bagian1">
                                BIODATA
                            </button>
                            </p> <br>

                            <div class="collapse mb-4" id="Bagian1">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <div class="card bg-warning mb-4 text-white shadow">
                                            <div class="card-body">
                                                Format
                                                <div class="text-white-45 small">.png .jpeg .jpg .tiff .gif .tif .pdf
                                                </div>
                                            </div>
                                        </div>

                                        <!-- suratlamaran -->
                                        <div class="form-group"><label>Surat Lamaran</label>
                                            <div class="custom-file">
                                                <input class="custom-file-input" type="file" id="suratlamaran"
                                                    name="suratlamaran" onchange="VerifyLampiran(event)"
                                                    accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                <label class="custom-file-label" for="customFile" id="filelamaran">Pilih
                                                    File</label>
                                            </div><br><br>
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
                                        <div class="form-group"><label>Curriculum Vitae</label>
                                            <div class="custom-file">
                                                <input class="custom-file-input" type="file" id="currivitae"
                                                    name="currivitae" onchange="VerifyLampiran(event)"
                                                    accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                <label class="custom-file-label" for="customFile" id="filecv">Pilih
                                                    File</label>
                                            </div><br><br>
                                            <div class="pdf-container">
                                                <?php if ($b->cv != ''): ?>
                                                <embed src="<?= base_url() ?>assets/upload/berkas_biodata/<?= $b->cv ?>"
                                                    type="application/pdf" width="100%" height="600px">
                                                <?php else: ?>
                                                <p>File Surat Lamaran Tidak Tersedia.</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group"><label>Formulir Data Karyawan</label>
                                            <div class="custom-file">
                                                <input class="custom-file-input" type="file" id="datakaryawan"
                                                    name="datakaryawan" onchange="VerifyLampiran(event)"
                                                    accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                <label class="custom-file-label" for="customFile" id="filelamaran">Pilih
                                                    File</label>
                                            </div><br><br>
                                            <div class="pdf-container">
                                                <?php if ($b->formulir_data != ''): ?>
                                                <embed
                                                    src="<?= base_url() ?>assets/upload/berkas_biodata/<?= $b->formulir_data ?>"
                                                    type="application/pdf" width="100%" height="600px">
                                                <?php else: ?>
                                                <p>File Surat Lamaran Tidak Tersedia.</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="form-group"><label>Scan KTP</label>
                                            <div class="custom-file">
                                                <input class="custom-file-input" type="file" id="scanktp" name="scanktp"
                                                    onchange="VerifyLampiran(event)"
                                                    accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                <label class="custom-file-label" for="customFile" id="filelamaran">Pilih
                                                    File</label>
                                            </div><br><br>
                                            <div class="pdf-container">
                                                <?php if ($b->ktp != ''): ?>
                                                <embed
                                                    src="<?= base_url() ?>assets/upload/berkas_biodata/<?= $b->ktp ?>"
                                                    type="application/pdf" width="100%" height="600px">
                                                <?php else: ?>
                                                <p>File Surat Lamaran Tidak Tersedia.</p>
                                                <?php endif; ?>

                                            </div>

                                        </div>

                                    </div>
                                    <button type="submit"
                                        class="btn btn-success btn-md col-lg-2,9 btn-icon-split ml-auto">
                                        <span class="text text-white">Simpan Berkas Biodata</span>
                                        <span class="icon text-white-50">
                                            <i class="fas fa-save"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <div class="card-body">
                                <div class="col-lg-12">
                                    <p>
                                    <form action="<?= base_url() ?>berkas/biodata_tambah" name="myForm" method="POST"
                                        enctype="multipart/form-data">


                                        <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                            data-toggle="collapse" data-target="#Bagian1" aria-expanded="false"
                                            aria-controls="Bagian1">
                                            BIODATA
                                        </button>
                                        </p> <br>

                                        <div class="collapse mb-4" id="Bagian1">
                                            <div class="card card-body">
                                                <div class="table-responsive">
                                                    <div class="card bg-warning mb-4 text-white shadow">
                                                        <div class="card-body">
                                                            Format
                                                            <div class="text-white-45 small">.png .jpeg .jpg .tiff .gif
                                                                .tif .pdf
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- suratlamaran -->
                                                    <div class="form-group"><label>Surat Lamaran</label>
                                                        <div class="custom-file">
                                                            <input class="custom-file-input" type="file"
                                                                id="suratlamaran" name="suratlamaran"
                                                                onchange="VerifyLampiran(event)"
                                                                accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                            <label class="custom-file-label" for="customFile"
                                                                id="filelamaran">Pilih
                                                                File</label>
                                                        </div><br><br>
                                                    </div>
                                                    <!-- cv -->
                                                    <div class="form-group"><label>Curriculum Vitae</label>
                                                        <div class="custom-file">
                                                            <input class="custom-file-input" type="file" id="currivitae"
                                                                name="currivitae" onchange="VerifyLampiran(event)"
                                                                accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                            <label class="custom-file-label" for="customFile"
                                                                id="filecv">Pilih
                                                                File</label>
                                                        </div><br><br>
                                                    </div>
                                                    <div class="form-group"><label>Formulir Data Karyawan</label>
                                                        <div class="custom-file">
                                                            <input class="custom-file-input" type="file"
                                                                id="datakaryawan" name="datakaryawan"
                                                                onchange="VerifyLampiran(event)"
                                                                accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                            <label class="custom-file-label" for="customFile"
                                                                id="filelamaran">Pilih
                                                                File</label>
                                                        </div><br><br>
                                                    </div>
                                                    <div class="form-group"><label>Scan KTP</label>
                                                        <div class="custom-file">
                                                            <input class="custom-file-input" type="file" id="scanktp"
                                                                name="scanktp" onchange="VerifyLampiran(event)"
                                                                accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                            <label class="custom-file-label" for="customFile"
                                                                id="filelamaran">Pilih
                                                                File</label>
                                                        </div><br><br>

                                                    </div>

                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success btn-md col-lg-2,9 btn-icon-split ml-auto">
                                                    <span class="text text-white">Simpan Berkas Biodata</span>
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-save"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
                                                    <embed src="<?= base_url() ?>berkas/berkas_ijazah"
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
                                                    <embed src="<?= base_url() ?>SuratIzin/index" type="application/pdf"
                                                        width="100%" height="600px">
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
                                                    <embed src="<?= base_url() ?>Pelatihan/index" type="application/pdf"
                                                        width="100%" height="600px">
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
                                                    <embed src="<?= base_url() ?>Pengalaman/index"
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
                                                            <embed src="<?= base_url() ?>Vsu_pendidikan/index"
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
                                                            <embed src="<?= base_url() ?>Vsu_suratizin/index"
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
                                                            <embed src="<?= base_url() ?>Vsu_pengalaman/index"
                                                                type="application/pdf" width="100%" height="600px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="<?= base_url() ?>berkas/biodata_sehat" name="myForm" method="POST"
                                        enctype="multipart/form-data">


                                        <button class="btn btn-primary col-lg-12 btn-info" type="button"
                                            data-toggle="collapse" data-target="#Bagian8" aria-expanded="false"
                                            aria-controls="Bagian8">
                                            SURAT KETERANGAN SEHAT
                                        </button>
                                        </p> <br>

                                        <div class="collapse mb-4" id="Bagian8">
                                            <div class="card card-body">
                                                <div class="table-responsive">
                                                    <div class="card bg-warning mb-4 text-white shadow">
                                                        <div class="card-body">
                                                            Format
                                                            <div class="text-white-45 small">.png .jpeg .jpg .tiff .gif
                                                                .tif .pdf
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <?php if (!empty($sehat)): ?>
                                                    <?php foreach ($sehat as $s): ?>

                                                    <!-- Surat Keterangan Sehat -->
                                                    <div class="form-group"><label>Surat Keterangan Sehat</label>
                                                        <div class="custom-file">
                                                            <input class="custom-file-input" type="file"
                                                                id="surat_keterangan" name="surat_keterangan"
                                                                onchange="VerifyLampiran(event)"
                                                                accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                                            <label class="custom-file-label" for="customFile"
                                                                id="fileketerangan">Pilih
                                                                File</label>
                                                        </div><br><br>
                                                        <div class="pdf-container">
                                                            <?php if ($s->surat_keterangan != ''): ?>
                                                            <embed
                                                                src="<?= base_url() ?>assets/upload/berkas_sehat/<?= $s->surat_keterangan ?>"
                                                                type="application/pdf" width="100%" height="600px">
                                                            <?php else: ?>
                                                            <p>File Surat Keterangan Sehat Tidak Tersedia.</p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                </div>
                                                <button type="submit"
                                                    class="btn btn-success btn-md col-lg-2,9 btn-icon-split ml-auto">
                                                    <span class="text text-white">Simpan Berkas Surat Keterangan
                                                        Sehat</span>
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-save"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php else: ?>

                                    <!-- suratlamaran -->
                                    <div class="form-group"><label>Surat Keterangan Sehat</label>
                                        <div class="custom-file">
                                            <input class="custom-file-input" type="file" id="surat_keterangan"
                                                name="surat_keterangan" onchange="VerifyLampiran(event)"
                                                accept=".png,.gif,.jpeg,.tiff,.jpg,.pdf">
                                            <label class="custom-file-label" for="customFile" id="fileketerangan">Pilih
                                                File</label>
                                        </div><br><br>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-md col-lg-2,9 btn-icon-split ml-auto">
                                    <span class="text text-white">Simpan Berkas Surat
                                        Keterangan Sehat</span>
                                    <span class="icon text-white-50">
                                        <i class="fas fa-save"></i>
                                    </span>
                                </button>
                            </div>
                    </div>
                    </form>
                    <?php endif; ?>
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
</script>