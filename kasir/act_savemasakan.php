<?php
	include "../koneksi.php";
	$kode=$_POST['kode_masakan'];
	$nama=$_POST['nama_masakan'];
	$harga=$_POST['harga'];
	$stock=$_POST['stock'];
	
	$sql=mysqli_query($koneksi,"INSERT into tb_masakan values('$kode','$nama','$harga','$stock')");

	if($sql){
		header("location:index.php?page=masakan");
	}else{
		echo "gagal simpan data";
	}
?>