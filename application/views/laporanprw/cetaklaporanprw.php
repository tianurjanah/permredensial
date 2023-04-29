<!DOCTYPE html>
<html><head>
	<title></title>
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
		table {
			border-collapse: collapse;
		}
	</style>
</head><body>
   <img src="assets/img/logo.png" style="position: absolute; width: 100px; height: 50px; margin-left:10px;" >
	<table style="width: 100%;">
		<tr>
			<td align="center">
				<span style="line-height: 1.6; font-weight: bold; font-size: 20;">
					PT. EZZER KEMINDO MULIATAMA
				</span>
				<span style="line-height: 1.6; font-size: 10">
					<br>
					Kawasan Kopo Mas Regency Kav.99A. Kopo Bandung 40225 - Jawa Barat
					<br>
					Telp : +62 22 5430 | Fax : +62 22 5436 851 | Po. Box 123 Bks 17000
                    <br>
					www.ezzer.co.id | www.ekmgroup.asia/ezzer | jkt@ezzer.co.id
				</span>
			</td>
		</tr>
   </table>
   <br>
	<hr class="line-title">
	<br>
	<br>
	<br>
   <h3 style="text-align : center">LAPORAN PERAWATAN BARANG INVENTARIS</h3>
   <h3 style="text-align : center">PT. EZZER KEMINDO MULIATAMA</h3>
   <p style="text-align : center"><?php echo $subtitle ?></p>
	<br>
	<br>
	<table border="1" style="width: 100%;">
		<tr>
            <th> No </th>
            <th> Kode Perawatan </th>
            <th> Nama Barang </th>
            <th> Posisi </th>
			<th> Nama Pemelihara </th>
            <th> Tanggal Perawatan</th>
            <th> Status </th>
            <th> Keterangan</th>
		</tr>
		<?php $no = 1; foreach ($filtertanggal as $b) : ?>
        <tr>
            <td style="text-align: center;"><?php echo $no++ ?></td>
			<td style="text-align: center;"><?php echo $b->kode_perawatan ?></td>
            <td style="text-align: center;"><?php echo $b->nama_barang ?></td>
            <td style="text-align: center;"><?php echo $b->posisi ?></td>
			<td style="text-align: center;"><?php echo $b->nama ?></td>
            <td style="text-align: center;"><?php echo $b->tanggal_perawatan ?></td>
            <td style="text-align: center;"><?php echo $b->status ?></td>
            <td style="text-align: center;"><?php echo $b->keterangan ?></td>
        </tr>
        <?php endforeach; ?>
	</table>
	<br><br>
	<footer>
      <p style="text-align : right; font-size: 12; margin-right:40px;">
		Bandung, <?php echo $date;?>
		</p> 
		<br><br>
		<br>
		<p style="text-align : right; font-size: 12; margin-right:75px;">
		<?php echo $user;?>
		</p>
	</footer>
</body></html>