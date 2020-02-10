<?php  

$host = "localhost";//ini adalah alamat server
$user = "root"; 	//ini adalah user database
$pass = ""; 		//ini adalah password database
$database = "db_restoran_xiirpl2_rama"; //ini adalah nama database

$koneksi = mysqli_connect($host,$user,$pass,$database); //ini adalah jalur koneksi database

if ($koneksi) { //ini digunakan untuk melakukan pengecekan koneksi database
	echo "Berhasil konek database";
}else{
	echo "Gagal koneksi database";
}

?>