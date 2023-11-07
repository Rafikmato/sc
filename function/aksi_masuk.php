<?php 
session_start();
include 'connect.php';

$nama_pengguna = $_POST['nama_pengguna_akun'];
$kata_sandi = md5($_POST['kata_sandi_akun']);

	// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where nama_pengguna='$nama_pengguna' and kata_sandi ='$kata_sandi'");
	// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
	// cek apakah username dan password di temukan pada database

if($cek > 0){
	
	$data = mysqli_fetch_assoc($login);
	
		// cek jika user login sebagai admin
	if($data['level']=="admin"){
		
			// buat session login dan username
		$_SESSION['email'] = $data['email'];
		$_SESSION['nama'] = $data['nama_pengguna'];
		$_SESSION['level'] = "admin";
		$_SESSION['id'] = $data['id'];
		$_SESSION['status'] = "login";
			// alihkan ke halaman dashboard admin
		?>
		<script type="text/javascript">
			alert('Login Berhasil');
			window.location = "../index.php";
		</script>
		<?php
		
		// cek jika user login sebagai pegawai
	}else if($data['level']=="pengguna"){
			// buat session login dan username
		$_SESSION['email'] = $data['email'];
		$_SESSION['nama'] = $data['nama_pengguna'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "pengguna";
		$_SESSION['status'] = "login";
		
			// alihkan ke halaman dashboard pengurus
		?>
		<script type="text/javascript">
			alert('Login Berhasil');
			window.location = "../index.php";
		</script>
		<?php
		
	}else if($data['level']=="promotor"){
			// buat session login dan username
		$_SESSION['email'] = $data['email'];
		$_SESSION['nama'] = $data['nama_pengguna'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = "promotor";
		$_SESSION['status'] = "login";
		
			// alihkan ke halaman dashboard pengurus
		?>
		<script type="text/javascript">
			alert('Login Berhasil');
			window.location = "../index.php";
		</script>
		<?php
		
	}else{
		?>
		<script type="text/javascript">
			alert('Login Gagal');
			window.location = "../masuk.php";
		</script>
		<?php
	}	
}else{
	?>
	<script type="text/javascript">
		alert('Login Gagal');
		window.location = "../masuk.php";
	</script>
	<?php
}

?>