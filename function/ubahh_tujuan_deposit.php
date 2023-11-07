<?php 
	include 'connect.php';

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$nama_rekening = $_POST['nama_rekening'];

		$query = mysqli_query($koneksi, "UPDATE bank SET nama_rekening = '$nama_rekening' WHERE id = '$id' ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Tujuan Deposit Berhasil Diubah');
					window.location = "../tujuan_deposit.php";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Data Tujuan Deposit Gagal Diubah');
					window.location = "../tujuan_deposit.php";
				</script>
			<?php
		}
	}
?>