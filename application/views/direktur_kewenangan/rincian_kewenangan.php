<table style="width: 100%; border-collapse: collapse; border: 1px solid rgb(0, 0, 0);">
    <thead>
        <tr>
            <th style="width: 8.9447%; text-align: center; border: 1px solid rgb(0, 0, 0);">NO</th>
            <th style="width: 61.1069%; text-align: center; border: 1px solid rgb(0, 0, 0);">RINCIAN KEWENANGAN KLINIS
            </th>
            <th style="border: 1px solid rgb(0, 0, 0); width: 29.7709%; text-align: center">KEWENANGAN DIBERIKAN (*)
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="width: 100%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong> BAGIAN I : MELAKUKAN TEKNIK PEMERIKSAAN RADIOGRAFI KONVENSIONAL TANPA KONTRAS</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian1 as $b1): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b1->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b1->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN II : MELAKUKAN TEKNIK RADIOGRAFI KONVENSIONAL DENGAN KONTRAS</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian2 as $b2): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b2->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b2->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN III : MELAKUKAN TEKNIK PEMERIKSAAN RADIOGRAFI KONVENSIONAL TANPA KONTRAS</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian3 as $b3): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b2->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b2->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN IV : MELAKUKAN TEKNIK CT SCAN TANPA KONTRAS</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian4 as $b4): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b4->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b4->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN V : MELAKUKAN CT SCAN DENGAN KONTRAS</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian5 as $b5): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b5->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b5->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN VI : MELAKUKAN TEKNIK PEMERIKSAAN MRI TANPA KONTRAS</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian6 as $b6): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b6->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b6->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN VII : MELAKUKAN TEKNIK PEMERIKSAAN MRI DENGAN KONTRAS</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian7 as $b7): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b7->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b7->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN VIII : MELAKUKAN TEKNIK PEMERIKSAAN MENGGUNAKAN PERALATAN ULTRASOUND</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian8 as $b8): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b8->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b8->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN IX : MELAKUKAN TEKNIK KEDOKTERAN NULKIR</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9 as $b9): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>A. Melakukan Pemeriksaan Inivio</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9 as $b9): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>A. Melakukan Pemeriksaan Inivio</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9 as $b9): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>A. Melakukan Pemeriksaan Inivio</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9a as $b9a): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9a->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9a->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>B. Kardiovasculer</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9b as $b9b): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9b->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9b->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>C. Paru-paru</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9c as $b9c): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9c->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9c->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>D. Saluran Pencernaan</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9d as $b9d): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9d->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9d->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>E. Hati dan Kandung Empedu</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9e as $b9e): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9e->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9e->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>F. Onkologi dan Ortopedi</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9f as $b9f): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9f->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9f->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>G. Lokalisasi dan Deteksi Infeksi</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9g as $b9g): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9g->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9g->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>H. Ginjal dan Kandung Kemih</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9h as $b9h): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9h->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9h->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>I. PET</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9i as $b9i): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9i->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9i->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>J. Lain-lain</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian9j as $b9j): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9j->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b9j->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN X : MELAKUKAN TEKNIK PEMERIKSAAN RADIOTERAPI DENGAN MODALITAS RADIOTERAPI EKSTERNAL
                        DAN/ATAU INTERNAL</strong>
                </div><br>
            </td>
        </tr>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>A. Kegiatan Mould Room</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10kmr as $b10kmr): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10kmr->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10kmr->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>B. Simulator</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10smltr as $b10smltr): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10smltr->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10smltr->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>C. CT Simulator</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10cts as $b10cts): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10cts->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10cts->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>D. Radiasi Eksterna (Telecobalt/Linear Acceselator)</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10re as $b10re): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10re->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10re->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>E. Melakukan Verifikasi Radiasi Eksternal</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10mvre as $b10mvre): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10mvre->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10mvre->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>F. Brakiterapi</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10brkt as $b10brkt): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10brkt->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10brkt->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>G. Treatment Planning System 2D</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10tps2 as $b10tps2): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10tps2->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10tps2->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>H. Cek Rutin Harian</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10crh as $b10crh): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10crh->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10crh->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>I. Implementasi Keamanan dan Keselamatan Kerja</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10ikkk as $b10ikkk): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10ikkk->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10ikkk->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: justify;">
                    <strong>J. Manajerial</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian10mnjl as $b10mnjl): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10mnjl->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b10mnjl->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN XI : MELAKUKAN PEMERIKSAAN INTERVENSI RADIOLOGI/ CARDIOLOGI/ NEUROLOGI</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian11 as $b11): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b11->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b11->status ?>
            </td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td style="width: 99.8834%; border: 1px solid rgb(0, 0, 0);" colspan="3">
                <div style="text-align: center;">
                    <strong>BAGIAN XII : MELAKUKAN QUALITY ASSURANCE/ QUALITY CONTROL BEKERJA SAMA DENGAN MITRA
                        TERKAIT</strong>
                </div><br>
            </td>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($bagian12 as $b12): ?>
        <tr>
            <td style="width: 8.9447%; border: 1px solid rgb(0, 0, 0);">
                <?= $no++ ?>
            </td>
            <td style="width: 61.1069%; border: 1px solid rgb(0, 0, 0);">
                <?= $b12->kompetensi ?>
            </td>
            <td style="width: 29.7709%; border: 1px solid rgb(0, 0, 0);">
                <?= $b12->status ?>
            </td>
        </tr>
        <?php endforeach; ?>


    </tbody>
</table>