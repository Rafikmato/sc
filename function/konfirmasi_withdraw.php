<?php 
include 'connect.php';
if (isset($_GET['id']) && isset($_GET['email'])) {
	$id = $_GET['id'];
	$email = $_GET['email'];

	// var_dump($id, $email);

	$query = mysqli_query($koneksi,  "SELECT saldo FROM user WHERE email = '$email' ");
	$data = mysqli_fetch_array($query);

	$saldo =  $data['saldo'];

	$query_admin = mysqli_query($koneksi,  "SELECT saldo FROM user WHERE level = 'admin' ");
	$data_admin = mysqli_fetch_array($query_admin);

	$saldo1 =  $data_admin['saldo'];


	$query1 = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id = '$id' ");
	$data1 = mysqli_fetch_array($query1);

	$jumlah = $data1['jumlah'];
	$hitung = $saldo-$jumlah;

	$hitung1 = $saldo1-$jumlah;


	$query2 = mysqli_query($koneksi, "UPDATE user SET saldo = '$hitung' WHERE email = '$email' ");

	$query3 = mysqli_query($koneksi, "UPDATE user SET saldo = '$hitung1' WHERE level = 'admin' ");

	$query4 = mysqli_query($koneksi, "UPDATE transaksi SET status = 'berhasil' WHERE id = '$id' ");

	if ($query4) {
		?>
		<script type="text/javascript">
			alert('Konfirmasi Berhasil');
			window.location = "../withdraw.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert('Konfirmasi Berhasil');
			window.location = "../withdraw.php";
		</script>
		<?php
	}
}
?>