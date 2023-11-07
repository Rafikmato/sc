<?php 
include 'connect.php';
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$jumlah = $_POST['jumlah'];

	$query = mysqli_query($koneksi, "UPDATE transaksi SET jumlah = '$jumlah' WHERE id = '$id' ");

	if ($query) {
		?>
		<script type="text/javascript">
			alert('Data Deposit Berhasil Diubah ');
			window.location = "../deposit.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert('Data Deposit Gagal Diubah ');
			window.location = "../deposit.php";
		</script>
		<?php
	}
}
?>