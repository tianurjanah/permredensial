<!-- Begin Page Content -->

<div class="container-fluid">

    <form action="<?= base_url() ?>proses_kredensialing/proses_ubah/<?= $id_pengajuan_index ?>" name="pengajuan-form"
        id="pengajuan-form" method="POST" enctype="multipart/form-data">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>pengajuan/index" class="btn btn-md btn-circle btn-info">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Tabel Pengajuan</h1>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success btn-md btn-icon-split" id="button-submit"
                    name="button-submit">
                    <span class="text text-white">Simpan Data Pengajuan</span>
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                </button>
            </div>

        </div>

        <div class="d-sm-flex  justify-content-between mb-0">
            <div class="col-lg-12 mb-4">
                <!-- Illustrations -->
                <div class="card border-bottom-info shadow mb-4">
                    <div class="card-header py-3 bg-info">
                        <h6 class="m-0 font-weight-bold text-white">Form Pengajuan</h6>
                    </div>

                    <div class="card-body">
                        <div class="col-lg-12">
                            <!-- Perusahaan -->
                            <div class="form-group"><label>Kategori Pengajuan</label>
                                <input class="form-control" name="ktg" id="id" type="text" placeholder=""
                                    value="<?= $ktg[0]->kategori ?>" readonly="">
                            </div>

                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian1" aria-expanded="false" aria-controls="Bagian1">
                                    Bagian I
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK PEMERIKSAAN RADIOGRAFI KONVENSIONAL TANPA KONTRAS</center>
                            </p>
                            <div class="collapse mb-4" id="Bagian1">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Kewenangan Diberikan</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian1 as $b1): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b1->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian1"
                                                                                                    name="bagian1[<?= $b1->id_kb ?>]" class="bagian1-radio"
                                                                                                    value="Tidak Disetujui" checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian1"
                                                                                                    name="bagian1[<?= $b1->id_kb ?>]" class="bagian1-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian1"
                                                                                                    name="bagian1[<?= $b1->id_kb ?>]" class="bagian1-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian2" aria-expanded="false" aria-controls="Bagian2">
                                    Bagian II
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK RADIOGRAFI KONVENSIONAL DENGAN KONTRAS</center>
                            </p>

                            <div class="collapse mb-4" id="Bagian2">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>

                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian2 as $b2): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b2->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian2"
                                                                                                    name="bagian2[<?= $b2->id_kb ?>]" class="bagian2-radio"
                                                                                                    value="Tidak Disetujui" checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian2"
                                                                                                    name="bagian2[<?= $b2->id_kb ?>]" class="bagian2-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian2"
                                                                                                    name="bagian2[<?= $b2->id_kb ?>]" class="bagian2-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian3" aria-expanded="false" aria-controls="Bagian3">
                                    Bagian III
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK PEMERIKSAAN RADIOGRAFI KONVENSIONAL TANPA KONTRAS</center>
                            </p>

                            <div class="collapse mb-4" id="Bagian3">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian3 as $b3): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b3->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian3"
                                                                                                    name="bagian3[<?= $b - 3 > id_kb ?>]"
                                                                                                    class="bagian3-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian3"
                                                                                                    name="bagian3[<?= $b3->id_kb ?>]" class="bagian3-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian3"
                                                                                                    name="bagian3[<?= $b3->id_kb ?>]" class="bagian3-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian4" aria-expanded="false" aria-controls="Bagian4">
                                    Bagian IV
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK CT SCAN TANPA KONTRAS</center>
                            </p>
                            <div class="collapse mb-4" id="Bagian4">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian4 as $b4): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b4->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian1"
                                                                                                    name="bagian4[<?= $b4->id_kb ?>]" class="bagian4-radio"
                                                                                                    value="Tidak Disetujui" checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian4"
                                                                                                    name="bagian4[<?= $b4->id_kb ?>]" class="bagian4-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian4"
                                                                                                    name="bagian4[<?= $b4->id_kb ?>]" class="bagian4-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian5" aria-expanded="false" aria-controls="Bagian5">
                                    Bagian V
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN CT SCAN DENGAN KONTRAS</center>
                            </p>
                            <div class="collapse mb-4" id="Bagian5">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian5 as $b5): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b5->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian5"
                                                                                                    name="bagian5[<?= $b5->id_kb ?>]" class="bagian5-radio"
                                                                                                    value="Tidak Disetujui" checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian5"
                                                                                                    name="bagian5[<?= $b5->id_kb ?>]" class="bagian5-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian5"
                                                                                                    name="bagian5[<?= $b5->id_kb ?>]" class="bagian5-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian6" aria-expanded="false" aria-controls="Bagian6">
                                    Bagian VI
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK PEMERIKSAAN MRI TANPA KONTRAS</center>
                            </p>
                            <div class="collapse mb-4" id="Bagian6">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian6 as $b6): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b6->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian6"
                                                                                                    name="bagian6[<?= $b6->id_kb ?>]" class="bagian6-radio"
                                                                                                    value="Tidak Disetujui" checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian6"
                                                                                                    name="bagian6[<?= $b6->id_kb ?>]" class="bagian6-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian6"
                                                                                                    name="bagian6[<?= $b6->id_kb ?>]" class="bagian6-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian7" aria-expanded="false" aria-controls="Bagian7">
                                    Bagian VII
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK PEMERIKSAAN MRI DENGAN KONTRAS</center>
                            </p>
                            <div class="collapse mb-4" id="Bagian7">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian7 as $b7): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b7->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian7"
                                                                                                    name="bagian7[<?= $b7->id_kb ?>]" class="bagian7-radio"
                                                                                                    value="Tidak Disetujui" checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian7"
                                                                                                    name="bagian7[<?= $b7->id_kb ?>]" class="bagian7-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian7"
                                                                                                    name="bagian7[<?= $b7->id_kb ?>]" class="bagian7-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian8" aria-expanded="false" aria-controls="Bagian8">
                                    Bagian VIII
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK PEMERIKSAAN MENGGUNAKAN PERALATAN <i>ULTRASOUND</i></center>
                            </p>
                            <div class="collapse mb-4" id="Bagian8">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian8 as $b8): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b8->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian8"
                                                                                                    name="bagian8[<?= $b8->id_kb ?>]" class="bagian8-radio"
                                                                                                    value="Tidak Disetujui" checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian8"
                                                                                                    name="bagian8[<?= $b8->id_kb ?>]" class="bagian8-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian8"
                                                                                                    name="bagian8[<?= $b8->id_kb ?>]" class="bagian8-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian9" aria-expanded="false" aria-controls="Bagian9">
                                    Bagian IX
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK KEDOKTERAN NULKIR</center>
                            </p>
                            <div class="collapse" id="Bagian9">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9 as $b9): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9"
                                                                                                    name="bagian9[<?= $b9->id_kb ?>]" class="bagian9-radio"
                                                                                                    value="Tidak Disetujui" checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian9"
                                                                                                    name="bagian9[<?= $b9->id_kb ?>]" class="bagian9-radio"
                                                                                                    value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9"
                                                                                                    name="bagian9[<?= $b9->id_kb ?>]" class="bagian9-radio"
                                                                                                    value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>A. Melakukan Pemeriksaan Inivio</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9a as $b9a): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9a->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9a"
                                                                                                    name="bagian9a[<?= $b9a->id_kb ?>]"
                                                                                                    class="bagian9a-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9a"
                                                                                                    name="bagian9a[<?= $b9a->id_kb ?>]"
                                                                                                    class="bagian9a-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9a"
                                                                                                    name="bagian9a[<?= $b9a->id_kb ?>]"
                                                                                                    class="bagian9a-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>B. Kardiovasculer</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9b as $b9b): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9b->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9b"
                                                                                                    name="bagian9b[<?= $b9b->id_kb ?>]"
                                                                                                    class="bagian9b-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9b"
                                                                                                    name="bagian9b[<?= $b9b->id_kb ?>]"
                                                                                                    class="bagian9b-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9b"
                                                                                                    name="bagian9b[<?= $b9b->id_kb ?>]"
                                                                                                    class="bagian9b-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>C. Paru-paru</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9c as $b9c): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9c->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9c"
                                                                                                    name="bagian9c[<?= $b9c->id_kb ?>]"
                                                                                                    class="bagian9c-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9c"
                                                                                                    name="bagian9c[<?= $b9c->id_kb ?>]"
                                                                                                    class="bagian9c-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9c"
                                                                                                    name="bagian9c[<?= $b9c->id_kb ?>]"
                                                                                                    class="bagian9c-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>D. Saluran Pencernaan</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9d as $b9d): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9d->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9d"
                                                                                                    name="bagian9d[<?= $b9d->id_kb ?>]"
                                                                                                    class="bagian9d-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9d"
                                                                                                    name="bagian9d[<?= $b9d->id_kb ?>]"
                                                                                                    class="bagian9d-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9d"
                                                                                                    name="bagian9d[<?= $b9d->id_kb ?>]"
                                                                                                    class="bagian9d-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>E. Hati dan Kandung Empedu</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9e as $b9e): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9e->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9e"
                                                                                                    name="bagian9e[<?= $b9e->id_kb ?>]"
                                                                                                    class="bagian9e-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9e"
                                                                                                    name="bagian9e[<?= $b9e->id_kb ?>]"
                                                                                                    class="bagian9e-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9e"
                                                                                                    name="bagian9e[<?= $b9e->id_kb ?>]"
                                                                                                    class="bagian9e-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>F. Onkologi dan Ortopedi</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9f as $b9f): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9f->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9f"
                                                                                                    name="bagian9f[<?= $b9f->id_kb ?>]"
                                                                                                    class="bagian9f-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9f"
                                                                                                    name="bagian9f[<?= $b9f->id_kb ?>]"
                                                                                                    class="bagian9f-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9f"
                                                                                                    name="bagian9f[<?= $b9f->id_kb ?>]"
                                                                                                    class="bagian9f-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>G. Lokalisasi dan Deteksi Infeksi</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9g as $b9g): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9g->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9g"
                                                                                                    name="bagian9g[<?= $b9g->id_kb ?>]"
                                                                                                    class="bagian9g-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9g"
                                                                                                    name="bagian9g[<?= $b9g->id_kb ?>]"
                                                                                                    class="bagian9g-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9g"
                                                                                                    name="bagian9g[<?= $b9g->id_kb ?>]"
                                                                                                    class="bagian9g-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>H. Ginjal dan Kandung Kemih</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9h as $b9h): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9h->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9h"
                                                                                                    name="bagian9h[<?= $b9h->id_kb ?>]"
                                                                                                    class="bagian9h-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9h"
                                                                                                    name="bagian9h[<?= $b9h->id_kb ?>]"
                                                                                                    class="bagian9h-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9h"
                                                                                                    name="bagian9h[<?= $b9h->id_kb ?>]"
                                                                                                    class="bagian9h-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>I. PET</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9i as $b9i): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9i->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9i"
                                                                                                    name="bagian9i[<?= $b9i->id_kb ?>]"
                                                                                                    class="bagian9i-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9i"
                                                                                                    name="bagian9i[<?= $b9i->id_kb ?>]"
                                                                                                    class="bagian9i-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9i"
                                                                                                    name="bagian9i[<?= $b9i->id_kb ?>]"
                                                                                                    class="bagian9i-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%"></th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>J. Lain-lain</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian9j as $b9j): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b9j->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian9j"
                                                                                                    name="bagian9j[<?= $b9j->id_kb ?>]"
                                                                                                    class="bagian9j-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian9j"
                                                                                                    name="bagian9j[<?= $b9j->id_kb ?>]"
                                                                                                    class="bagian9j-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian9j"
                                                                                                    name="bagian9j[<?= $b9j->id_kb ?>]"
                                                                                                    class="bagian9j-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian10" aria-expanded="false" aria-controls="Bagian10">
                                    Bagian X
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN TEKNIK PEMERIKSAAN RADIOTERAPI DENGAN MODALITAS RADIOTERAPI EKSTERNAL
                                    DAN/ATAU INTERNAL</center>
                            </p>
                            <div class="collapse mb-4" id="Bagian10">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kegiatan Mould Room</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10kmr as $b10kmr): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10kmr->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10kmr"
                                                                                                    name="bagian10kmr[<?= $b10kmr->id_kb ?>]"
                                                                                                    class="bagian10kmr-radio" value="Tidak Disetujui"
                                                                                                    checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian10kmr"
                                                                                                    name="bagian10kmr[<?= $b10kmr->id_kb ?>]"
                                                                                                    class="bagian10kmr-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10kmr"
                                                                                                    name="bagian10kmr[<?= $b10kmr->id_kb ?>]"
                                                                                                    class="bagian10kmr-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Simulator</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10smltr as $b10smltr): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10smltr->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10smltr"
                                                                                                    name="bagian10smltr[<?= $b10smltr->id_kb ?>]"
                                                                                                    class="bagian10smltr-radio" value="Tidak Disetujui"
                                                                                                    checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian10smltr"
                                                                                                    name="bagian10smltr[<?= $b10smltr->id_kb ?>]"
                                                                                                    class="bagian10smltr-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10smltr"
                                                                                                    name="bagian10smltr[<?= $b10smltr->id_kb ?>]"
                                                                                                    class="bagian10smltr-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>CT Simulator</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10cts as $b10cts): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10cts->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10cts"
                                                                                                    name="bagian10cts[<?= $b10cts->id_kb ?>]"
                                                                                                    class="bagian10cts-radio" value="Tidak Disetujui"
                                                                                                    checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian10cts"
                                                                                                    name="bagian10cts[<?= $b10cts->id_kb ?>]"
                                                                                                    class="bagian10cts-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10cts"
                                                                                                    name="bagian10cts[<?= $b10cts->id_kb ?>]"
                                                                                                    class="bagian10cts-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Radiasi Eksterna (Telecobalt/Linear Acceselator)</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10re as $b10re): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10re->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10re"
                                                                                                    name="bagian10re[<?= $b10re->id_kb ?>]"
                                                                                                    class="bagian10re-radio" value="Tidak Disetujui"
                                                                                                    checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian10re"
                                                                                                    name="bagian10re[<?= $b10re->id_kb ?>]"
                                                                                                    class="bagian10re-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10re"
                                                                                                    name="bagian10re[<?= $b10re->id_kb ?>]"
                                                                                                    class="bagian10re-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Melakukan Verifikasi Radiasi Eksternal</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10mvre as $b10mvre): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10mvre->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10mvre"
                                                                                                    name="bagian10mvre[<?= $b10mvre->id_kb ?>]"
                                                                                                    class="bagian10mvre-radio" value="Tidak Disetujui"
                                                                                                    checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian10mvre"
                                                                                                    name="bagian10mvre[<?= $b10mvre->id_kb ?>]"
                                                                                                    class="bagian10mvre-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10mvre"
                                                                                                    name="bagian10mvre[<?= $b10mvre->id_kb ?>]"
                                                                                                    class="bagian10mvre-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Brakiterapi</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10brkt as $b10brkt): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10brkt->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10brkt"
                                                                                                    name="bagian10brkt[<?= $b10brkt->id_kb ?>]"
                                                                                                    class="bagian10brkt-radio" value="Tidak Disetujui"
                                                                                                    checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian10brkt"
                                                                                                    name="bagian10brkt[<?= $b10brkt->id_kb ?>]"
                                                                                                    class="bagian10brkt-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10brkt"
                                                                                                    name="bagian10brkt[<?= $b10brkt->id_kb ?>]"
                                                                                                    class="bagian10brkt-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Treatment Planning System 2D</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10tps2 as $b10tps2): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10tps2->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10tps2"
                                                                                                    name="bagian10tps2[<?= $b10tps2->id_kb ?>]"
                                                                                                    class="bagian10tps2-radio" value="Tidak Disetujui"
                                                                                                    checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian10tps2"
                                                                                                    name="bagian10tps2[<?= $b10tps2->id_kb ?>]"
                                                                                                    class="bagian10tps2-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10tps2"
                                                                                                    name="bagian10tps2[<?= $b10tps2->id_kb ?>]"
                                                                                                    class="bagian10tps2-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Cek Rutin Harian</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10crh as $b10crh): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10crh->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10crh"
                                                                                                    name="bagian10crh[<?= $b10crh->id_kb ?>]"
                                                                                                    class="bagian10crh-radio" value="Tidak Disetujui"
                                                                                                    checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian10crh"
                                                                                                    name="bagian10crh[<?= $b10crh->id_kb ?>]"
                                                                                                    class="bagian10crh-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10crh"
                                                                                                    name="bagian10crh[<?= $b10crh->id_kb ?>]"
                                                                                                    class="bagian10crh-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Implementasi Keamanan dan Keselamatan Kerja</th>
                                                    <th class="text-center"></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10ikkk as $b10ikkk): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10ikkk->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10ikkk"
                                                                                                    name="bagian10ikkk[<?= $b10ikkk->id_kb ?>]"
                                                                                                    class="bagian10ikkk-radio" value="Tidak Disetujui"
                                                                                                    checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian10ikkk"
                                                                                                    name="bagian10ikkk[<?= $b10ikkk->id_kb ?>]"
                                                                                                    class="bagian10ikkk-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10ikkk"
                                                                                                    name="bagian10ikkk[<?= $b10ikkk->id_kb ?>]"
                                                                                                    class="bagian10ikkk-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Manajerial</th>
                                                    <th class="text-center"></th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian10mnjl as $b10mnjl): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b10mnjl->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian10mnjl"
                                                                                                    name="bagian10mnjl[<?= $b10mnjl->id_kb ?>]"
                                                                                                    class="bagian10mnjl-radio" value="Tidak Disetujui"
                                                                                                    checked> Tidak Disetujui
                                                                                                <input type="radio" id="bagian10mnjl"
                                                                                                    name="bagian10mnjl[<?= $b10mnjl->id_kb ?>]"
                                                                                                    class="bagian10mnjl-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian10mnjl"
                                                                                                    name="bagian10mnjl[<?= $b10mnjl->id_kb ?>]"
                                                                                                    class="bagian10mnjl-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian11" aria-expanded="false" aria-controls="Bagian11">
                                    Bagian XI
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN PEMERIKSAAN INTERVENSI RADIOLOGI/ CARDIOLOGI/ NEUROLOGI</center>
                            </p>
                            <div class="collapse mb-4" id="Bagian11">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian11 as $b11): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b11->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian11"
                                                                                                    name="bagian11[<?= $b11->id_kb ?>]"
                                                                                                    class="bagian11-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian11"
                                                                                                    name="bagian11[<?= $b11->id_kb ?>]"
                                                                                                    class="bagian11-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian11"
                                                                                                    name="bagian11[<?= $b11->id_kb ?>]"
                                                                                                    class="bagian11-radio" value="Supervisi"> Supervisi
                                                                                            </center>
                                                                                        </td>
                                                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <button class="btn btn-primary col-lg-12 btn-info" type="button" data-toggle="collapse"
                                    data-target="#Bagian12" aria-expanded="false" aria-controls="Bagian12">
                                    Bagian XII
                                </button>
                            </p>
                            <p>
                                <center>MELAKUKAN QUALITY <i>ASSURANCE/ QUALITY CONTROL</i> BEKERJA SAMA DENGAN MITRA
                                    TERKAIT</center>
                            </p>
                            <div class="collapse mb-4" id="Bagian12">
                                <div class="card card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="1%">No</th>
                                                    <!-- <th>Foto</th> -->
                                                    <th>Kompetensi</th>
                                                    <th class="text-center">Diminta</th>
                                                </tr>
                                            </thead>
                                            <tbody style="cursor:pointer;" id="tbody">
                                                <?php $no = 1;
                                                foreach ($bagian12 as $b12): ?>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <?= $no++ ?>.
                                                                                        </td>
                                                                                        <td>
                                                                                            <?= $b12->kompetensi ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <center>
                                                                                                <input type="radio" id="bagian12"
                                                                                                    name="bagian12[<?= $b12->id_kb ?>]"
                                                                                                    class="bagian12-radio" value="Tidak Disetujui" checked>
                                                                                                Tidak Disetujui
                                                                                                <input type="radio" id="bagian12"
                                                                                                    name="bagian12[<?= $b12->id_kb ?>]"
                                                                                                    class="bagian12-radio" value="Mandiri"> Mandiri
                                                                                                <input type="radio" id="bagian12"
                                                                                                    name="bagian12[<?= $b12->id_kb ?>]"
                                                                                                    class="bagian12-radio" value="Supervisi"> Supervisi
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


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/barang.js"></script>
<script src="<?= base_url(); ?>assets/js/loading.js"></script>
<script src="<?= base_url(); ?>assets/js/validasi/formbarang.js"></script>
<script src="<?= base_url(); ?>assets/plugin/chosen/chosen.jquery.min.js"></script>

<script>
$('.chosen').chosen({
    width: '100%',

});
</script>

<?php if ($this->session->flashdata('Pesan')): ?>

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
function getData() {
    document.getElementById("kategori").innerHTML = localStorage.getItem("kategori_value");
    document.getElementById("nama_lengkap").innerHTML = localStorage.getItem("nama_lengkap_value");
    document.getElementById("nip").innerHTML = localStorage.getItem("nip_value");
    document.getElementById("tempat_lahir").innerHTML = localStorage.getItem("tempat_lahir_value");
    document.getElementById("tanggal_lahir").innerHTML = localStorage.getItem("tanggal_lahir_value");
    document.getElementById("alamat").innerHTML = localStorage.getItem("alamat_value");
    document.getElementById("telepon").innerHTML = localStorage.getItem("telepon_value");
    document.getElementById("email").innerHTML = localStorage.getItem("email_value");
    document.getElementById("nomor_sip").innerHTML = localStorage.getItem("nomor_sip_value");
    document.getElementById("nomor_str").innerHTML = localStorage.getItem("nomor_str_value");
    document.getElementById("tanggal_kerja").innerHTML = localStorage.getItem("tanggal_kerja_value");
    return false;
}
</script>

<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/pengguna.js"></script>
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