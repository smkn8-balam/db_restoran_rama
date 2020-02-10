<?php
	include "../koneksi.php";
	$kode=$_POST['kode_masakan'];
	$nama=$_POST['nama_masakan'];
	$harga=$_POST['harga'];
	$stock=$_POST['stock'];
	
	$sql=mysqli_query($koneksi,"UPDATE tb_masakan SET nama_masakan='$nama',harga='$harga',stock='$stock' WHERE kode_masakan='$kode'");

	if($sql){
		header("location:index.php?page=masakan");
	}else{
		echo "gagal simpan data";
	}
?>