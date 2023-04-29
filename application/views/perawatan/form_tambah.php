<!-- Begin Page Content -->
<div class="container-fluid">

    <form action="<?= base_url() ?>perawatan/proses_tambah/" name="myForm" method="POST" enctype="multipart/form-data"
        onsubmit="return validateForm()">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a id="btn_back" href="<?= base_url() ?>perawatan/laporan" class="btn btn-md btn-circle btn-dark">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Tambah Perawatan Barang</h1>
            </div>
            <button type="submit" class="btn btn-primary btn-md btn-icon-split">
                <span class="text text-white">Simpan Data</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>

        </div>

        <div class="d-sm-flex  justify-content-center mb-0">
            <div class="col-lg-8 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-secondary shadow mb-4">
                    <div class="card-header py-3 bg-dark">
                        <h6 class="m-0 font-weight-bold text-white">Form Perawatan Barang</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                            <form action="<?=site_url('Perawatan/tambah')?>" method="post">
                                <div class="form-group">
                                    <label>Tanggal Perawatan</label>
                                    <input type="date" name="tanggal_perawatan" value="<?=date('Y-m-d')?>"
                                        class="form-control" required>
                                </div>
                                <!-- <?php if($jmluser > 0): ?>
                            <div class="form-group"><label>Kode Barang</label>
                                <select id="kode_barang" name="kode_barang" class="form-control chosen">
                                    <option value="">--Pilih--</option>
                                    <?php foreach($barang as $j): ?>
                                    <option value="<?= $j->id_barang ?>"><?= $j->id_barang ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <?php else: ?>
                            
                            <?php endif; ?> -->
                                <div class="form-group">
                                    <label for="nama">Nama Pemelihara</label>

                                    <input type="text" id="nama" name="nama" class="form-control"
                                        value="<?= $this->session->userdata('login_session')['username'] ?>" readonly>
                                </div>

                                <div>
                                    <label for="id_barang">Kode Barang</label>
                                </div>
                                <div class="form-group input-group">
                                    <input type="text" name="id_barang" id="id_barang" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal"
                                            data-target="#modal-item">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" id="nama_barang" name="nama_barang" class="form-control"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <label for="posisi">Posisi</label>
                                    <input type="text" name="posisi" id="posisi" class="form-control" readonly>
                                </div>

                                <!-- tanggal masuk -->
                                <div class="form-group"><label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <option value="Aman">Aman</option>
                                        <option value="Perlu Diperbaiki">Perlu Diperbaiki</option>
                                    </select>
                                </div>

                                <div class="form-group"><label>Keterangan</label>
                                    <input class="form-control" name="keterangan" type="text" placeholder="">
                                </div>
                            </form>
                        </div>

                        <br>
                    </div>
                </div>

            </div>

        </div>


    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<div class="modal fade " id="modal-item">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header ">
                <h4 class="modal-title ">Barang Inventaris</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-hover " id="dtHorizontalExample" width="100%">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Posisi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <?php foreach ($barang as $b => $data) { ?>
                        <tr>
                            <td><?=$data->id_barang?></td>
                            <td><?=$data->nama_barang?></td>
                            <td><?=$data->posisi?></td>
                            <td>
                                <button class="btn btn-sm btn-info select" data-id_barang="<?=$data->id_barang ?>"
                                    data-nama_barang="<?=$data->nama_barang ?>" data-posisi="<?=$data->posisi ?>">
                                    <i class="fa fa-check">Select</i>
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/perawatan.js"></script>
<script src="<?= base_url(); ?>assets/js/loading.js"></script>
<script src="<?= base_url(); ?>assets/js/validasi/formbarang.js"></script>
<script src="<?= base_url(); ?>assets/plugin/chosen/chosen.jquery.min.js"></script>
<script>
$(document).ready(function() {
    if (<?= $b?>) {
        $('#btn_back').val('<?php echo $b ?>');
    }
});
</script>
<script>
$('.chosen').chosen({
    width: '100%',

});
</script>

<?php if($this->session->flashdata('Pesan')): ?>

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

<script>
$("#modal-item").on('click', '.select', function() {
    var id_barang = $(this).data('id_barang'); // get current row 2nd TD
    var nama_barang = $(this).data('nama_barang');
    var posisi = $(this).data('posisi');

    console.log($(this).data());
    $('#id_barang').val(id_barang);
    $('#nama_barang').val(nama_barang);
    $('#posisi').val(posisi);

    $('#modal-item').modal('hide');
});
</script>

<script>
function validateForm() {
    var id_barang = document.forms["myForm"]["nama_barang"].value;
    var status = document.forms["myForm"]["status"].value;
    var keterangan = document.forms["myForm"]["keterangan"].value;

    if (id_barang == "") {
        validasi('ID Barang wajib di isi!', 'warning');
        return false;
    } else if (status == '') {
        validasi('Status wajib di isi!', 'warning');
        return false;
    } else if (keterangan == '') {
        validasi('Keterangan Perawatan wajib di isi!', 'warning');
        return false;
    }
}
</script>