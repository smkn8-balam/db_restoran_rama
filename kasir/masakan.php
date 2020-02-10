<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Masakan</title>
</head>
<body>
<h2>DATA MASAKAN</h2>
	<table class="table" border="2" cellpadding="6">
		<thead>
			<tr align="center">
				<td>No</td>
				<td>Kode Masakan</td>
				<td>Nama Masakan</td>
				<td>Harga Makanan</td>
				<td>Stock Makanan</td>
				<td>Aksi</td>				
			</tr>
		</thead>
		
<?php
	$no=1;
	$sql=mysqli_query($koneksi,"SELECT *FROM tb_masakan");
	$row=mysqli_num_rows($sql);
	if($row== 0){
		echo "<tr><td colspan='6'>Belum ada data</td></tr>";
	}else{
		while($data=mysqli_fetch_array($sql)){
			echo "<tr>
					<td>".$no++."</td>
					<td>".$data['kode_masakan']."</td>
					<td>".$data['nama_masakan']."</td>
					<td>".$data['harga']."</td>
					<td>".$data['stock']."</td>
					
					<td>
						<a href='?page=edit&kode=".$data['kode_masakan']."'>Edit</a>
						<a href='act_deletemasakan.php?kode=delete&kode=".$data['kode_masakan']."'>Delete</a>
					</td>
					</tr>";
		}
	}
?>
	</table>
		<p class="backup-button"><a href="?page=addmasakan" class="button">Tambah Masakan</a></p>

</body>
</html>