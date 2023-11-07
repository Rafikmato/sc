<?php 
	include 'connect.php';

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$live_chat = $_POST['live_chat'];
		$live_chat_wa = $_POST['live_chat_wa'];

		$query = mysqli_query($koneksi, "UPDATE live_chat SET live_chat = '$live_chat', live_chat_wa = '$live_chat_wa' WHERE id = '$id' ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Data Berhasil Diubah');
					window.location = "../live_chat.php";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Data Gagal Diubah');
					window.location = "../live_chat.php";
				</script>
			<?php
		}
	}
?>