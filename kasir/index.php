<?php
	include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Kasir</title>
</head>
<body>
<h2>Selamat Datang Dihalaman Kasir</h2>
	<ul>
		<li><a href="?page=home">HOME</a></li>
		<li><a href="?page=masakan">MASAKAN</a></li>
		<li><a href="?page=transaksi">TRANSAKSI</a></li>
		<li><a href="logout.php">LOGOUT</a></li>
	</ul>

<?php
	if(isset($_GET['page'])){
	if($_GET['page']=="home"){
		echo "Halaman Home";
	
	}else if($_GET['page']=="masakan"){
		include "Masakan.php";

	}else if($_GET['page']=="addmasakan"){
		include "tambah_masakan.php";
	
	}else if($_GET['page']=="transaksi"){
		echo "Halaman Transaksi";
	
	}else if($_GET['page']=="edit"){
		include "edit.php";
	}
}
?>	

</body>
</html>
	