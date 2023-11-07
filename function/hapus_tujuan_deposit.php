<?php 
	include 'connect.php';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM bank WHERE id = '$id' ");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Berhasil Di Hapus');
					window.location = "../tujuan_deposit.php";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Data Gagal Di Hapus');
					window.location = "../tujuan_deposit.php";
				</script>
			<?php
		}
	}
?>