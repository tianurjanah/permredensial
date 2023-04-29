<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Data Barang Inventaris</h1>


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
                                <th>Foto</th>
                                <th>Nama Barang</th>
                                <th>Posisi</th>
                                <th>Kategori</th>
                                <th>Tanggal Masuk</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody style="cursor:pointer;" id="tbody">
                            <?php $no=1; foreach ($laporanbarang as $b): ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><img style="border-radius: 5px;" src="assets/upload/barang/<?= $b->foto ?>" alt=""
                                        width="75px"></td>
                                <td><?= $b->nama_barang ?></td>
                                <td><?= $b->posisi ?></td>
                                <td><?= $b->nama_kategori ?></td>
                                <td><?= $b->tanggal_masuk ?></td>
                                <td>
                                    <a href="<?= base_url() ?>laporanbrg/detailbrg/<?= $b->id_barang ?>"')"
                                        class="btn btn-circle btn-primary btn-sm">
                                        <i class="fas fa-info"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <p>
                </div>
                <center>
                <a target="_blank" style=" margin-left: auto;margin-right: auto;" href="<?php echo site_url('laporanbrg/cetaklaporan/')?>" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-print"></i>
                    </span>
                    <span class="text text-white">Cetak Laporan</span>
                  </a> 
                            </center>
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
        title: ' Memuat...', timer: 1000, onBeforeOpen: ()=> {
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