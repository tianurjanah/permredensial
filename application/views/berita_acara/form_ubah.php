<!-- Begin Page Content -->

<div class="container-fluid">


    <div class="d-sm-flex  justify-content-between mb-0">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card border-bottom-info shadow mb-4">
                <div class="card-header py-3 bg-info">
                    <h6 class="m-0 font-weight-bold text-white">Approve Kredensialing</h6>
                </div>

                <div class="card-body">
                    <div class="col-lg-12">

                        <?php foreach ($acara as $a): ?>
                            <form id="approve-form" action="<?= base_url() ?>berita_acara/proses_ubah_acara/<?= $a->id ?>"
                                method="post">
                                <input type="hidden" name="id" value="<?= $a->id ?>">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input class="form-control" name="catatan" type="text" value="<?= $a->catatan ?>">
                                </div>

                                <!-- MITRA BESTARI -->
                                <?php if (count($user) > 0): ?>
                                    <div class="form-group"><label>Mitra Bestari</label>
                                        <select name="mitra" class="form-control chosen">
                                            <?php foreach ($user as $u): ?>

                                                <?php if ($a->user == $u->id_user): ?>
                                                    <option value="<?= $u->nama ?>" selected>
                                                        <?= $u->nama ?></option>
                                                <?php else: ?>
                                                    <option value="<?= $u->nama ?>">
                                                        <?= $u->nama ?></option>
                                                <?php endif; ?>

                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                <?php else: ?>
                                <?php endif; ?>

                                <div class="form-group">
                                    <label>Komite</label>
                                    <input class="form-control" name="komite" type="text" value="<?= $a->komite ?>">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Status Pengajuan</label>
                                    <select name="status" class="form-control">
                                        <option value="DISETUJUI sebagaimana permintaan" <?php if($a->status == "DISETUJUI sebagaimana permintaan"): ?> selected
                                            <?php endif; ?>>
                                            DISETUJUI sebagaimana permintaan
                                        </option>
                                        <option value="DISETUJUI dengan modifikasi (lihat bawah)" <?php if($a->status == "DISETUJUI dengan modifikasi (lihat bawah)"): ?> selected <?php endif; ?>>
                                            DISETUJUI dengan modifikasi (lihat bawah)
                                        </option>
                                        <option value="DITOLAK (lihat bawah)" <?php if($a->status == "DITOLAK (lihat bawah)"): ?> selected <?php endif; ?>>
                                            DITOLAK (lihat bawah)
                                        </option>
                                    </select>
                                </div>

                                <input type="hidden" name="id" value="<?= $a->id ?>">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input class="form-control" name="catatan" type="text" value="<?= $a->catatan ?>">
                                </div>
                                
                                <input type="hidden" name="id" value="<?= $a->id ?>">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input class="form-control" name="tanggal" type="text" value="<?= $a->tanggal ?>">
                                </div>

                                
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success btn-md btn-icon-split">
                                        <span class="text text-white">Approve Kredensialing Komite</span>
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