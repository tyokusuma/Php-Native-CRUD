<h2>Edit Data Peserta</h2>

<?php 

	include 'koneksi.php';

	$id  = $_GET['idnya'];
	$sql = "SELECT *FROM peserta WHERE id_peserta='$id'";
	$que = mysqli_query($sambungan, $sql);

	while ($data = mysqli_fetch_array($que)) 
	{
		//$idpeserta = $data['id_peserta'];
		$nama      = $data['nama_peserta'];
		$alamat    = $data['alamat'];
		$notelp    = $data['notelp'];
		$jekel     = $data['jenis_kelamin'];
		$tgl       = $data['tgl_daftar'];
		$foto      = $data['foto'];

	}


?>

<form action="peserta-ubah.php" method="post" enctype="multipart/form-data">
	
	<input type="hidden" name="idnya" value="<?php echo"$id"; ?>">

	<p>
		Nama Peserta : <br>
		<input type="text" name="nama" value="<?php echo"$nama"; ?>">
	</p>

	<p>
		Alamat : <br>
		<textarea name="alamat"><?php echo"$alamat"; ?></textarea>
	</p>

	<p>
		No. Telp : <br>
		<input type="text" name="notelp" value="<?php echo"$notelp"; ?>">
	</p>

	<p>
		Jenis Kelamin : <br>

		<?php 

			if ($jekel == "Laki-laki") 
			{
				echo 
				"
					<input type='radio' name='jekel' value='Laki-laki' checked=''> Laki-laki
					<input type='radio' name='jekel' value='Perempuan'> Perempuan
				";
			}
			else
			{
				echo 
				"
					<input type='radio' name='jekel' value='Laki-laki'> Laki-laki
					<input type='radio' name='jekel' value='Perempuan' checked=''> Perempuan
				";
			}

		?>
	</p>

	<p>
		<p>
			<?php 


				if ($foto=='Kosong') //jika tidak ada foto
				{
					$gambar = "img/nofoto.jpeg";
				}
				else//jika ada fotonya
				{
					$gambar = "foto/$foto.jpg";
				}

			?>
			<img src="<?php echo"$gambar"; ?>" width="100" height="100">
		</p>

		Upload Foto : <br>
		<input type="file" name="foto">
	</p>

	<p>
		<input type="submit" value="SIMPAN">
	</p>
</form>