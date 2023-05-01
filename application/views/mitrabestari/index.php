<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pengajuan</h1>
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
                                <th>Nama Tenaga Kesehatan</th>
                                <th>Nama Mitra Bestari</th>
                                <th>Tanggal Pengajuan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="cursor:pointer;" id="tbody"> 
                            <?php $no=1; foreach ($pengajuan as $p): ?>
                            <tr>
                                <td onclick="#"><?= $no++ ?>.</td>
                                <td onclick="#"><?= $p->nama ?></td>
                                <td onclick="#"><?= $p->nama_mitra ?></td>
                                <td onclick="#"><?= $p->tanggal_pengajuan ?></td>
                                <td>
                                    <center>
                                        <a href="<?= base_url() ?>mitrabestari/ubah/<?= $p->id ?>" class="btn btn-sm btn-success">
                                            <span class="text text-white">Atur Jadwal</span>
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
<script src="<?= base_url(); ?>assets/js/barang.js"></script>
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

<script>
    function detail(id) {
    var base_url = $('#baseurl').val();
    window.location.href = base_url + "barang/detail/" + id;

}
</script>