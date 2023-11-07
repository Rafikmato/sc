<?php 
include 'connect.php';
if (isset($_GET['id']) && isset($_GET['email'])) {
	$id = $_GET['id'];
	$email = $_GET['email'];

	$query = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id = '$id' AND email = '$email' ");
	if ($query) {
		?>
		<script type="text/javascript">
			alert('Data Berhasil Di Hapus');
			window.location = "../withdraw.php";
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert('Data Gagal Di Hapus');
			window.location = "../withdraw.php";
		</script>
		<?php
	}
}
?>