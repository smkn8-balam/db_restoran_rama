<!DOCTYPE html>
<html>
<head>
	<title>Input Masakan</title>
</head>
<body>
	<form action="act_savemasakan.php" method="post">
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
    
    	<input type="submit" name="tambah-data" value="Tambah Masakan">
  
	</form>
</body>
</html>