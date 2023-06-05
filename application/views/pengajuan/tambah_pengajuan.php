<!-- Begin Page Content -->

<div class="container-fluid">

    <form action="<?= base_url() ?>pengajuan/proses_tambah" name="pengajuan-form" id="pengajuan-form" method="POST"
        enctype="multipart/form-data">

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
                                                    <th class="text-center">Diminta</th>
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
                                                            <input type="checkbox" id="bagian1" name="bagian1[]"
                                                                class="bagian1-checkbox" value="<?= $b1->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian2" name="bagian2[]"
                                                                class="bagian2-checkbox" value="<?= $b2->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian3" name="bagian3[]"
                                                                class="bagian3-checkbox" value="<?= $b3->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian4" name="bagian4[]"
                                                                class="bagian4-checkbox" value="<?= $b4->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian5" name="bagian5[]"
                                                                class="bagian5-checkbox" value="<?= $b5->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian6" name="bagian6[]"
                                                                class="bagian6-checkbox" value="<?= $b6->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian7" name="bagian7[]"
                                                                class="bagian7-checkbox" value="<?= $b7->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian8" name="bagian8[]"
                                                                class="bagian8-checkbox" value="<?= $b8->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9" name="bagian9[]"
                                                                class="bagian9-checkbox" value="<?= $b9->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9a" name="bagian9a[]"
                                                                class="bagian9a-checkbox"
                                                                value="<?= $b9a->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9b" name="bagian9b[]"
                                                                class="bagian9b-checkbox"
                                                                value="<?= $b9b->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9c" name="bagian9c[]"
                                                                class="bagian9c-checkbox"
                                                                value="<?= $b9c->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9d" name="bagian9d[]"
                                                                class="bagian9d-checkbox"
                                                                value="<?= $b9d->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9e" name="bagian9e[]"
                                                                class="bagian9e-checkbox"
                                                                value="<?= $b9e->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9f" name="bagian9f[]"
                                                                class="bagian9f-checkbox"
                                                                value="<?= $b9f->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9g" name="bagian9g[]"
                                                                class="bagian9g-checkbox"
                                                                value="<?= $b9g->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9h" name="bagian9h[]"
                                                                class="bagian9h-checkbox"
                                                                value="<?= $b9h->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9i" name="bagian9i[]"
                                                                class="bagian9i-checkbox"
                                                                value="<?= $b9i->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian9j" name="bagian9j[]"
                                                                class="bagian9j-checkbox"
                                                                value="<?= $b9j->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10kmr" name="bagian10kmr[]"
                                                                class="bagian10kmr-checkbox"
                                                                value="<?= $b10kmr->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10smltr"
                                                                name="bagian10smltr[]" class="bagian10smltr-checkbox"
                                                                value="<?= $b10smltr->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10cts" name="bagian10cts[]"
                                                                class="bagian10cts-checkbox"
                                                                value="<?= $b10cts->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10re" name="bagian10re[]"
                                                                class="bagian10re-checkbox"
                                                                value="<?= $b10re->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10mvre"
                                                                name="bagian10mvre[]" class="bagian10mvre-checkbox"
                                                                value="<?= $b10mvre->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10brkt"
                                                                name="bagian10brkt[]" class="bagian10brkt-checkbox"
                                                                value="<?= $b10brkt->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10tps2"
                                                                name="bagian10tps2[]" class="bagian10tps2-checkbox"
                                                                value="<?= $b10tps2->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10crh" name="bagian10crh[]"
                                                                class="bagian10crh-checkbox"
                                                                value="<?= $b10crh->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10ikkk"
                                                                name="bagian10ikkk[]" class="bagian10ikkk-checkbox"
                                                                value="<?= $b10ikkk->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian10mnjl"
                                                                name="bagian10mnjl[]" class="bagian10mnjl-checkbox"
                                                                value="<?= $b10mnjl->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian11" name="bagian11[]"
                                                                class="bagian11-checkbox"
                                                                value="<?= $b11->kompetensi ?>">
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
                                                            <input type="checkbox" id="bagian12" name="bagian12[]"
                                                                class="bagian12-checkbox"
                                                                value="<?= $b12->kompetensi ?>">
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