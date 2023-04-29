<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Perawatan Barang Inventaris</h1>
        <!-- <a id="btn_tambah" href="<?= base_url() ?>perawatan/tambah" class="btn btn-sm btn-primary btn-icon-split">
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
                <div class="card-header bg-info">
                    <h6 class="m-1 font-weight-bold text-white">Range Tanggal Perawatan</h6>
                </div>
                <div class="card-body">
                <table class="table" >
                <form action="<?php echo site_url().'laporanprw/filter'; ?>" method="post">
                    <thead class="thead-light">
                    <tr>
                        <th> Tanggal Awal</th>
                        <th> Tanggal Akhir</th>
                    </tr>
                    </thead>
                <tbody>
                <tr><td><input type="date"  class="form-control" id="tanggalawal" name="tanggalawal" value="<?= isset($tanggalawal) ? $tanggalawal : ''; ?>">
                    </input></td>
                    <td><input type="date" class="form-control" id="tanggalakhir" name="tanggalakhir" value="<?= isset($tanggalakhir) ? $tanggalakhir : ''; ?>">
                    </input></td></tr>
                    <tr>
                        <td colspan="2"  style="text-align:center;">
                        <button id="btn_tampil" type="submit" class="btn btn-primary btn-icon-split" style=" margin-left: auto;margin-right: auto;" value="filter" name="submittype">
                            <span class="icon text-white-50">
                        <i class="fas fa-box"></i>
                        </span>
                            <span class="text text-white">Tampilkan</span>
                        </button>

                        <button type="submit" formtarget="_blank" style=" margin-left: auto;margin-right: auto;" class="btn btn-warning btn-icon-split" name="submittype" value="print">
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
        </form>
        <!-- <h5 style="text-align:center;"><?php echo $subtitle ?></h5> -->
        <div class="row">
          
            <div class="col-lg-12 mb-4 ">
            
                <div class="card" >
                    <div class="card-header bg-info py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-white">Data Perawatan Barang</h6>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Posisi</th>
                        <th>Nama Pemelihara</th>
                        <th>Tanggal Perawatan</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody style="cursor:pointer;" id="tbody"> 
                            <?php $no=1; foreach ($perawatan as $p): ?>
                            <tr>
                                <td ><?php echo $no++;?></td>
                                <td ><?php echo $p->nama_barang;?></td>
                                <td ><?php echo $p->posisi;?></td>
                                <td ><?php echo $p->nama;?></td>
                                <td ><?php echo $p->tanggal_perawatan;?></td>
                                <td >

                                <?php if($p->status == "Aman"){ ?>
                                    <span class="badge badge-success"><?php echo $p->status;?></span>
                                        <?php ;}elseif($p->status == "Perlu Diperbaiki"){ ?>
                                            <span class="badge badge-danger"><?php echo $p->status;?></span>
                                                <?php ;}else{ ?>
                                                    <span class="badge badge-warning"><?php echo $p->status;?></span>
                                                        <?php ;} ?>
                            
                                </td>
                                <td ><?php echo $p->keterangan;?></td>
                                <td>    
                                        <a href="<?= base_url() ?>laporanprw/detailprw/<?= $p->kode_perawatan ?>"')"
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
<script>
    $(document).ready(function() {
        if(<?= $b?>){
            $('#tanggalawal').val('<?php echo $tanggalawal ?>');
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

$('#tanggalawal').on('change', function() {
    $("#btn_tampil").attr("href", '<?= base_url('laporanprw/filter?tanggalawal=') ?>' + $('#tanggalawal option:selected').val()+'&tanggalakhir='+$('#tanggalakhir option:selected').val())
});


</script>
<?php endif; ?>

<script>
function konfirmasi(id) {
    var base_url = $('#baseurl').val();

    swal.fire({
        title: "Hapus Data ini?",
        icon: "warning",
        closeOnClickOutside: false,
        showCancelButton: true,
        confirmButtonText: 'Iya',
        confirmButtonColor: '#4e73df',
        cancelButtonText: 'Batal',
        cancelButtonColor: '#d33',
    }).then((result) => {
        if (result.value) {
            Swal.fire({
                title: "Memuat...",
                onBeforeOpen: () => {
                    Swal.showLoading()
                },
                timer: 1000,
                showConfirmButton: false,
            }).then(
                function() {
                    window.location.href = base_url + "perawatan/proses_hapus/" + id;
                }
            );
        }
    });
}
</script>

<script>
function copytextbox() {
    document.getElementById('awal').value = document.getElementById('tanggalawal').value;
}
</script>