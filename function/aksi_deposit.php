<?php 
include 'connect.php';
error_reporting(0);
if (isset($_POST['submit'])) {
	$jumlah = $_POST['jumlah'];
	$deposit = $_POST['deposit'];
	$status = $_POST['status'];
	$email = $_POST['email'];
	$bank = $_POST['bank'];
	$promo = $_POST['promo'];

	if ($jumlah < 50000 OR $jumlah == "") {
		?>
		<script type="text/javascript">
			alert('Deposit Tidak Bisa Kurang Dari 50.000');
			window.location = "../deposit.php";
		</script>
		<?php
	}else{

		if ($promo == "depo_100" AND $jumlah == "100000") {
			$query = mysqli_query($koneksi, "INSERT INTO transaksi (id,bank,depo_wd,jumlah,status,email) VALUES (NULL,'$bank', '$deposit','200000','$status','$email') ");
			if ($query) {
				?>
				<script type="text/javascript">
					alert('Silahkan Transfer Ke Bank Yang Sudah Di Pilih');
					window.location = "../deposit.php";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert('Transaksi Gagal');
					window.location = "../deposit.php";
				</script>
				<?php
			}

		}else if ($promo == "depo_200" AND $jumlah == "200000") {
			$query = mysqli_query($koneksi, "INSERT INTO transaksi (id,bank,depo_wd,jumlah,status,email) VALUES (NULL,'$bank', '$deposit','	400000','$status','$email') ");
			if ($query) {
				?>
				<script type="text/javascript">
					alert('Silahkan Transfer Ke Bank Yang Sudah Di Pilih');
					window.location = "../deposit.php";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert('Transaksi Gagal');
					window.location = "../deposit.php";
				</script>
				<?php
			}
		}else if ($promo == "depo_300" AND $jumlah == "300000") {
			$query = mysqli_query($koneksi, "INSERT INTO transaksi (id,bank,depo_wd,jumlah,status,email) VALUES (NULL,'$bank', '$deposit','600000','$status','$email') ");
			if ($query) {
				?>
				<script type="text/javascript">
					alert('Silahkan Transfer Ke Bank Yang Sudah Di Pilih');
					window.location = "../deposit.php";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert('Transaksi Gagal');
					window.location = "../deposit.php";
				</script>
				<?php
			}
		}else if ($promo == "depo_500" AND $jumlah == "500000") {
			$query = mysqli_query($koneksi, "INSERT INTO transaksi (id,bank,depo_wd,jumlah,status,email) VALUES (NULL,'$bank', '$deposit','1000000','$status','$email') ");
			if ($query) {
				?>
				<script type="text/javascript">
					alert('Silahkan Transfer Ke Bank Yang Sudah Di Pilih');
					window.location = "../deposit.php";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert('Transaksi Gagal');
					window.location = "../deposit.php";
				</script>
				<?php
			}
		}else{
			$query = mysqli_query($koneksi, "INSERT INTO transaksi (id,bank,depo_wd,jumlah,status,email) VALUES (NULL,'$bank', '$deposit','$jumlah','$status','$email') ");
			if ($query) {
				?>
				<script type="text/javascript">
					alert('Silahkan Transfer Ke Bank Yang Sudah Di Pilih');
					window.location = "../deposit.php";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
					alert('Transaksi Gagal');
					window.location = "../deposit.php";
				</script>
				<?php
			}
		}



	}


}
?>