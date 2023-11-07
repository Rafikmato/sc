<?php 
include 'connect.php';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$id = $_POST['id'];
	$bank = $_POST['bank'];
	$no_rekening = $_POST['no_rekening'];
	$nama_rekening = $_POST['nama_rekening'];

	$query = mysqli_query($koneksi, "UPDATE user SET pembayaran = '$bank', nama_rekening = '$nama_rekening', no_rekening = '$no_rekening' WHERE id = '$id' AND email = '$email' ");

	if ($query) {
		?>
		<script type="text/javascript">
			alert('Data Bank Anda Berhasil Di Ubah');
			window.location = "../bank.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert('Data Bank Anda Gagal Di Ubah');
			window.location = "../bank.php";
		</script>
		<?php

	}




	// var_dump($nama_pengguna, $email, $no_kontak, $no_whatsapp, $id);
}
?>