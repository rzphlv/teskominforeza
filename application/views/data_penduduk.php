<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tambah Data</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<form>
          <label for="namalengkap">Nama Lengkap :</label><br>
          <input type="text" id="namalengkap" name="namalengkap"><br>

          <label for="namapanggilan">Nama Panggilan :</label><br>
          <input type="text" id="namapanggilan" name="namapanggilan"><br>

          <label for="nik">NIK :</label><br>
          <input type="number" id="nik" name="nik"><br>

          <label for="nokk">Nomor KK :</label><br>
          <input type="number" id="nokk" name="nokk"><br>

          <label for="kedudukan">Kedudukan dalam keluarga :</label><br>
          <input type="text" id="kedudukan" name="kedudukan"><br><br>

          <label for="tempat">Tempat lahir :</label><br>
          <input type="text" id="tempat" name="tempat"><br>

          <label for="tanggal">Tanggal lahir:</label><br>
          <input type="date" id="tanggal" name="tanggal"><br><br>

          <label for="alamat">Alamat :</label><br>
          <label for="jalan">Jalan :</label><br>
          <input type="text" id="jalan" name="jalan"><br>

          <label for="desa">Desa :</label><br>
          <input type="text" id="desa" name="desa"><br>

          <label for="kabupaten">Kabupaten :</label><br>
          <input type="text" id="kabupaten" name="kabupaten"><br>

          <label for="provinsi">Provinsi :</label><br>
          <input type="text" id="provinsi" name="provinsi"><br>


          <label for="status">Status Perkawinan:</label><br>
            <select name="status" id="status">
              <option value="menikah">Menikah</option>
              <option value="belummenikah">Belum menikah</option>
              <option value="ceraihidup">Cerai hidup</option>
              <option value="ceraimati">Cerai mati</option>
            </select><br><br>

            <label for="agama">Agama :</label><br>
          <input type="text" id="agama" name="agama"><br>

          <label for="pendidikan">Pendidikan terakhir :</label><br>
          <input type="text" id="pendidikan" name="pendidikan"><br>

          <label for="pekerjaan">Pekerjaan :</label><br>
          <input type="text" id="pekerjaan" name="pekerjaan"><br>

          <label for="kewarganegaraan">Kewarganegaraan :</label><br>
          <input type="text" id="kewarganegaraan" name="kewarganegaraan"><br>

          <label for="ket">Keterangan :</label><br>
          <input type="text" id="ket" name="ket"><br>


			<br><input type="submit" value="Submit">

        </form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
