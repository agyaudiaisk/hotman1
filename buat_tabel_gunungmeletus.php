<?php
// mengakses file koneksi.php;
include "C:/xampp/htdocs/hotman/koneksi.php";

// membuat tabel
$sql = "CREATE TABLE gunung (
kode_gunung char(4) PRIMARY KEY,
nama_gunung varchar(100) UNIQUE NOT NULL
)";

//membuat SQL query
$q = $koneksi->query($sql); //memproses query
if ($q === TRUE) {
	echo "Tabel Departemen sukses dibuat";
} else {
	echo "Gagal membuat tabel. ". $koneksi->error;
}
$koneksi->close(); //menutup koneksi

?>