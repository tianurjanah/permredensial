<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Perbaikan Barang Inventaris</h1>
        <!-- <a href="<?= base_url() ?>perawatan/tambah" class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Tambah Perawatan Barang</span>
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        </a> -->

</div>
        <div class="row mb-4"  >
            <!-- DataTable with Hover -->
            <div class="col-lg-12 " style="max-width:60%;margin-left:14rem;">
            <div class="card ">
                <div class="card-header bg-warning">
                    <h6 class="m-1 font-weight-bold text-white">Pilih Tanggal & Tahun</h6>
                </div>
                <div class="card-body">
                <table class="table" >
                <form action="<?php echo site_url().'perbaikan/laporan'; ?>" method="post">
                    <thead class="thead-light">
                    <tr>
                        <th> Bulan</th>
                        <th> Tahun</th>
                    </tr>
                    </thead>
                <tbody>
                    <tr><td><select class="form-control" id="exampleFormControlSelect1" name="bulan">
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select></td>
                    <td><select class="form-control" id="exampleFormControlSelect1" name="tahun">
                        <option value="2021">2021</option>
                        <option value="1">2020</option>
                    </select></td></tr>
                    <tr>
                        <td colspan="2"  style="text-align:center;">
                        <button type="submit" class="btn btn-primary">Tampilkan</button>
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
                <div class="card" >
                    <div class="card-header bg-warning py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-white">Data Perawatan Barang</h6>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Posisi</th>
                        <th>Tanggal Perawatan</th>
                        <th>Nama Pemelihara</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody style="cursor:pointer;" id="tbody"> 
                            <?php $no=1; foreach ($perawatan as $p): ?>
                            <tr>
                                <td ><?php echo $no++;?></td>
                                <td ><?php echo $p->nama_barang;?></td>
                                <td ><?php echo $p->posisi;?></td>
                                <td ><?php echo $p->tanggal_perawatan;?></td>
                                <td ><?php echo $p->nama;?></td>
                                <td >

                                <?php if($p->status == 'Aman'): ?>
                                    <span class="badge badge-success badge-md">
                                    <?php else: ?>
                                    <span class="badge badge-danger badge-md">
                                    <?php endif; ?>
                                        <?= $p->status ?>
                                    </span>
                            
                                </td>
                                <td ><?php echo $p->keterangan;?></td>
                                <td>    
                                        <a id="btn_ubah" href="<?= base_url() ?>perbaikan/ubah/<?= $p->kode_perawatan ?>"
                                            class="btn btn-circle btn-warning btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="<?= base_url() ?>perbaikan/detailprw/<?= $p->kode_perawatan ?>"')"
                                            class="btn btn-circle btn-primary btn-sm">
                                            <i class="fas fa-info"></i>
                                        </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                </table>
              </div>
          </div>
        </div>
        
    </div>
    <div class="row">
          
            <div class="col-lg-12 mb-4 ">
            <!-- Simple Tables -->
                <div class="card" >
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
                        <th>Tanggal Perbaikan</th>
                        <th>Nama Pemelihara</th>
                        <th>Kerusakan</th>
                        <th>Penanganan</th>
                        <th>Kebutuhan Komponen</th>
                        <th>Total Biaya</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody style="cursor:pointer;" id="tbody"> 
                            <?php $no=1; foreach ($perbaikan as $r): ?>
                            <tr>
                                <td ><?php echo $no++;?></td>
                                <td ><?php echo $r->nama_barang;?></td>
                                <td ><?php echo $r->posisi;?></td>
                                <td >

                                <?php if($r->statusprb == 'Sedang Diperbaiki'): ?>
                                    <span class="badge badge-info badge-md">
                                    <?php else: ?>
                                    <span class="badge badge-primary badge-md">
                                    <?php endif; ?>
                                        <?= $r->statusprb ?>
                                    </span>
                            
                                </td>
                                <td ><?php echo $r->tanggal_perbaikan;?></td>
                                <td ><?php echo $r->namaprb;?></td>
                                <td ><?php echo $r->kerusakan;?></td>
                                <td ><?php echo $r->penanganan;?></td>
                                <td ><?php echo $r->kebutuhan_komponen;?></td>
                                <td >Rp <?php echo $r->total_biaya;?></td>
                                <td>    
                                        <a href="<?= base_url() ?>perbaikan/ubahprw/<?= $r->kode_perbaikan ?>"
                                            class="btn btn-circle btn-warning btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="<?= base_url() ?>perbaikan/detailprb/<?= $r->kode_perbaikan ?>"')"
                                            class="btn btn-circle btn-primary btn-sm">
                                            <i class="fas fa-info"></i>
                                        </a>
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
<script src="<?= base_url(); ?>assets/js/perawatan.js"></script>
<script src="<?= base_url(); ?>assets/js/perbaikan.js"></script>
<script>
    $(document).ready(function() {
        if(<?= $b?>){
            $('#exampleFormControlSelect1').val('<?php echo $b ?>');
        }
    });
</script>

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

$('#exampleFormControlSelect1').on('change', function() {
    $("#btn_ubah").attr("href", '<?= base_url('perbaikan/ubah?bulan=') ?>' + $('#exampleFormControlSelect1 option:selected').val()+'&tahun='+$('#tahun option:selected').val())
});

</script>
<?php endif; ?>
