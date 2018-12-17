<?php

include "c:/xampp/htdocs/hotman/koneksi.php";

if(isset($_POST['nama_donatur']))
{
	$namadonatur = $_POST['nama_donatur'];
	$namabencana2 = $_POST['nama_bencana2'];
	$idbencana2 = $_POST['id_bencana2'];
	$email_donatur = $_POST['email_donatur'];
	$alamat_donatur = $_POST['alamat_donatur'];

	$beras = $_POST['beras'];
	$mie_instan = $_POST['mie_instan'];
	$pakaian = $_POST['pakaian'];
	$selimut = $_POST['selimut'];
	$kasur_karpet = $_POST['kasur_karpet'];
	$obat = $_POST['obat'];
	$peralatan_mandi = $_POST['peralatan_mandi'];
	$air_minum = $_POST['air_minum'];
	$susu = $_POST['susu'];


	
	$namadonatur = mysqli_real_escape_string($koneksi, $_POST['nama_donatur']);
	$namabencana2 = mysqli_real_escape_string($koneksi, $_POST['nama_bencana2']);
	$email_donatur = mysqli_real_escape_string($koneksi, $_POST['email_donatur']);
	$idbencana2 = mysqli_real_escape_string($koneksi, $_POST['id_bencana2']);
	$alamat_donatur = mysqli_real_escape_string($koneksi, $_POST['alamat_donatur']);
	$beras = mysqli_real_escape_string($koneksi, $_POST['beras']);
	$mie_instan = mysqli_real_escape_string($koneksi, $_POST['mie_instan']);
	$pakaian = mysqli_real_escape_string($koneksi, $_POST['pakaian']);
	$selimut = mysqli_real_escape_string($koneksi, $_POST['selimut']);
	$kasur_karpet = mysqli_real_escape_string($koneksi, $_POST['kasur_karpet']);
	$obat = mysqli_real_escape_string($koneksi, $_POST['obat']);
	$peralatan_mandi = mysqli_real_escape_string($koneksi, $_POST['peralatan_mandi']);
	$air_minum = mysqli_real_escape_string($koneksi, $_POST['air_minum']);
	$susu = mysqli_real_escape_string($koneksi, $_POST['susu']);

	

	$sql = "INSERT INTO donasi (nama_donatur, nama_bencana2, email_donatur, alamat_donatur, id_bencana2, beras, mie_instan, pakaian, selimut, kasur_karpet, obat, peralatan_mandi, air_minum, susu) VALUES ('$namadonatur', '$namabencana2','$email_donatur','$alamat_donatur','$idbencana2', '$beras', '$mie_instan', '$pakaian', '$selimut', '$kasur_karpet', '$obat', '$peralatan_mandi', '$air_minum', '$susu')";

	if($koneksi->query($sql) === TRUE){ header ("Location: index.php/Donatur/berhasil");
}else{
	 	echo "Error" . $sql . "<br/>" . $koneksi->error;
	 	/**/
	}
	}
	$koneksi->close();
    



?>