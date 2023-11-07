<?php 
	include 'connect.php';

	if (isset($_POST['submit'])) {
		$nama_rekening = $_POST['nama_rekening'];

		$query = mysqli_query($koneksi, "INSERT INTO bank VALUES (NULL, '$nama_rekening') ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Tujuan Deposit Berhasil Tambahkan');
					window.location = "../tujuan_deposit.php";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Data Tujuan Deposit Gagal Tambahkan');
					window.location = "../tujuan_deposit.php";
				</script>
			<?php
		}
	}
?>