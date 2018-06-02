<h2>Tambah Data Peserta</h2>


<!--enctype, berfungsi saat ada upload file-->
<form action="peserta-simpan.php" method="post" enctype="multipart/form-data">
	<p>
		Nama Peserta : <br>
		<input type="text" name="nama">
	</p>

	<p>
		Alamat : <br>
		<textarea name="alamat"></textarea>
	</p>

	<p>
		No. Telp : <br>
		<input type="text" name="notelp">
	</p>

	<p>
		Jenis Kelamin : <br>
		<input type="radio" name="jekel" value="Laki-laki"> Laki-laki
		<input type="radio" name="jekel" value="Perempuan"> Perempuan
	</p>

	<p>
		Upload Foto : <br>
		<input type="file" name="foto">
	</p>

	<p>
		<input type="submit" value="SIMPAN">
	</p>
</form>