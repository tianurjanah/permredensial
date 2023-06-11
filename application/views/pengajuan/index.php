<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Riwayat Pengajuan</h1>
        <a href="<?= base_url() ?>pengajuan/tambah" class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Tambah Data Pengajuan</span>
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        </a>
    </div>

    <div class="col-lg-12 mb-4" id="container">

        <!-- Illustrations -->
        <div class="card border-bottom-secondary shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dtHorizontalExample" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Jenis Pengajuan</th>
                                <th class="text-center">Tanggal Pengajuan</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody style="cursor:pointer;" id="tbody">
                            <?php $no = 1;
                            foreach ($pengajuan_index as $pi): ?>
                            <tr>
                                <td onclick="detail('<?= $pi->id ?>')" class="text-center"><?= $no++ ?></td>
                                <td onclick="detail('<?= $pi->id ?>')"><?= $pi->kategori ?></td>
                                <td onclick="detail('<?= $pi->id ?>')" class="text-center"><?= $pi->tgl_pengajuan ?>
                                </td>
                                <td onclick="detail('<?= $pi->id ?>')" class="text-center"><?= $pi->status ?></td>
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
<script src="<?= base_url(); ?>assets/js/barang.js"></script>
<?php if ($this->session->flashdata('Pesan')): ?>
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

<script>
function detail(id) {
    var base_url = $('#baseurl').val();
    window.location.href = base_url + "barang/detail/" + id;

}
</script>