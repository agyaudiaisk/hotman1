<?php

//Inisiasi nilai-nilai parameter koneksi
$namaServer = "localhost"; //isikan nama server anda
$namaPengguna = "root"; //isikan nama basisdata anda
$password = ""; //isikan password
$nama_db = "bencana";
//membuat koneksi
$koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db );
//memeriksa apakah koneksi sukses dilakukan
if($koneksi->connect_error) {
	die("Koneksi gagal: ". $koneksi->connect_error. "<br>");
} 
echo "Koneksi sukses. <br >";
?>