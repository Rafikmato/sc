<?php 
include 'connect.php';

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$id = $_POST['id'];
	$password_lama = md5($_POST['password_lama']);
	$password_baru = md5($_POST['password_baru']);
	$konfirmasi_password_baru = md5($_POST['konfirmasi_password_baru']);

	$query1 = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id' AND email = '$email' ");
	while ($data = mysqli_fetch_array($query1)) {
		$password = $data['kata_sandi'];
	}

	if ($password_lama != $password) {
		?>
		<script type="text/javascript">
			alert('Maaf, Password Lama Anda Tidak Sesuai!');
			window.location = "../ubah_password.php";
		</script>
		<?php
	}else if ($password_baru != $konfirmasi_password_baru) {
		?>
		<script type="text/javascript">
			alert('Maaf, Password Baru Dan Konfirmasi password Anda Tidak Sesuai!');
			window.location = "../ubah_password.php";
		</script>
		<?php
	}else{
		$query = mysqli_query($koneksi, "UPDATE user SET kata_sandi = '$password_baru' WHERE id = '$id' AND email = '$email' ");

		if ($query) {
			?>
			<script type="text/javascript">
				alert('Selamat Password Anda Berhasil Di Ubah');
				window.location = "../ubah_password.php";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert('Maaf Password Anda Gagal Di Ubah');
				window.location = "../ubah_password.php";
			</script>
			<?php
		}
	}

	
	

	// var_dump($nama_pengguna, $email, $no_kontak, $no_whatsapp, $id);
}
?>