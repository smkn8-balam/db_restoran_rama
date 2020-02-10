<?php

	$kode=$_GET['kode'];
	$sql=mysqli_query($koneksi,"SELECT *FROM tb_masakan WHERE kode_masakan='$kode'");
	$data=mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Masakan</title>
</head>
<body>
	<form action="act_editmasakan.php" method="post">
		<label>Kode Masakan</label><br>	
			<input type="text" name="kode_masakan">
		<br>
		<br>
		
		<label>Nama Masakan</label><br>
			<input type="text" name="nama_masakan">
		<br>
		<br>
		
		<label>Harga Masakan</label><br>
			<input type="number" name="harga">
		<br>
		<br>
 		
 		<label>Stock Masakan</label><br>
			<input type="text" name="stock">
		<br>
		<br>
    
    	<input type="submit" name="simpan-data" value="Simpan Data">
  
	</form>
</body>
</html>