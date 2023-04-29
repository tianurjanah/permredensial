<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Perawatan Barang Inventaris</h1>
        <a id="btn_tambah" href="<?= base_url() ?>perawatan/tambah" class="btn btn-sm btn-primary btn-icon-split">
            <span class="text text-white">Tambah Perawatan Barang</span>
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        </a>

    </div>

    <div class="row mb-4"  >
            <!-- DataTable with Hover -->
            <div class="col-lg-12 " style="max-width:60%;margin-left:14rem;">
            <div class="card ">
                <div class="card-header bg-info">
                    <h6 class="m-1 font-weight-bold text-white">Pilih Tanggal & Tahun</h6>
                </div>
                <div class="card-body">
                <table class="table" >
                <form action="<?php echo site_url().'perawatan/laporan'; ?>" method="post">
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
                    <td><select class="form-control" id="tahun" name="tahun">
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
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
        </form>
        <div class="row">
          
            <div class="col-lg-12 mb-4 ">
            <!-- Simple Tables -->
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
                                        <?php if($p->status == "Diperbaiki"): ?>
                                        <a class="btn btn-circle btn-warning btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a class="btn btn-circle btn-dark btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <?php else: ?>
                                        <a href="<?= base_url() ?>perawatan/ubah/<?= $p->kode_perawatan ?>"
                                            class="btn btn-circle btn-warning btn-sm">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" onclick="konfirmasi('<?= $p->kode_perawatan?>')"
                                            class="btn btn-circle btn-dark btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <?php endif; ?>
                                        <a href="<?= base_url() ?>perawatan/detail/<?= $p->kode_perawatan ?>"')"
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/perawatan.js"></script>
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
    $("#btn_tambah").attr("href", '<?= base_url('perawatan/tambah?bulan=') ?>' + $('#exampleFormControlSelect1 option:selected').val()+'&tahun='+$('#tahun option:selected').val())
});


</script>
<?php endif; ?>

<script>
function konfirmasi(id) {
    var base_url = $('#baseurl').val();

    var select = document.getElementById('exampleFormControlSelect1');
    var bulan = select.options[select.selectedIndex].value;

    var select = document.getElementById('tahun');
    var tahun = select.options[select.selectedIndex].value;

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
                    window.location.href = base_url + "perawatan/proses_hapus/" + id +'/' + bulan +'/' + tahun;
                }
            );
        }
    });
}
</script>
