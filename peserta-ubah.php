<?php 

	include 'koneksi.php';

	$id     = $_POST['idnya'];
	$nama   = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$notelp = $_POST['notelp'];
	$jekel  = $_POST['jekel'];
	//$tgl    = date("y-m-d");

	$namafoto = $_FILES['foto']['name'];
	$lokasi   = $_FILES['foto']['tmp_name'];

	$namabaru = md5($namafoto);

		//valuesnya harus berurutan...
	if (empty($namafoto)) //jika fotonya kosong
	{
		$sql = "UPDATE peserta SET nama_peserta='$nama', 
		                           alamat='$alamat', 
		                           notelp='$notelp', 
		                           jenis_kelamin='$jekel' 
	            WHERE id_peserta='$id'";
	}
	else //jika ada fotonya
	{
		move_uploaded_file($lokasi, "foto/$namabaru.jpg");
		$sql = "UPDATE peserta SET nama_peserta='$nama', 
		                           alamat='$alamat', 
		                           notelp='$notelp', 
		                           jenis_kelamin='$jekel',
		                           foto = '$namabaru'
		        WHERE id_peserta='$id'";
	}

	$que = mysqli_query($sambungan, $sql);

	if ($que) 
	{
		echo 
		"
			<script>
				alert('Data telah diubah...');
				window.location='peserta-data.php';
			</script>
		";
	}
	else
	{
		echo 
		"
			<script>
				alert('Gagal diubah...');
				window.location='peserta-edit.php?idnya=$id';
			</script>
		";
	}

?>