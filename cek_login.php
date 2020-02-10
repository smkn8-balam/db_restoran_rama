<?php  
include 'koneksi.php'; //digunakan untuk memanggil kelas koneksi	

$user = $_POST['Username'];//ini digunakan untuk menerima nilai dari form
$pass = $_POST['Password'];//ini digunakan untuk menerima nilai dari form
$sql  = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE Username = '$user' AND Password = '$pass'");//digunakan untuk membaca atau membuat query database

$data = mysqli_fetch_array ($sql);//digunakan untuk menampilkan hasil eksekusi query database

if ($data['username'] == $user AND $data['password'] == $pass)
 
if ($data['publish'] == "F"){
 	echo "Pengguna telah di banned";

 }else if ($data['level'] == "owner"){
 	echo "Selamat Datang Dihalaman Owner"; 

 }else if ($data['level'] == "kasir"){
 		header ("location:kasir/index.php"); 

 }else if ($data['level'] == "waiter"){
 	echo "Selamat Datang Dihalaman waiter"; 

 }else {
 	echo "Pengguna belum terdaftar"; 
 
 } 

?>