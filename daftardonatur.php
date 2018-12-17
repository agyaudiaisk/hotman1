<?php

include "c:/xampp/htdocs/hotman/koneksi.php";

if(isset($_POST['username']))
{
	$target = "c:/xampp/htdocs/hotman/foto/".basename($_FILES['foto']['name']);
	$user = $_POST['username'];
	$nama = $_POST['namalengkap'];
	$pass = $_POST['password'];
	$alamat = $_POST['alamat'];
	$nik = $_POST['nik'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$foto = $_FILES['foto']['name'];
	$level = $_POST['level'];


	
	$user = mysqli_real_escape_string($koneksi, $_POST['username']);
	$nama = mysqli_real_escape_string($koneksi, $_POST['namalengkap']);
	$pass = mysqli_real_escape_string($koneksi, $_POST['password']);
	$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
	$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
	$email = mysqli_real_escape_string($koneksi, $_POST['email']);
	$telepon = mysqli_real_escape_string($koneksi, $_POST['telepon']);
	$level = mysqli_real_escape_string($koneksi, $_POST['level']);

	

	$sql = "INSERT INTO akun (username, password, level, nik, alamat, email, namalengkap, telepon, foto) VALUES ('$user', '$pass', '$level', '$nik', '$alamat', '$email', '$nama', '$telepon', '$foto')";

	if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
  	}else{
  		echo "Failed to upload image";
  	}
 
	if($koneksi->query($sql) === TRUE){
	}
	else
	{
	 	echo "Error" . $sql . "<br/>" . $koneksi->error;
	}
	$koneksi->close();
    header ("Location: index.php/login");


}
?>