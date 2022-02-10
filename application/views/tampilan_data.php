<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tampil Data Penduduk</title>
	</head>
	<body>

	<H3>Data Penduduk</H3>
	<table border=1 width=80% cellpadding=2 cellspacing=0>
		<tr bgcolor=silver align=center>
			<td>Nama Lengkap</td>
			<td>Nama Panggilan</td>
			<td>Jenis Kelamin</td>
			<td>Tempat Lahir</td>
			<td>Tanggal Lahir</td>
			<td>Agama</td>
			<td>Pendidikan Terakhir</td>
			<td>Pekerjaan</td>
			<td>Dapat Membaca Huruf</td>
			<td>Kewarganegaraan</td>
			<td>Jalan</td>
			<td>Desa</td>
			<td>Kabupaten</td>
			<td>Provinsi</td>
			<td>NIK</td>
			<td>Nomor KK</td>
			<td>Keterangan</td>

			<td colspan=2>AKSI</td>
		</tr>
		<?php
		foreach ($this->db->get('orang') as $row)
		 ?>
			<tr align=center>
				<td><?php echo $row['Namalengkap'];?></td>
				<td><?php echo $row['Namapanggilan'];?></td>
				<td><?php echo $row['Jeniskelamin'];?></td>
				<td><?php echo $row['Tempatlahir'];?></td>
				<td><?php echo $row['Tanggallahir'];?></td>
				<td><?php echo $row['Agama'];?></td>
				<td><?php echo $row['Pendidikanterakhir'];?></td>
				<td><?php echo $row['Pekerjaan'];?></td>
				<td><?php echo $row['Bacahuruf'];?></td>
				<td><?php echo $row['Kewarganegaraan'];?></td>
				<td><?php echo $row['Jalan'];?></td>
				<td><?php echo $row['Desa'];?></td>
				<td><?php echo $row['Kabupaten'];?></td>
				<td><?php echo $row['Provinsi'];?></td>
				<td><?php echo $row['NIK'];?></td>
				<td><?php echo $row['NomorKK'];?></td>
				<td><?php echo $row['Keterangan'];?></td>

				<td><a href="">Edit</a></td>
				<td><a href="" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a></td>

			</tr>

			<tr align='center'>

			</tr>
		<?php  ?>

	</table>


	</body>
</html>
