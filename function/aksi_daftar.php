<?php 
include 'connect.php';

if (!isset($_POST['submit'])) {
	$nama_pengguna 			= $_POST['nama_pengguna_akun'];
	$kata_sandi				= md5($_POST['kata_sandi_akun']);
	$kata_sandi_akun_2		= md5($_POST['kata_sandi_akun_2']);
	$nama_lengkap			= $_POST['nama_lengkap_akun'];
	$email 					= $_POST['email_akun'];
	$no_kontak				= $_POST['telepon_akun'];
	$no_whatsapp			= $_POST['whatsapp_akun'];
	$pembayaran				= $_POST['rekening_anggota'];
	$nama_rekening 			= $_POST['nama_rekening_anggota'];
	$no_rekening			= $_POST['nomor_rekening_anggota'];

	
	// var_dump($nama_pengguna, $kata_sandi, $kata_sandi_akun_2, $nama_lengkap, $email, $no_kontak, $no_whatsapp, $pembayaran, $nama_rekening, $no_rekening);

	if ($kata_sandi != $kata_sandi_akun_2) {
		?>
		<script type="text/javascript">
			alert('Kata Sandi Yang Anda Masukkan Tidak Sama!');
			window.location = "../daftar.php";
		</script>
		<?php
	}else{
		$query = mysqli_query($koneksi, "SELECT * FROM user WHERE nama_pengguna = '$nama_pengguna' OR email = '$email' ");
		$liat = mysqli_num_rows($query);

		if ($liat < 1) {
			$query1 = mysqli_query($koneksi, "INSERT INTO user VALUES (NULL, '$nama_pengguna', '$kata_sandi', '$nama_lengkap','$email','$no_kontak','$no_whatsapp','$pembayaran','$nama_rekening','$no_rekening','pengguna','0' )");

			if ($query1) {
				?>
				<script type="text/javascript">
					alert('Selamat Akun Berhasil Di Buat');
					window.location = "../masuk.php";
				</script>
				<?php
			}
		}else{
			?>
			<script type="text/javascript">
				alert('Nama Pengguna Atau Email Sudah Di Gunakan');
				window.location = "../daftar.php";
			</script>
			<?php
		}
	}


}
?>