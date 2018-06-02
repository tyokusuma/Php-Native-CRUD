<h2>Data Peserta</h2>

<a href="peserta-input.php">Tambah Data</a>

<table border="1">
	<tr>
		<th>No.</th>
		<th>Foto Peserta</th>
		<th>Nama Peserta</th>
		<th>Alamat</th>
		<th>No. Telp</th>
		<th>Jenis Kelamin</th>
		<th>Tanggal Daftar</th>
		<th>Aksi</th>
	</tr>

	<?php 

		include 'koneksi.php';

		$sql = "SELECT *FROM peserta";
		$que = mysqli_query($sambungan, $sql);

		$no = 1;
		while ($data = mysqli_fetch_array($que)) 
		{
			$idpeserta = $data['id_peserta'];
			$nama      = $data['nama_peserta'];
			$alamat    = $data['alamat'];
			$notelp    = $data['notelp'];
			$jekel     = $data['jenis_kelamin'];
			$tgl       = $data['tgl_daftar'];
			$foto      = $data['foto'];

			if ($foto=='Kosong') //jika tidak ada foto
			{
				$gambar = "img/nofoto.jpeg";
			}
			else//jika ada fotonya
			{
				$gambar = "foto/$foto.jpg";
			}

			echo 
			"
				<tr>
					<td>$no</td>
					<td>
						<img src='$gambar' width='100' height='100'>
					</td>
					<td>$nama</td>
					<td>$alamat</td>
					<td>$notelp</td>
					<td>$jekel</td>
					<td>$tgl</td>
					<td>
						<a href='peserta-edit.php?idnya=$idpeserta'>Edit</a>
						<a href='peserta-hapus.php?idnya=$idpeserta' onclick='return hapus()'>Hapus</a>				
					</td>
				</tr>		
			";

			$no++;
		}

	?>
</table>

<script type="text/javascript">
	function hapus()
	{
		var tanya;
		tanya = confirm("Yakin ingin hapus???");
		if (tanya==true) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>