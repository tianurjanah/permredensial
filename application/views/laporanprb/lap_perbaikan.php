<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Perbaikan Barang Inventaris</h1>
        <!-- <a href="<?= base_url() ?>perawatan/tambah" class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Tambah Perawatan Barang</span>
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        </a> -->

    </div>
    <div class="row mb-4">
        <!-- DataTable with Hover -->
        <div class="col-lg-12 " style="max-width:60%;margin-left:14rem;">
            <div class="card ">
                <div class="card-header bg-warning">
                    <h6 class="m-1 font-weight-bold text-white">Range Tanggal Perbaikan</h6>
                </div>
                <div class="card-body">
                    <table class="table">
                        <form action="<?php echo site_url().'laporanprb/filter'; ?>" method="post">
                            <thead class="thead-light">
                                <tr>
                                    <th> Tanggal Awal</th>
                                    <th> Tanggal Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="date" class="form-control" id="tanggalawal" name="tanggalawal"
                                            value="<?= isset($tanggalawal) ? $tanggalawal : ''; ?>">
                                        </input></td>
                                    <td><input type="date" class="form-control" id="tanggalakhir" name="tanggalakhir"
                                            value="<?= isset($tanggalakhir) ? $tanggalakhir : ''; ?>">
                                        </input></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align:center;">
                                        <button id="btn_tampil" type="submit" class="btn btn-primary btn-icon-split"
                                            style=" margin-left: auto;margin-right: auto;" value="filter"
                                            name="submittype">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-box"></i>
                                            </span>
                                            <span class="text text-white">Tampilkan</span>
                                        </button>

                                        <button type="submit" formtarget="_blank"
                                            style=" margin-left: auto;margin-right: auto;"
                                            class="btn btn-warning btn-icon-split" name="submittype" value="print">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-print"></i>
                                            </span>
                                            <span class="text text-white">Cetak PDF</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-12 mb-4 ">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-white">Data Perbaikan Barang</h6>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Posisi</th>
                                <th>Status</th>
                                <th>Nama Pemelihara</th>
                                <th>Tanggal Perbaikan</th>
                                <th>Kerusakan</th>
                                <th>Penanganan</th>
                                <th>Kebutuhan Komponen</th>
                                <th>Total Biaya</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody style="cursor:pointer;" id="tbody">
                            <?php $no=1; foreach ($perbaikan as $r): ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $r->nama_barang;?></td>
                                <td><?php echo $r->posisi;?></td>
                                <td>

                                    <?php if($r->statusprb == 'Sedang Diperbaiki'): ?>
                                    <span class="badge badge-warning badge-md">
                                        <?php else: ?>
                                        <span class="badge badge-primary badge-md">
                                            <?php endif; ?>
                                            <?= $r->statusprb ?>
                                        </span>

                                </td>
                                <td><?php echo $r->namaprb;?></td>
                                <td><?php echo $r->tanggal_perbaikan;?></td>
                                <td><?php echo $r->kerusakan;?></td>
                                <td><?php echo $r->penanganan;?></td>
                                <td><?php echo $r->kebutuhan_komponen;?></td>
                                <td>Rp <?php echo $r->total_biaya;?></td>
                                <td>
                                    <a href="<?= base_url() ?>laporanprb/detailprb/<?= $r->kode_perbaikan ?>"')"
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
              </div>
          </div>
        </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/perawatan.js"></script>
<script src="<?= base_url(); ?>assets/js/perbaikan.js"></script>
<script>
    $(document).ready(function() {
        if(<?= $b?>){
            $(' #tanggalawal').val('<?php echo $tanggalawal ?>'); } }); </script>

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

                                        $('#tanggalawal').on('change', function() {
                                            $("#btn_tampil").attr("href",
                                                '<?= base_url('laporanprb/filter?tanggalawal=') ?>' + $(
                                                    '#tanggalawal option:selected').val() +
                                                '&tanggalakhir=' + $('#tanggalakhir option:selected').val())
                                        });
                                        </script>
                                        <script>
                                        $(function() {
                                            $("#datepicker").datepicker({
                                                minDate: moment().add('d', 1).toDate(),
                                            });
                                        });
                                        </script>

                                        <script type="text/javascript">
                                        var tanggalawal = new tanggalawal();
                                        var tanggalakhir = new tanggalakhir();
                                        tanggalawal = new tglakhir(tanggalakhir);

                                        if (tanggalawal > tanggalakhir {
                                                alert('Given date is greater than the current date.');
                                            } else {
                                                alert('Given date is not greater than the current date.');
                                            }
                                            // var tanggalawal = new tgl().toISOString().split('T')[0];
                                            // document.getElementsByName("tanggalakhir")[0].setAttribute('min', tanggalawal);
                                        </script>
                                        <?php endif; ?>