<?php 

	include 'koneksi.php';

	$nama   = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$notelp = $_POST['notelp'];
	$jekel  = $_POST['jekel'];
	$tgl    = date("y-m-d");

	$namafoto = $_FILES['foto']['name'];
	$lokasi   = $_FILES['foto']['tmp_name'];

	$namabaru = md5($namafoto);

		//valuesnya harus berurutan...

	if (empty($namafoto)) //jika foto kosong
	{
		$sql = "INSERT INTO peserta VALUES('', '$nama', '$alamat', '$notelp', '$jekel', 'Kosong', '$tgl')";
	}
	else //jika ada fotonya
	{
		move_uploaded_file($lokasi, "foto/$namabaru.jpg");
		$sql = "INSERT INTO peserta VALUES('', '$nama', '$alamat', '$notelp', '$jekel', '$namabaru', '$tgl')";
	}
	$que = mysqli_query($sambungan, $sql);

	if ($que) 
	{
		echo 
		"
			<script>
				alert('Data telah disimpan...');
				window.location='peserta-data.php';
			</script>
		";
	}
	else
	{
		echo 
		"
			<script>
				alert('Gagal disimpan...');
				window.location='peserta-input.php';
			</script>
		";
	}

?>