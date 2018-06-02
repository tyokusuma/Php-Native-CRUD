<?php 

	include 'koneksi.php';

	$id  = $_GET['idnya'];

	$sql = "DELETE FROM peserta WHERE id_peserta='$id'";
	$que = mysqli_query($sambungan, $sql);

	if ($que) 
	{
		echo 
		"
			<script>
				alert('Data telah dihapus...');
				window.location='peserta-data.php';
			</script>
		";
	}
	else
	{
		echo 
		"
			<script>
				alert('Gagal dihapus...');
				window.location='peserta-data.php';
			</script>
		";
	}

?>