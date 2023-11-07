<?php 
include 'connect.php';
session_start();

if (isset($_POST['submit'])) {
	$nama_pengguna = $_POST['nama_pengguna'];
	$email = $_POST['email'];
	$no_kontak = $_POST['no_kontak'];
	$no_whatsapp = $_POST['no_whatsapp'];
	$id = $_POST['id'];
	$level = $_POST['level'];
	$nama_pengguna = $_POST['nama_pengguna'];

	$query = mysqli_query($koneksi, "UPDATE user SET nama_lengkap = '$nama_pengguna', email = '$email', no_kontak = '$no_kontak', no_whatsapp = '$no_whatsapp' WHERE id = '$id' ");

	if ($query) {
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $nama_pengguna;
		$_SESSION['level'] = $level;
		$_SESSION['id'] = $id;
		$_SESSION['status'] = "login";
		?>
		<script type="text/javascript">
			alert('Profil Anda Berhasil Di Ubah');
			window.location = "../profil.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert('Profil Anda Gagal Di Ubah');
			window.location = "../profil.php";
		</script>
		<?php
	}

	// var_dump($nama_pengguna, $email, $no_kontak, $no_whatsapp, $id);
}
?>