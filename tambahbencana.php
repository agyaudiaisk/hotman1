<?php

include "c:/xampp/htdocs/hotman/koneksi.php";

if(isset($_POST['jenis']))
{
	$path = "c:/xampp/htdocs/hotman/fotobencana/".basename($_FILES['foto']['name']);
	$jenis = $_POST['jenis'];
	$nama_bencana = $_POST['nama_bencana'];
	$deskripsi_bencana = $_POST['deskripsi_bencana'];
	$lokasi_bencana = $_POST['lokasi_bencana'];
	$beras = $_POST['beras'];
	$mie_instan = $_POST['mie_instan'];
	$pakaian = $_POST['pakaian'];
	$foto = $_FILES['foto']['name'];
	$selimut = $_POST['selimut'];

	$kasur_karpet = $_POST['kasur_karpet'];
		$obat = $_POST['obat'];
		$peralatan_mandi = $_POST['peralatan_mandi'];

$air_minum = $_POST['air_minum'];
$susu = $_POST['susu'];
$nama_penerima = $_POST['nama_penerima'];
$alamat_penerima = $_POST['alamat_penerima'];
$telepon_penerima = $_POST['telepon_penerima'];






	
	$jenis = mysqli_real_escape_string($koneksi, $_POST['jenis']);
	$nama_bencana = mysqli_real_escape_string($koneksi, $_POST['nama_bencana']);
	$deskripsi_bencana = mysqli_real_escape_string($koneksi, $_POST['deskripsi_bencana']);
	$lokasi_bencana = mysqli_real_escape_string($koneksi, $_POST['lokasi_bencana']);
	$beras = mysqli_real_escape_string($koneksi, $_POST['beras']);
	$mie_instan = mysqli_real_escape_string($koneksi, $_POST['mie_instan']);
	$pakaian = mysqli_real_escape_string($koneksi, $_POST['pakaian']);
	$selimut = mysqli_real_escape_string($koneksi, $_POST['selimut']);

	$kasur_karpet = mysqli_real_escape_string($koneksi, $_POST['kasur_karpet']);
	$obat = mysqli_real_escape_string($koneksi, $_POST['obat']);
	$peralatan_mandi = mysqli_real_escape_string($koneksi, $_POST['peralatan_mandi']);
	$air_minum = mysqli_real_escape_string($koneksi, $_POST['air_minum']);
	$susu = mysqli_real_escape_string($koneksi, $_POST['susu']);

		$nama_penerima = mysqli_real_escape_string($koneksi, $_POST['nama_penerima']);
		$alamat_penerima = mysqli_real_escape_string($koneksi, $_POST['alamat_penerima']);
		$telepon_penerima = mysqli_real_escape_string($koneksi, $_POST['']);
	

	$sql = "INSERT INTO daftar_bencana (jenis, deskripsi_bencana, selimut, beras, lokasi_bencana, mie_instan, nama_bencana, pakaian, foto, kasur_karpet, obat, peralatan_mandi, air_minum, susu, nama_penerima, alamat_penerima, telepon_penerima) VALUES ('$jenis', '$deskripsi_bencana', '$selimut', '$beras', '$lokasi_bencana', '$mie_instan', '$nama_bencana', '$pakaian', '$foto','$kasur_karpet','$obat','$peralatan_mandi','$air_minum','$susu', '$nama_penerima', '$alamat_penerima', '$telepon_penerima')";

	if (move_uploaded_file($_FILES['foto']['tmp_name'], $path)) {
  	}else{
  		echo "Failed to upload image";
  	}
 
	if($koneksi->query($sql) === TRUE){ header ("Location: index.php/BDPB/kelolabencana");
	}
	else
	{
	 	echo "Error" . $sql . "<br/>" . $koneksi->error;
	}
	$koneksi->close();
    


}
?>