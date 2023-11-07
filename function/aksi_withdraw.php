<?php 
include 'connect.php';
error_reporting(0);
if (isset($_POST['submit'])) {
	$jumlah = $_POST['jumlah'];
	$withdraw = $_POST['Withdraw'];
	$status = $_POST['status'];
	$email = $_POST['email'];
	$bank = $_POST['bank'];

	if ($jumlah < 50000) {
		?>
		<script type="text/javascript">
			alert('Withdraw Tidak Bisa Kurang Dari 50.000');
			window.location = "../withdraw.php";
		</script>
		<?php
	}else{

		$query = mysqli_query($koneksi, "INSERT INTO transaksi (id,bank,depo_wd,jumlah,status,email) VALUES (NULL,'$bank', '$withdraw','$jumlah','$status','$email') ");
		if ($query) {
			?>
			<script type="text/javascript">
				alert('Silahkan Menunggu Konfirmasi Admin');
				window.location = "../withdraw.php";
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert('Transaksi Gagal');
				window.location = "../withdraw.php";
			</script>
			<?php
		}
	}


}
?>