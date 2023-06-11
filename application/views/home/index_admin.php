<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard </h1>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" id="barang">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barang Inventaris
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Data
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" id="supplier">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Perawatan
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Data
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" id="stok">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Perbaikan
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Data
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" id="user">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Data
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4" id="grafik">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
                    <h6 class="m-0 font-weight-bold border-0 text-white"></h6>

                    <div class="col-lg-2">
                        <select name="tahun" id="tahun" class="form-control" onchange="filterTahun()">
                            <option value="<?= $yearnow ?>"><?= $yearnow ?></option>
                            <option value="<?= $previousyear ?>"><?= $previousyear ?></option>
                            <option value="<?= $twoyearago ?>"><?= $twoyearago ?></option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area" id="chart">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/sbadmin/vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>assets/js/chart/chart-area.js"></script>
<script src="<?= base_url(); ?>assets/js/chart/pie-chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="<?= base_url(); ?>assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dashboard.js"></script>

<?php if ($this->session->flashdata('Pesan')): ?>

<?php else: ?>
    <script>
        $(document).ready(function () {
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
                $("#barang").addClass("bounceIn");
                $("#supplier").addClass("bounceIn");
                $("#stok").addClass("bounceIn");
                $("#user").addClass("bounceIn");
                $("#grafik").addClass("bounceIn");
                $("#grafikpie").addClass("bounceIn");
                $("#bmterakhir").addClass("bounceIn");
                $("#bkterakhir").addClass("bounceIn");
            })
        });
    </script>
<?php endif; ?>

<script>
    $(document).ready(function () {

        getBulan();

    });
</script>

<script>
    function filterTahun() {
        $("#chart").empty();
        $('#chart').append('<canvas id="myAreaChart"></canvas>');
        getBulan();
    }
</script>

<script>
    function getBulan() {
        var tahun = $('#tahun').val();
        var link = $('#baseurl').val();
        var base_url = link + 'home/getFilterTahun';
        $.ajax({
            type: 'POST',
            data: {
                tahun: tahun,
            },
            url: base_url,
            dataType: 'json',
            success: function (hasil) {
                grafik(
                    hasil.bmJanuari,
                    hasil.bmFebruari,
                    hasil.bmMaret,
                    hasil.bmApril,
                    hasil.bmMei,
                    hasil.bmJuni,
                    hasil.bmJuli,
                    hasil.bmAgustus,
                    hasil.bmSeptember,
                    hasil.bmOktober,
                    hasil.bmNovember,
                    hasil.bmDesember
                );
            }
        });

    }
</script>
<script>
    function grafik(
        bmJanuari, bmFebruari, bmMaret, bmApril, bmMei, bmJuni,
        bmJuli, bmAgustus, bmSeptember, bmOktober, bmNovember, bmDesember
    ) {
        // Area Chart Example
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [
                    {
                        label: "Perbaikan",
                        lineTension: 0.3,
                        backgroundColor: "rgb(255, 153, 0)",
                        borderColor: "rgb(0, 0, 255)",
                        pointRadius: 3,
                        pointBackgroundColor: "rgb(255, 255, 0)",
                        pointBorderColor: "rgb(255, 255, 0)",
                        pointHoverRadius: 3,
                        pointHoverBackgroundColor: "rgb(255, 255, 0)",
                        pointHoverBorderColor: "rgb(255, 255, 0)",
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        data: [
                            bmJanuari,
                            bmFebruari,
                            bmMaret,
                            bmApril,
                            bmMei,
                            bmJuni,
                            bmJuli,
                            bmAgustus,
                            bmSeptember,
                            bmOktober,
                            bmNovember,
                            bmDesember,
                        ],
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a dollar sign in the ticks
                            callback: function (value) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: true
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function (tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
        return myLineChart;
    }
</script>